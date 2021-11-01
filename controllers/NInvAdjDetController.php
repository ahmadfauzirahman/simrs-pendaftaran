<?php

namespace app\controllers;

use Yii;
use app\models\NInvAdjDet;
use app\models\NInvAdjDetSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * NInvAdjDetController implements the CRUD actions for NInvAdjDet model.
 */
class NInvAdjDetController extends Controller
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
     * Lists all NInvAdjDet models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new NInvAdjDetSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single NInvAdjDet model.
     * @param integer $adjustment_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($adjustment_id, $seq)
    {
        return $this->render('view', [
            'model' => $this->findModel($adjustment_id, $seq),
        ]);
    }

    /**
     * Creates a new NInvAdjDet model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new NInvAdjDet();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'adjustment_id' => $model->adjustment_id, 'seq' => $model->seq]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing NInvAdjDet model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $adjustment_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($adjustment_id, $seq)
    {
        $model = $this->findModel($adjustment_id, $seq);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'adjustment_id' => $model->adjustment_id, 'seq' => $model->seq]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing NInvAdjDet model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $adjustment_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($adjustment_id, $seq)
    {
        $this->findModel($adjustment_id, $seq)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the NInvAdjDet model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $adjustment_id
     * @param integer $seq
     * @return NInvAdjDet the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($adjustment_id, $seq)
    {
        if (($model = NInvAdjDet::findOne(['adjustment_id' => $adjustment_id, 'seq' => $seq])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
