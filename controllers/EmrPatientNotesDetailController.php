<?php

namespace app\controllers;

use Yii;
use app\models\EmrPatientNotesDetail;
use app\models\EmrPatientNotesDetailSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * EmrPatientNotesDetailController implements the CRUD actions for EmrPatientNotesDetail model.
 */
class EmrPatientNotesDetailController extends Controller
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
     * Lists all EmrPatientNotesDetail models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new EmrPatientNotesDetailSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single EmrPatientNotesDetail model.
     * @param integer $patient_notes_id
     * @param integer $notes_seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($patient_notes_id, $notes_seq)
    {
        return $this->render('view', [
            'model' => $this->findModel($patient_notes_id, $notes_seq),
        ]);
    }

    /**
     * Creates a new EmrPatientNotesDetail model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new EmrPatientNotesDetail();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'patient_notes_id' => $model->patient_notes_id, 'notes_seq' => $model->notes_seq]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing EmrPatientNotesDetail model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $patient_notes_id
     * @param integer $notes_seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($patient_notes_id, $notes_seq)
    {
        $model = $this->findModel($patient_notes_id, $notes_seq);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'patient_notes_id' => $model->patient_notes_id, 'notes_seq' => $model->notes_seq]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing EmrPatientNotesDetail model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $patient_notes_id
     * @param integer $notes_seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($patient_notes_id, $notes_seq)
    {
        $this->findModel($patient_notes_id, $notes_seq)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the EmrPatientNotesDetail model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $patient_notes_id
     * @param integer $notes_seq
     * @return EmrPatientNotesDetail the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($patient_notes_id, $notes_seq)
    {
        if (($model = EmrPatientNotesDetail::findOne(['patient_notes_id' => $patient_notes_id, 'notes_seq' => $notes_seq])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
