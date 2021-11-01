<?php

namespace app\controllers;

use Yii;
use app\models\CurHisExchg;
use app\models\CurHisExchgSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CurHisExchgController implements the CRUD actions for CurHisExchg model.
 */
class CurHisExchgController extends Controller
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
     * Lists all CurHisExchg models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CurHisExchgSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single CurHisExchg model.
     * @param integer $currency_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($currency_id, $seq)
    {
        return $this->render('view', [
            'model' => $this->findModel($currency_id, $seq),
        ]);
    }

    /**
     * Creates a new CurHisExchg model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new CurHisExchg();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'currency_id' => $model->currency_id, 'seq' => $model->seq]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing CurHisExchg model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $currency_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($currency_id, $seq)
    {
        $model = $this->findModel($currency_id, $seq);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'currency_id' => $model->currency_id, 'seq' => $model->seq]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing CurHisExchg model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $currency_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($currency_id, $seq)
    {
        $this->findModel($currency_id, $seq)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the CurHisExchg model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $currency_id
     * @param integer $seq
     * @return CurHisExchg the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($currency_id, $seq)
    {
        if (($model = CurHisExchg::findOne(['currency_id' => $currency_id, 'seq' => $seq])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
