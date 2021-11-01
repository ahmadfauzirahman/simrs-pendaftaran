<?php

namespace app\controllers;

use Yii;
use app\models\ResponeTimePoliXt;
use app\models\ResponeTimePoliXtSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ResponeTimePoliXtController implements the CRUD actions for ResponeTimePoliXt model.
 */
class ResponeTimePoliXtController extends Controller
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
     * Lists all ResponeTimePoliXt models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ResponeTimePoliXtSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ResponeTimePoliXt model.
     * @param integer $respone_id
     * @param integer $folio_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($respone_id, $folio_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($respone_id, $folio_id),
        ]);
    }

    /**
     * Creates a new ResponeTimePoliXt model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ResponeTimePoliXt();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'respone_id' => $model->respone_id, 'folio_id' => $model->folio_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing ResponeTimePoliXt model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $respone_id
     * @param integer $folio_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($respone_id, $folio_id)
    {
        $model = $this->findModel($respone_id, $folio_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'respone_id' => $model->respone_id, 'folio_id' => $model->folio_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing ResponeTimePoliXt model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $respone_id
     * @param integer $folio_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($respone_id, $folio_id)
    {
        $this->findModel($respone_id, $folio_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ResponeTimePoliXt model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $respone_id
     * @param integer $folio_id
     * @return ResponeTimePoliXt the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($respone_id, $folio_id)
    {
        if (($model = ResponeTimePoliXt::findOne(['respone_id' => $respone_id, 'folio_id' => $folio_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
