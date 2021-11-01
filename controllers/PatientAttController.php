<?php

namespace app\controllers;

use Yii;
use app\models\PatientAtt;
use app\models\PatientAttSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PatientAttController implements the CRUD actions for PatientAtt model.
 */
class PatientAttController extends Controller
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
     * Lists all PatientAtt models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PatientAttSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PatientAtt model.
     * @param integer $patient_id
     * @param string $description
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($patient_id, $description)
    {
        return $this->render('view', [
            'model' => $this->findModel($patient_id, $description),
        ]);
    }

    /**
     * Creates a new PatientAtt model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new PatientAtt();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'patient_id' => $model->patient_id, 'description' => $model->description]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing PatientAtt model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $patient_id
     * @param string $description
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($patient_id, $description)
    {
        $model = $this->findModel($patient_id, $description);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'patient_id' => $model->patient_id, 'description' => $model->description]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing PatientAtt model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $patient_id
     * @param string $description
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($patient_id, $description)
    {
        $this->findModel($patient_id, $description)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PatientAtt model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $patient_id
     * @param string $description
     * @return PatientAtt the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($patient_id, $description)
    {
        if (($model = PatientAtt::findOne(['patient_id' => $patient_id, 'description' => $description])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
