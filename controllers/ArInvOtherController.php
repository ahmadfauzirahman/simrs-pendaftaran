<?php

namespace app\controllers;

use Yii;
use app\models\ArInvOther;
use app\models\ArInvOtherSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ArInvOtherController implements the CRUD actions for ArInvOther model.
 */
class ArInvOtherController extends Controller
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
     * Lists all ArInvOther models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ArInvOtherSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ArInvOther model.
     * @param integer $invoice_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($invoice_id, $seq)
    {
        return $this->render('view', [
            'model' => $this->findModel($invoice_id, $seq),
        ]);
    }

    /**
     * Creates a new ArInvOther model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ArInvOther();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'invoice_id' => $model->invoice_id, 'seq' => $model->seq]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing ArInvOther model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $invoice_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($invoice_id, $seq)
    {
        $model = $this->findModel($invoice_id, $seq);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'invoice_id' => $model->invoice_id, 'seq' => $model->seq]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing ArInvOther model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $invoice_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($invoice_id, $seq)
    {
        $this->findModel($invoice_id, $seq)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ArInvOther model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $invoice_id
     * @param integer $seq
     * @return ArInvOther the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($invoice_id, $seq)
    {
        if (($model = ArInvOther::findOne(['invoice_id' => $invoice_id, 'seq' => $seq])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
