<?php

namespace app\controllers;

use Yii;
use app\models\QServerDet;
use app\models\QServerDetSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * QServerDetController implements the CRUD actions for QServerDet model.
 */
class QServerDetController extends Controller
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
     * Lists all QServerDet models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new QServerDetSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single QServerDet model.
     * @param integer $q_server_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($q_server_id, $seq)
    {
        return $this->render('view', [
            'model' => $this->findModel($q_server_id, $seq),
        ]);
    }

    /**
     * Creates a new QServerDet model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new QServerDet();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'q_server_id' => $model->q_server_id, 'seq' => $model->seq]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing QServerDet model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $q_server_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($q_server_id, $seq)
    {
        $model = $this->findModel($q_server_id, $seq);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'q_server_id' => $model->q_server_id, 'seq' => $model->seq]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing QServerDet model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $q_server_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($q_server_id, $seq)
    {
        $this->findModel($q_server_id, $seq)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the QServerDet model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $q_server_id
     * @param integer $seq
     * @return QServerDet the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($q_server_id, $seq)
    {
        if (($model = QServerDet::findOne(['q_server_id' => $q_server_id, 'seq' => $seq])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
