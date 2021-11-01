<?php

namespace app\controllers;

use Yii;
use app\models\BpjsVerification;
use app\models\BpjsVerificationSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BpjsVerificationController implements the CRUD actions for BpjsVerification model.
 */
class BpjsVerificationController extends Controller
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
     * Lists all BpjsVerification models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new BpjsVerificationSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single BpjsVerification model.
     * @param string $user_name
     * @param string $request_time
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($user_name, $request_time, $seq)
    {
        return $this->render('view', [
            'model' => $this->findModel($user_name, $request_time, $seq),
        ]);
    }

    /**
     * Creates a new BpjsVerification model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new BpjsVerification();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'user_name' => $model->user_name, 'request_time' => $model->request_time, 'seq' => $model->seq]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing BpjsVerification model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $user_name
     * @param string $request_time
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($user_name, $request_time, $seq)
    {
        $model = $this->findModel($user_name, $request_time, $seq);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'user_name' => $model->user_name, 'request_time' => $model->request_time, 'seq' => $model->seq]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing BpjsVerification model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $user_name
     * @param string $request_time
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($user_name, $request_time, $seq)
    {
        $this->findModel($user_name, $request_time, $seq)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the BpjsVerification model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $user_name
     * @param string $request_time
     * @param integer $seq
     * @return BpjsVerification the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($user_name, $request_time, $seq)
    {
        if (($model = BpjsVerification::findOne(['user_name' => $user_name, 'request_time' => $request_time, 'seq' => $seq])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
