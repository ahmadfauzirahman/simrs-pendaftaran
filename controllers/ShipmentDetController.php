<?php

namespace app\controllers;

use Yii;
use app\models\ShipmentDet;
use app\models\ShipmentDetSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ShipmentDetController implements the CRUD actions for ShipmentDet model.
 */
class ShipmentDetController extends Controller
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
     * Lists all ShipmentDet models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ShipmentDetSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ShipmentDet model.
     * @param integer $shipment_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($shipment_id, $seq)
    {
        return $this->render('view', [
            'model' => $this->findModel($shipment_id, $seq),
        ]);
    }

    /**
     * Creates a new ShipmentDet model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ShipmentDet();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'shipment_id' => $model->shipment_id, 'seq' => $model->seq]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing ShipmentDet model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $shipment_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($shipment_id, $seq)
    {
        $model = $this->findModel($shipment_id, $seq);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'shipment_id' => $model->shipment_id, 'seq' => $model->seq]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing ShipmentDet model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $shipment_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($shipment_id, $seq)
    {
        $this->findModel($shipment_id, $seq)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ShipmentDet model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $shipment_id
     * @param integer $seq
     * @return ShipmentDet the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($shipment_id, $seq)
    {
        if (($model = ShipmentDet::findOne(['shipment_id' => $shipment_id, 'seq' => $seq])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
