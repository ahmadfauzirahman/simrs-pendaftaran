<?php

namespace app\controllers;

use Yii;
use app\models\AssetDepPeriod;
use app\models\AssetDepPeriodSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AssetDepPeriodController implements the CRUD actions for AssetDepPeriod model.
 */
class AssetDepPeriodController extends Controller
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
     * Lists all AssetDepPeriod models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AssetDepPeriodSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single AssetDepPeriod model.
     * @param integer $asset_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($asset_id, $seq)
    {
        return $this->render('view', [
            'model' => $this->findModel($asset_id, $seq),
        ]);
    }

    /**
     * Creates a new AssetDepPeriod model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new AssetDepPeriod();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'asset_id' => $model->asset_id, 'seq' => $model->seq]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing AssetDepPeriod model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $asset_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($asset_id, $seq)
    {
        $model = $this->findModel($asset_id, $seq);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'asset_id' => $model->asset_id, 'seq' => $model->seq]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing AssetDepPeriod model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $asset_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($asset_id, $seq)
    {
        $this->findModel($asset_id, $seq)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the AssetDepPeriod model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $asset_id
     * @param integer $seq
     * @return AssetDepPeriod the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($asset_id, $seq)
    {
        if (($model = AssetDepPeriod::findOne(['asset_id' => $asset_id, 'seq' => $seq])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
