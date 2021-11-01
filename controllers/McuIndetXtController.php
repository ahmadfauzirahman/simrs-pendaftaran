<?php

namespace app\controllers;

use Yii;
use app\models\McuIndetXt;
use app\models\McuIndetXtSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * McuIndetXtController implements the CRUD actions for McuIndetXt model.
 */
class McuIndetXtController extends Controller
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
     * Lists all McuIndetXt models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new McuIndetXtSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single McuIndetXt model.
     * @param integer $mcu_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($mcu_id, $seq)
    {
        return $this->render('view', [
            'model' => $this->findModel($mcu_id, $seq),
        ]);
    }

    /**
     * Creates a new McuIndetXt model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new McuIndetXt();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'mcu_id' => $model->mcu_id, 'seq' => $model->seq]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing McuIndetXt model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $mcu_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($mcu_id, $seq)
    {
        $model = $this->findModel($mcu_id, $seq);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'mcu_id' => $model->mcu_id, 'seq' => $model->seq]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing McuIndetXt model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $mcu_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($mcu_id, $seq)
    {
        $this->findModel($mcu_id, $seq)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the McuIndetXt model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $mcu_id
     * @param integer $seq
     * @return McuIndetXt the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($mcu_id, $seq)
    {
        if (($model = McuIndetXt::findOne(['mcu_id' => $mcu_id, 'seq' => $seq])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
