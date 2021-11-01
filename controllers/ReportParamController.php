<?php

namespace app\controllers;

use Yii;
use app\models\ReportParam;
use app\models\ReportParamSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ReportParamController implements the CRUD actions for ReportParam model.
 */
class ReportParamController extends Controller
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
     * Lists all ReportParam models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ReportParamSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ReportParam model.
     * @param integer $report_id
     * @param integer $param_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($report_id, $param_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($report_id, $param_id),
        ]);
    }

    /**
     * Creates a new ReportParam model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ReportParam();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'report_id' => $model->report_id, 'param_id' => $model->param_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing ReportParam model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $report_id
     * @param integer $param_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($report_id, $param_id)
    {
        $model = $this->findModel($report_id, $param_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'report_id' => $model->report_id, 'param_id' => $model->param_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing ReportParam model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $report_id
     * @param integer $param_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($report_id, $param_id)
    {
        $this->findModel($report_id, $param_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ReportParam model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $report_id
     * @param integer $param_id
     * @return ReportParam the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($report_id, $param_id)
    {
        if (($model = ReportParam::findOne(['report_id' => $report_id, 'param_id' => $param_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
