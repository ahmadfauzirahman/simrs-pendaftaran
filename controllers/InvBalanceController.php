<?php

namespace app\controllers;

use Yii;
use app\models\InvBalance;
use app\models\InvBalanceSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * InvBalanceController implements the CRUD actions for InvBalance model.
 */
class InvBalanceController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all InvBalance models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new InvBalanceSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single InvBalance model.
     * @param integer $item_id
     * @param integer $warehouse_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($item_id, $warehouse_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($item_id, $warehouse_id),
        ]);
    }

    /**
     * Creates a new InvBalance model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new InvBalance();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'item_id' => $model->item_id, 'warehouse_id' => $model->warehouse_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing InvBalance model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $item_id
     * @param integer $warehouse_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($item_id, $warehouse_id)
    {
        $model = $this->findModel($item_id, $warehouse_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'item_id' => $model->item_id, 'warehouse_id' => $model->warehouse_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing InvBalance model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $item_id
     * @param integer $warehouse_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($item_id, $warehouse_id)
    {
        $this->findModel($item_id, $warehouse_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the InvBalance model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $item_id
     * @param integer $warehouse_id
     * @return InvBalance the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($item_id, $warehouse_id)
    {
        if (($model = InvBalance::findOne(['item_id' => $item_id, 'warehouse_id' => $warehouse_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
