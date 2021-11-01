<?php

namespace app\controllers;

use Yii;
use app\models\AssetDepYear;
use app\models\AssetDepYearSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AssetDepYearController implements the CRUD actions for AssetDepYear model.
 */
class AssetDepYearController extends Controller
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
     * Lists all AssetDepYear models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AssetDepYearSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single AssetDepYear model.
     * @param integer $asset_id
     * @param integer $year_no
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($asset_id, $year_no)
    {
        return $this->render('view', [
            'model' => $this->findModel($asset_id, $year_no),
        ]);
    }

    /**
     * Creates a new AssetDepYear model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new AssetDepYear();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'asset_id' => $model->asset_id, 'year_no' => $model->year_no]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing AssetDepYear model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $asset_id
     * @param integer $year_no
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($asset_id, $year_no)
    {
        $model = $this->findModel($asset_id, $year_no);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'asset_id' => $model->asset_id, 'year_no' => $model->year_no]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing AssetDepYear model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $asset_id
     * @param integer $year_no
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($asset_id, $year_no)
    {
        $this->findModel($asset_id, $year_no)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the AssetDepYear model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $asset_id
     * @param integer $year_no
     * @return AssetDepYear the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($asset_id, $year_no)
    {
        if (($model = AssetDepYear::findOne(['asset_id' => $asset_id, 'year_no' => $year_no])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
