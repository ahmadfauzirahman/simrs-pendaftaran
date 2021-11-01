<?php

namespace app\controllers;

use Yii;
use app\models\ReportDataDom;
use app\models\ReportDataDomSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ReportDataDomController implements the CRUD actions for ReportDataDom model.
 */
class ReportDataDomController extends Controller
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
     * Lists all ReportDataDom models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ReportDataDomSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ReportDataDom model.
     * @param integer $report_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($report_id, $seq)
    {
        return $this->render('view', [
            'model' => $this->findModel($report_id, $seq),
        ]);
    }

    /**
     * Creates a new ReportDataDom model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ReportDataDom();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'report_id' => $model->report_id, 'seq' => $model->seq]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing ReportDataDom model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $report_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($report_id, $seq)
    {
        $model = $this->findModel($report_id, $seq);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'report_id' => $model->report_id, 'seq' => $model->seq]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing ReportDataDom model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $report_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($report_id, $seq)
    {
        $this->findModel($report_id, $seq)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ReportDataDom model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $report_id
     * @param integer $seq
     * @return ReportDataDom the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($report_id, $seq)
    {
        if (($model = ReportDataDom::findOne(['report_id' => $report_id, 'seq' => $seq])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
