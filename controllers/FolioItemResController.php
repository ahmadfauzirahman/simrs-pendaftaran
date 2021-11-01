<?php

namespace app\controllers;

use Yii;
use app\models\FolioItemRes;
use app\models\FolioItemResSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * FolioItemResController implements the CRUD actions for FolioItemRes model.
 */
class FolioItemResController extends Controller
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
     * Lists all FolioItemRes models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new FolioItemResSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single FolioItemRes model.
     * @param integer $folio_id
     * @param integer $seq
     * @param integer $resource_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($folio_id, $seq, $resource_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($folio_id, $seq, $resource_id),
        ]);
    }

    /**
     * Creates a new FolioItemRes model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new FolioItemRes();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'folio_id' => $model->folio_id, 'seq' => $model->seq, 'resource_id' => $model->resource_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing FolioItemRes model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $folio_id
     * @param integer $seq
     * @param integer $resource_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($folio_id, $seq, $resource_id)
    {
        $model = $this->findModel($folio_id, $seq, $resource_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'folio_id' => $model->folio_id, 'seq' => $model->seq, 'resource_id' => $model->resource_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing FolioItemRes model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $folio_id
     * @param integer $seq
     * @param integer $resource_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($folio_id, $seq, $resource_id)
    {
        $this->findModel($folio_id, $seq, $resource_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the FolioItemRes model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $folio_id
     * @param integer $seq
     * @param integer $resource_id
     * @return FolioItemRes the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($folio_id, $seq, $resource_id)
    {
        if (($model = FolioItemRes::findOne(['folio_id' => $folio_id, 'seq' => $seq, 'resource_id' => $resource_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}