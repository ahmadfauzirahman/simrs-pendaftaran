<?php

namespace app\controllers;

use Yii;
use app\models\NurseCareVsign;
use app\models\NurseCareVsignSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * NurseCareVsignController implements the CRUD actions for NurseCareVsign model.
 */
class NurseCareVsignController extends Controller
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
     * Lists all NurseCareVsign models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new NurseCareVsignSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single NurseCareVsign model.
     * @param integer $folio_id
     * @param integer $seq
     * @param string $param_name
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($folio_id, $seq, $param_name)
    {
        return $this->render('view', [
            'model' => $this->findModel($folio_id, $seq, $param_name),
        ]);
    }

    /**
     * Creates a new NurseCareVsign model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new NurseCareVsign();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'folio_id' => $model->folio_id, 'seq' => $model->seq, 'param_name' => $model->param_name]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing NurseCareVsign model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $folio_id
     * @param integer $seq
     * @param string $param_name
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($folio_id, $seq, $param_name)
    {
        $model = $this->findModel($folio_id, $seq, $param_name);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'folio_id' => $model->folio_id, 'seq' => $model->seq, 'param_name' => $model->param_name]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing NurseCareVsign model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $folio_id
     * @param integer $seq
     * @param string $param_name
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($folio_id, $seq, $param_name)
    {
        $this->findModel($folio_id, $seq, $param_name)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the NurseCareVsign model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $folio_id
     * @param integer $seq
     * @param string $param_name
     * @return NurseCareVsign the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($folio_id, $seq, $param_name)
    {
        if (($model = NurseCareVsign::findOne(['folio_id' => $folio_id, 'seq' => $seq, 'param_name' => $param_name])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
