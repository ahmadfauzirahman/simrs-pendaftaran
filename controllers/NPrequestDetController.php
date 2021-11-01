<?php

namespace app\controllers;

use Yii;
use app\models\NprequestDet;
use app\models\NPrequestDetSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * NPrequestDetController implements the CRUD actions for NprequestDet model.
 */
class NPrequestDetController extends Controller
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
     * Lists all NprequestDet models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new NPrequestDetSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single NprequestDet model.
     * @param integer $request_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($request_id, $seq)
    {
        return $this->render('view', [
            'model' => $this->findModel($request_id, $seq),
        ]);
    }

    /**
     * Creates a new NprequestDet model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new NprequestDet();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'request_id' => $model->request_id, 'seq' => $model->seq]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing NprequestDet model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $request_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($request_id, $seq)
    {
        $model = $this->findModel($request_id, $seq);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'request_id' => $model->request_id, 'seq' => $model->seq]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing NprequestDet model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $request_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($request_id, $seq)
    {
        $this->findModel($request_id, $seq)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the NprequestDet model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $request_id
     * @param integer $seq
     * @return NprequestDet the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($request_id, $seq)
    {
        if (($model = NprequestDet::findOne(['request_id' => $request_id, 'seq' => $seq])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
