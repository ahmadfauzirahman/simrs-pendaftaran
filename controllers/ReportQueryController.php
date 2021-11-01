<?php

namespace app\controllers;

use Yii;
use app\models\ReportQuery;
use app\models\ReportQuerySearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ReportQueryController implements the CRUD actions for ReportQuery model.
 */
class ReportQueryController extends Controller
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
     * Lists all ReportQuery models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ReportQuerySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ReportQuery model.
     * @param integer $report_id
     * @param integer $query_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($report_id, $query_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($report_id, $query_id),
        ]);
    }

    /**
     * Creates a new ReportQuery model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ReportQuery();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'report_id' => $model->report_id, 'query_id' => $model->query_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing ReportQuery model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $report_id
     * @param integer $query_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($report_id, $query_id)
    {
        $model = $this->findModel($report_id, $query_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'report_id' => $model->report_id, 'query_id' => $model->query_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing ReportQuery model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $report_id
     * @param integer $query_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($report_id, $query_id)
    {
        $this->findModel($report_id, $query_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ReportQuery model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $report_id
     * @param integer $query_id
     * @return ReportQuery the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($report_id, $query_id)
    {
        if (($model = ReportQuery::findOne(['report_id' => $report_id, 'query_id' => $query_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
