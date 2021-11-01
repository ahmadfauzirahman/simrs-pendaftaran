<?php

namespace app\controllers;

use Yii;
use app\models\MaintTaskRes;
use app\models\MaintTaskResSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MaintTaskResController implements the CRUD actions for MaintTaskRes model.
 */
class MaintTaskResController extends Controller
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
     * Lists all MaintTaskRes models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MaintTaskResSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single MaintTaskRes model.
     * @param integer $task_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($task_id, $seq)
    {
        return $this->render('view', [
            'model' => $this->findModel($task_id, $seq),
        ]);
    }

    /**
     * Creates a new MaintTaskRes model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new MaintTaskRes();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'task_id' => $model->task_id, 'seq' => $model->seq]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing MaintTaskRes model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $task_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($task_id, $seq)
    {
        $model = $this->findModel($task_id, $seq);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'task_id' => $model->task_id, 'seq' => $model->seq]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing MaintTaskRes model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $task_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($task_id, $seq)
    {
        $this->findModel($task_id, $seq)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the MaintTaskRes model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $task_id
     * @param integer $seq
     * @return MaintTaskRes the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($task_id, $seq)
    {
        if (($model = MaintTaskRes::findOne(['task_id' => $task_id, 'seq' => $seq])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
