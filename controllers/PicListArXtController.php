<?php

namespace app\controllers;

use Yii;
use app\models\PicListArXt;
use app\models\PicListArXtSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PicListArXtController implements the CRUD actions for PicListArXt model.
 */
class PicListArXtController extends Controller
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
     * Lists all PicListArXt models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PicListArXtSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PicListArXt model.
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
     * Creates a new PicListArXt model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new PicListArXt();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'pay_id' => $model->pay_id, 'seq' => $model->seq]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing PicListArXt model.
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
     * Deletes an existing PicListArXt model.
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
     * Finds the PicListArXt model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $pay_id
     * @param integer $seq
     * @return PicListArXt the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($pay_id, $seq)
    {
        if (($model = PicListArXt::findOne(['pay_id' => $pay_id, 'seq' => $seq])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
