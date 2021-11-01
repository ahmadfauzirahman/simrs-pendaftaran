<?php

namespace app\controllers;

use Yii;
use app\models\FstmtAcc;
use app\models\FstmtAccSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * FstmtAccController implements the CRUD actions for FstmtAcc model.
 */
class FstmtAccController extends Controller
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
     * Lists all FstmtAcc models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new FstmtAccSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single FstmtAcc model.
     * @param integer $stmt_id
     * @param integer $line_seq
     * @param string $account_from
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($stmt_id, $line_seq, $account_from)
    {
        return $this->render('view', [
            'model' => $this->findModel($stmt_id, $line_seq, $account_from),
        ]);
    }

    /**
     * Creates a new FstmtAcc model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new FstmtAcc();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'stmt_id' => $model->stmt_id, 'line_seq' => $model->line_seq, 'account_from' => $model->account_from]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing FstmtAcc model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $stmt_id
     * @param integer $line_seq
     * @param string $account_from
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($stmt_id, $line_seq, $account_from)
    {
        $model = $this->findModel($stmt_id, $line_seq, $account_from);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'stmt_id' => $model->stmt_id, 'line_seq' => $model->line_seq, 'account_from' => $model->account_from]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing FstmtAcc model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $stmt_id
     * @param integer $line_seq
     * @param string $account_from
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($stmt_id, $line_seq, $account_from)
    {
        $this->findModel($stmt_id, $line_seq, $account_from)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the FstmtAcc model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $stmt_id
     * @param integer $line_seq
     * @param string $account_from
     * @return FstmtAcc the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($stmt_id, $line_seq, $account_from)
    {
        if (($model = FstmtAcc::findOne(['stmt_id' => $stmt_id, 'line_seq' => $line_seq, 'account_from' => $account_from])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
