<?php

namespace app\controllers;

use Yii;
use app\models\NurseCareParams;
use app\models\NurseCareParamsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * NurseCareParamsController implements the CRUD actions for NurseCareParams model.
 */
class NurseCareParamsController extends Controller
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
     * Lists all NurseCareParams models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new NurseCareParamsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single NurseCareParams model.
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
     * Creates a new NurseCareParams model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new NurseCareParams();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'nurse_care_param_id' => $model->nurse_care_param_id, 'seq' => $model->seq]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing NurseCareParams model.
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
     * Deletes an existing NurseCareParams model.
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
     * Finds the NurseCareParams model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $nurse_care_param_id
     * @param integer $seq
     * @return NurseCareParams the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($nurse_care_param_id, $seq)
    {
        if (($model = NurseCareParams::findOne(['nurse_care_param_id' => $nurse_care_param_id, 'seq' => $seq])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
