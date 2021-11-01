<?php

namespace app\controllers;

use Yii;
use app\models\GlBalance;
use app\models\GlBalanceSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * GlBalanceController implements the CRUD actions for GlBalance model.
 */
class GlBalanceController extends Controller
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
     * Lists all GlBalance models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new GlBalanceSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single GlBalance model.
     * @param integer $account_id
     * @param integer $location_id
     * @param integer $gl_year
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($account_id, $location_id, $gl_year)
    {
        return $this->render('view', [
            'model' => $this->findModel($account_id, $location_id, $gl_year),
        ]);
    }

    /**
     * Creates a new GlBalance model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new GlBalance();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'account_id' => $model->account_id, 'location_id' => $model->location_id, 'gl_year' => $model->gl_year]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing GlBalance model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $account_id
     * @param integer $location_id
     * @param integer $gl_year
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($account_id, $location_id, $gl_year)
    {
        $model = $this->findModel($account_id, $location_id, $gl_year);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'account_id' => $model->account_id, 'location_id' => $model->location_id, 'gl_year' => $model->gl_year]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing GlBalance model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $account_id
     * @param integer $location_id
     * @param integer $gl_year
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($account_id, $location_id, $gl_year)
    {
        $this->findModel($account_id, $location_id, $gl_year)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the GlBalance model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $account_id
     * @param integer $location_id
     * @param integer $gl_year
     * @return GlBalance the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($account_id, $location_id, $gl_year)
    {
        if (($model = GlBalance::findOne(['account_id' => $account_id, 'location_id' => $location_id, 'gl_year' => $gl_year])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
