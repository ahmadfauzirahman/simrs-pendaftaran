<?php

namespace app\controllers;

use Yii;
use app\models\FstmtLine;
use app\models\FstmtLineSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * FstmtLineController implements the CRUD actions for FstmtLine model.
 */
class FstmtLineController extends Controller
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
     * Lists all FstmtLine models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new FstmtLineSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single FstmtLine model.
     * @param integer $stmt_id
     * @param integer $line_seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($stmt_id, $line_seq)
    {
        return $this->render('view', [
            'model' => $this->findModel($stmt_id, $line_seq),
        ]);
    }

    /**
     * Creates a new FstmtLine model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new FstmtLine();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'stmt_id' => $model->stmt_id, 'line_seq' => $model->line_seq]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing FstmtLine model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $stmt_id
     * @param integer $line_seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($stmt_id, $line_seq)
    {
        $model = $this->findModel($stmt_id, $line_seq);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'stmt_id' => $model->stmt_id, 'line_seq' => $model->line_seq]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing FstmtLine model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $stmt_id
     * @param integer $line_seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($stmt_id, $line_seq)
    {
        $this->findModel($stmt_id, $line_seq)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the FstmtLine model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $stmt_id
     * @param integer $line_seq
     * @return FstmtLine the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($stmt_id, $line_seq)
    {
        if (($model = FstmtLine::findOne(['stmt_id' => $stmt_id, 'line_seq' => $line_seq])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
