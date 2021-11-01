<?php

namespace app\controllers;

use Yii;
use app\models\BpjsReferral;
use app\models\BpjsReferralSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BpjsReferralController implements the CRUD actions for BpjsReferral model.
 */
class BpjsReferralController extends Controller
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
     * Lists all BpjsReferral models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new BpjsReferralSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single BpjsReferral model.
     * @param integer $patient_id
     * @param string $bpjs_refer_no
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($patient_id, $bpjs_refer_no)
    {
        return $this->render('view', [
            'model' => $this->findModel($patient_id, $bpjs_refer_no),
        ]);
    }

    /**
     * Creates a new BpjsReferral model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new BpjsReferral();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'patient_id' => $model->patient_id, 'bpjs_refer_no' => $model->bpjs_refer_no]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing BpjsReferral model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $patient_id
     * @param string $bpjs_refer_no
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($patient_id, $bpjs_refer_no)
    {
        $model = $this->findModel($patient_id, $bpjs_refer_no);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'patient_id' => $model->patient_id, 'bpjs_refer_no' => $model->bpjs_refer_no]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing BpjsReferral model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $patient_id
     * @param string $bpjs_refer_no
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($patient_id, $bpjs_refer_no)
    {
        $this->findModel($patient_id, $bpjs_refer_no)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the BpjsReferral model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $patient_id
     * @param string $bpjs_refer_no
     * @return BpjsReferral the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($patient_id, $bpjs_refer_no)
    {
        if (($model = BpjsReferral::findOne(['patient_id' => $patient_id, 'bpjs_refer_no' => $bpjs_refer_no])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
