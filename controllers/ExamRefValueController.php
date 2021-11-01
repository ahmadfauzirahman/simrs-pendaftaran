<?php

namespace app\controllers;

use Yii;
use app\models\ExamRefValue;
use app\models\ExamRefValueSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ExamRefValueController implements the CRUD actions for ExamRefValue model.
 */
class ExamRefValueController extends Controller
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
     * Lists all ExamRefValue models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ExamRefValueSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ExamRefValue model.
     * @param integer $exam_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($exam_id, $seq)
    {
        return $this->render('view', [
            'model' => $this->findModel($exam_id, $seq),
        ]);
    }

    /**
     * Creates a new ExamRefValue model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ExamRefValue();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'exam_id' => $model->exam_id, 'seq' => $model->seq]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing ExamRefValue model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $exam_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($exam_id, $seq)
    {
        $model = $this->findModel($exam_id, $seq);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'exam_id' => $model->exam_id, 'seq' => $model->seq]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing ExamRefValue model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $exam_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($exam_id, $seq)
    {
        $this->findModel($exam_id, $seq)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ExamRefValue model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $exam_id
     * @param integer $seq
     * @return ExamRefValue the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($exam_id, $seq)
    {
        if (($model = ExamRefValue::findOne(['exam_id' => $exam_id, 'seq' => $seq])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
