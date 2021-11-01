<?php

namespace app\controllers;

use Yii;
use app\models\NurseCareParamsDept;
use app\models\NurseCareParamsDeptSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * NurseCareParamsDeptController implements the CRUD actions for NurseCareParamsDept model.
 */
class NurseCareParamsDeptController extends Controller
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
     * Lists all NurseCareParamsDept models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new NurseCareParamsDeptSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single NurseCareParamsDept model.
     * @param integer $nurse_care_param_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($nurse_care_param_id, $seq)
    {
        return $this->render('view', [
            'model' => $this->findModel($nurse_care_param_id, $seq),
        ]);
    }

    /**
     * Creates a new NurseCareParamsDept model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new NurseCareParamsDept();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'nurse_care_param_id' => $model->nurse_care_param_id, 'seq' => $model->seq]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing NurseCareParamsDept model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $nurse_care_param_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($nurse_care_param_id, $seq)
    {
        $model = $this->findModel($nurse_care_param_id, $seq);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'nurse_care_param_id' => $model->nurse_care_param_id, 'seq' => $model->seq]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing NurseCareParamsDept model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $nurse_care_param_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($nurse_care_param_id, $seq)
    {
        $this->findModel($nurse_care_param_id, $seq)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the NurseCareParamsDept model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $nurse_care_param_id
     * @param integer $seq
     * @return NurseCareParamsDept the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($nurse_care_param_id, $seq)
    {
        if (($model = NurseCareParamsDept::findOne(['nurse_care_param_id' => $nurse_care_param_id, 'seq' => $seq])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
