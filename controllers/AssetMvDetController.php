<?php

namespace app\controllers;

use Yii;
use app\models\AssetMvDet;
use app\models\AssetMvDetSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AssetMvDetController implements the CRUD actions for AssetMvDet model.
 */
class AssetMvDetController extends Controller
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
     * Lists all AssetMvDet models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AssetMvDetSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single AssetMvDet model.
     * @param integer $mv_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($mv_id, $seq)
    {
        return $this->render('view', [
            'model' => $this->findModel($mv_id, $seq),
        ]);
    }

    /**
     * Creates a new AssetMvDet model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new AssetMvDet();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'mv_id' => $model->mv_id, 'seq' => $model->seq]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing AssetMvDet model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $mv_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($mv_id, $seq)
    {
        $model = $this->findModel($mv_id, $seq);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'mv_id' => $model->mv_id, 'seq' => $model->seq]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing AssetMvDet model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $mv_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($mv_id, $seq)
    {
        $this->findModel($mv_id, $seq)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the AssetMvDet model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $mv_id
     * @param integer $seq
     * @return AssetMvDet the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($mv_id, $seq)
    {
        if (($model = AssetMvDet::findOne(['mv_id' => $mv_id, 'seq' => $seq])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
