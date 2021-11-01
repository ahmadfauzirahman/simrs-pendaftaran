<?php

namespace app\controllers;

use Yii;
use app\models\PicListPayXt;
use app\models\PicListPayXtSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PicListPayXtController implements the CRUD actions for PicListPayXt model.
 */
class PicListPayXtController extends Controller
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
     * Lists all PicListPayXt models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PicListPayXtSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PicListPayXt model.
     * @param integer $pay_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($pay_id, $seq)
    {
        return $this->render('view', [
            'model' => $this->findModel($pay_id, $seq),
        ]);
    }

    /**
     * Creates a new PicListPayXt model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new PicListPayXt();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'pay_id' => $model->pay_id, 'seq' => $model->seq]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing PicListPayXt model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $pay_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($pay_id, $seq)
    {
        $model = $this->findModel($pay_id, $seq);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'pay_id' => $model->pay_id, 'seq' => $model->seq]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing PicListPayXt model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $pay_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($pay_id, $seq)
    {
        $this->findModel($pay_id, $seq)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PicListPayXt model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $pay_id
     * @param integer $seq
     * @return PicListPayXt the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($pay_id, $seq)
    {
        if (($model = PicListPayXt::findOne(['pay_id' => $pay_id, 'seq' => $seq])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
