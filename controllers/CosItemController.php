<?php

namespace app\controllers;

use Yii;
use app\models\CosItem;
use app\models\CosItemSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CosItemController implements the CRUD actions for CosItem model.
 */
class CosItemController extends Controller
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
     * Lists all CosItem models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CosItemSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single CosItem model.
     * @param integer $cos_id
     * @param integer $item_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($cos_id, $item_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($cos_id, $item_id),
        ]);
    }

    /**
     * Creates a new CosItem model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new CosItem();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'cos_id' => $model->cos_id, 'item_id' => $model->item_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing CosItem model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $cos_id
     * @param integer $item_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($cos_id, $item_id)
    {
        $model = $this->findModel($cos_id, $item_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'cos_id' => $model->cos_id, 'item_id' => $model->item_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing CosItem model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $cos_id
     * @param integer $item_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($cos_id, $item_id)
    {
        $this->findModel($cos_id, $item_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the CosItem model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $cos_id
     * @param integer $item_id
     * @return CosItem the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($cos_id, $item_id)
    {
        if (($model = CosItem::findOne(['cos_id' => $cos_id, 'item_id' => $item_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
