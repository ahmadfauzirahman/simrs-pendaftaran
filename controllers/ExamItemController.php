<?php

namespace app\controllers;

use Yii;
use app\models\ExamItem;
use app\models\ExamItemSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ExamItemController implements the CRUD actions for ExamItem model.
 */
class ExamItemController extends Controller
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
     * Lists all ExamItem models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ExamItemSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ExamItem model.
     * @param integer $exam_id
     * @param integer $item_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($exam_id, $item_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($exam_id, $item_id),
        ]);
    }

    /**
     * Creates a new ExamItem model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ExamItem();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'exam_id' => $model->exam_id, 'item_id' => $model->item_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing ExamItem model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $exam_id
     * @param integer $item_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($exam_id, $item_id)
    {
        $model = $this->findModel($exam_id, $item_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'exam_id' => $model->exam_id, 'item_id' => $model->item_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing ExamItem model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $exam_id
     * @param integer $item_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($exam_id, $item_id)
    {
        $this->findModel($exam_id, $item_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ExamItem model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $exam_id
     * @param integer $item_id
     * @return ExamItem the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($exam_id, $item_id)
    {
        if (($model = ExamItem::findOne(['exam_id' => $exam_id, 'item_id' => $item_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
