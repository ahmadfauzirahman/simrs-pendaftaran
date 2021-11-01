<?php

namespace app\controllers;

use Yii;
use app\models\PreceiptDet;
use app\models\PreceiptDetSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PreceiptDetController implements the CRUD actions for PreceiptDet model.
 */
class PreceiptDetController extends Controller
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
     * Lists all PreceiptDet models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PreceiptDetSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PreceiptDet model.
     * @param integer $receipt_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($receipt_id, $seq)
    {
        return $this->render('view', [
            'model' => $this->findModel($receipt_id, $seq),
        ]);
    }

    /**
     * Creates a new PreceiptDet model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new PreceiptDet();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'receipt_id' => $model->receipt_id, 'seq' => $model->seq]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing PreceiptDet model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $receipt_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($receipt_id, $seq)
    {
        $model = $this->findModel($receipt_id, $seq);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'receipt_id' => $model->receipt_id, 'seq' => $model->seq]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing PreceiptDet model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $receipt_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($receipt_id, $seq)
    {
        $this->findModel($receipt_id, $seq)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PreceiptDet model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $receipt_id
     * @param integer $seq
     * @return PreceiptDet the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($receipt_id, $seq)
    {
        if (($model = PreceiptDet::findOne(['receipt_id' => $receipt_id, 'seq' => $seq])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
