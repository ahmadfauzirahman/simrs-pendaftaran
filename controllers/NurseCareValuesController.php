<?php

namespace app\controllers;

use Yii;
use app\models\NurseCareValues;
use app\models\NurseCareValuesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * NurseCareValuesController implements the CRUD actions for NurseCareValues model.
 */
class NurseCareValuesController extends Controller
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
     * Lists all NurseCareValues models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new NurseCareValuesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single NurseCareValues model.
     * @param integer $nurse_care_param_id
     * @param integer $seq
     * @param integer $value_seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($nurse_care_param_id, $seq, $value_seq)
    {
        return $this->render('view', [
            'model' => $this->findModel($nurse_care_param_id, $seq, $value_seq),
        ]);
    }

    /**
     * Creates a new NurseCareValues model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new NurseCareValues();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'nurse_care_param_id' => $model->nurse_care_param_id, 'seq' => $model->seq, 'value_seq' => $model->value_seq]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing NurseCareValues model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $nurse_care_param_id
     * @param integer $seq
     * @param integer $value_seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($nurse_care_param_id, $seq, $value_seq)
    {
        $model = $this->findModel($nurse_care_param_id, $seq, $value_seq);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'nurse_care_param_id' => $model->nurse_care_param_id, 'seq' => $model->seq, 'value_seq' => $model->value_seq]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing NurseCareValues model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $nurse_care_param_id
     * @param integer $seq
     * @param integer $value_seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($nurse_care_param_id, $seq, $value_seq)
    {
        $this->findModel($nurse_care_param_id, $seq, $value_seq)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the NurseCareValues model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $nurse_care_param_id
     * @param integer $seq
     * @param integer $value_seq
     * @return NurseCareValues the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($nurse_care_param_id, $seq, $value_seq)
    {
        if (($model = NurseCareValues::findOne(['nurse_care_param_id' => $nurse_care_param_id, 'seq' => $seq, 'value_seq' => $value_seq])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
