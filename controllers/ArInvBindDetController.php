<?php

namespace app\controllers;

use Yii;
use app\models\ArInvBindDet;
use app\models\ArInvBindDetSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ArInvBindDetController implements the CRUD actions for ArInvBindDet model.
 */
class ArInvBindDetController extends Controller
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
     * Lists all ArInvBindDet models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ArInvBindDetSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ArInvBindDet model.
     * @param integer $bind_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($bind_id, $seq)
    {
        return $this->render('view', [
            'model' => $this->findModel($bind_id, $seq),
        ]);
    }

    /**
     * Creates a new ArInvBindDet model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ArInvBindDet();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'bind_id' => $model->bind_id, 'seq' => $model->seq]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing ArInvBindDet model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $bind_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($bind_id, $seq)
    {
        $model = $this->findModel($bind_id, $seq);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'bind_id' => $model->bind_id, 'seq' => $model->seq]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing ArInvBindDet model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $bind_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($bind_id, $seq)
    {
        $this->findModel($bind_id, $seq)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ArInvBindDet model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $bind_id
     * @param integer $seq
     * @return ArInvBindDet the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($bind_id, $seq)
    {
        if (($model = ArInvBindDet::findOne(['bind_id' => $bind_id, 'seq' => $seq])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
