<?php

namespace app\controllers;

use Yii;
use app\models\EmrNotesDetail;
use app\models\EmrNotesDetailSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * EmrNotesDetailController implements the CRUD actions for EmrNotesDetail model.
 */
class EmrNotesDetailController extends Controller
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
     * Lists all EmrNotesDetail models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new EmrNotesDetailSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single EmrNotesDetail model.
     * @param integer $notes_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($notes_id, $seq)
    {
        return $this->render('view', [
            'model' => $this->findModel($notes_id, $seq),
        ]);
    }

    /**
     * Creates a new EmrNotesDetail model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new EmrNotesDetail();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'notes_id' => $model->notes_id, 'seq' => $model->seq]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing EmrNotesDetail model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $notes_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($notes_id, $seq)
    {
        $model = $this->findModel($notes_id, $seq);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'notes_id' => $model->notes_id, 'seq' => $model->seq]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing EmrNotesDetail model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $notes_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($notes_id, $seq)
    {
        $this->findModel($notes_id, $seq)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the EmrNotesDetail model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $notes_id
     * @param integer $seq
     * @return EmrNotesDetail the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($notes_id, $seq)
    {
        if (($model = EmrNotesDetail::findOne(['notes_id' => $notes_id, 'seq' => $seq])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
