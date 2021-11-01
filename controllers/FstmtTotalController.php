<?php

namespace app\controllers;

use Yii;
use app\models\FstmtTotal;
use app\models\FstmtTotalSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * FstmtTotalController implements the CRUD actions for FstmtTotal model.
 */
class FstmtTotalController extends Controller
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
     * Lists all FstmtTotal models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new FstmtTotalSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single FstmtTotal model.
     * @param integer $stmt_id
     * @param integer $line_seq
     * @param integer $total_line_seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($stmt_id, $line_seq, $total_line_seq)
    {
        return $this->render('view', [
            'model' => $this->findModel($stmt_id, $line_seq, $total_line_seq),
        ]);
    }

    /**
     * Creates a new FstmtTotal model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new FstmtTotal();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'stmt_id' => $model->stmt_id, 'line_seq' => $model->line_seq, 'total_line_seq' => $model->total_line_seq]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing FstmtTotal model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $stmt_id
     * @param integer $line_seq
     * @param integer $total_line_seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($stmt_id, $line_seq, $total_line_seq)
    {
        $model = $this->findModel($stmt_id, $line_seq, $total_line_seq);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'stmt_id' => $model->stmt_id, 'line_seq' => $model->line_seq, 'total_line_seq' => $model->total_line_seq]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing FstmtTotal model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $stmt_id
     * @param integer $line_seq
     * @param integer $total_line_seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($stmt_id, $line_seq, $total_line_seq)
    {
        $this->findModel($stmt_id, $line_seq, $total_line_seq)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the FstmtTotal model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $stmt_id
     * @param integer $line_seq
     * @param integer $total_line_seq
     * @return FstmtTotal the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($stmt_id, $line_seq, $total_line_seq)
    {
        if (($model = FstmtTotal::findOne(['stmt_id' => $stmt_id, 'line_seq' => $line_seq, 'total_line_seq' => $total_line_seq])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
