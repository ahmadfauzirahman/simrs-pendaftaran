<?php

namespace app\controllers;

use Yii;
use app\models\NMonthlyCost;
use app\models\NMonthlyCostSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * NMonthlyCostController implements the CRUD actions for NMonthlyCost model.
 */
class NMonthlyCostController extends Controller
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
     * Lists all NMonthlyCost models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new NMonthlyCostSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single NMonthlyCost model.
     * @param string $inv_date
     * @param integer $item_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($inv_date, $item_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($inv_date, $item_id),
        ]);
    }

    /**
     * Creates a new NMonthlyCost model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new NMonthlyCost();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'inv_date' => $model->inv_date, 'item_id' => $model->item_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing NMonthlyCost model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $inv_date
     * @param integer $item_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($inv_date, $item_id)
    {
        $model = $this->findModel($inv_date, $item_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'inv_date' => $model->inv_date, 'item_id' => $model->item_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing NMonthlyCost model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $inv_date
     * @param integer $item_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($inv_date, $item_id)
    {
        $this->findModel($inv_date, $item_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the NMonthlyCost model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $inv_date
     * @param integer $item_id
     * @return NMonthlyCost the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($inv_date, $item_id)
    {
        if (($model = NMonthlyCost::findOne(['inv_date' => $inv_date, 'item_id' => $item_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
