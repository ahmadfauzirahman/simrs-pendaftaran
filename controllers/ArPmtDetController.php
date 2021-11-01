<?php

namespace app\controllers;

use Yii;
use app\models\ArPmtDet;
use app\models\ArPmtDetSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ArPmtDetController implements the CRUD actions for ArPmtDet model.
 */
class ArPmtDetController extends Controller
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
     * Lists all ArPmtDet models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ArPmtDetSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ArPmtDet model.
     * @param integer $payment_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($payment_id, $seq)
    {
        return $this->render('view', [
            'model' => $this->findModel($payment_id, $seq),
        ]);
    }

    /**
     * Creates a new ArPmtDet model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ArPmtDet();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'payment_id' => $model->payment_id, 'seq' => $model->seq]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing ArPmtDet model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $payment_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($payment_id, $seq)
    {
        $model = $this->findModel($payment_id, $seq);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'payment_id' => $model->payment_id, 'seq' => $model->seq]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing ArPmtDet model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $payment_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($payment_id, $seq)
    {
        $this->findModel($payment_id, $seq)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ArPmtDet model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $payment_id
     * @param integer $seq
     * @return ArPmtDet the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($payment_id, $seq)
    {
        if (($model = ArPmtDet::findOne(['payment_id' => $payment_id, 'seq' => $seq])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
