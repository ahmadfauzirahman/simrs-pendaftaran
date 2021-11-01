<?php

namespace app\controllers;

use Yii;
use app\models\VenBalance;
use app\models\VenBalanceSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * VenBalanceController implements the CRUD actions for VenBalance model.
 */
class VenBalanceController extends Controller
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
     * Lists all VenBalance models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new VenBalanceSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single VenBalance model.
     * @param integer $vendor_id
     * @param integer $currency_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($vendor_id, $currency_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($vendor_id, $currency_id),
        ]);
    }

    /**
     * Creates a new VenBalance model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new VenBalance();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'vendor_id' => $model->vendor_id, 'currency_id' => $model->currency_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing VenBalance model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $vendor_id
     * @param integer $currency_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($vendor_id, $currency_id)
    {
        $model = $this->findModel($vendor_id, $currency_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'vendor_id' => $model->vendor_id, 'currency_id' => $model->currency_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing VenBalance model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $vendor_id
     * @param integer $currency_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($vendor_id, $currency_id)
    {
        $this->findModel($vendor_id, $currency_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the VenBalance model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $vendor_id
     * @param integer $currency_id
     * @return VenBalance the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($vendor_id, $currency_id)
    {
        if (($model = VenBalance::findOne(['vendor_id' => $vendor_id, 'currency_id' => $currency_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
