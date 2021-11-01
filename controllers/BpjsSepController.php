<?php

namespace app\controllers;

use Yii;
use app\models\BpjsSep;
use app\models\BpjsSepSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BpjsSepController implements the CRUD actions for BpjsSep model.
 */
class BpjsSepController extends Controller
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
     * Lists all BpjsSep models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new BpjsSepSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single BpjsSep model.
     * @param integer $patient_id
     * @param string $bpjs_refer_no
     * @param string $bpjs_no
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($patient_id, $bpjs_refer_no, $bpjs_no)
    {
        return $this->render('view', [
            'model' => $this->findModel($patient_id, $bpjs_refer_no, $bpjs_no),
        ]);
    }

    /**
     * Creates a new BpjsSep model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new BpjsSep();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'patient_id' => $model->patient_id, 'bpjs_refer_no' => $model->bpjs_refer_no, 'bpjs_no' => $model->bpjs_no]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing BpjsSep model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $patient_id
     * @param string $bpjs_refer_no
     * @param string $bpjs_no
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($patient_id, $bpjs_refer_no, $bpjs_no)
    {
        $model = $this->findModel($patient_id, $bpjs_refer_no, $bpjs_no);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'patient_id' => $model->patient_id, 'bpjs_refer_no' => $model->bpjs_refer_no, 'bpjs_no' => $model->bpjs_no]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing BpjsSep model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $patient_id
     * @param string $bpjs_refer_no
     * @param string $bpjs_no
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($patient_id, $bpjs_refer_no, $bpjs_no)
    {
        $this->findModel($patient_id, $bpjs_refer_no, $bpjs_no)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the BpjsSep model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $patient_id
     * @param string $bpjs_refer_no
     * @param string $bpjs_no
     * @return BpjsSep the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($patient_id, $bpjs_refer_no, $bpjs_no)
    {
        if (($model = BpjsSep::findOne(['patient_id' => $patient_id, 'bpjs_refer_no' => $bpjs_refer_no, 'bpjs_no' => $bpjs_no])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
