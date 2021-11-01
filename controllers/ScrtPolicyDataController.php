<?php

namespace app\controllers;

use Yii;
use app\models\ScrtPolicyData;
use app\models\ScrtPolicyDataSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ScrtPolicyDataController implements the CRUD actions for ScrtPolicyData model.
 */
class ScrtPolicyDataController extends Controller
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
     * Lists all ScrtPolicyData models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ScrtPolicyDataSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ScrtPolicyData model.
     * @param integer $policy_id
     * @param integer $data_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($policy_id, $data_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($policy_id, $data_id),
        ]);
    }

    /**
     * Creates a new ScrtPolicyData model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ScrtPolicyData();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'policy_id' => $model->policy_id, 'data_id' => $model->data_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing ScrtPolicyData model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $policy_id
     * @param integer $data_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($policy_id, $data_id)
    {
        $model = $this->findModel($policy_id, $data_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'policy_id' => $model->policy_id, 'data_id' => $model->data_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing ScrtPolicyData model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $policy_id
     * @param integer $data_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($policy_id, $data_id)
    {
        $this->findModel($policy_id, $data_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ScrtPolicyData model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $policy_id
     * @param integer $data_id
     * @return ScrtPolicyData the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($policy_id, $data_id)
    {
        if (($model = ScrtPolicyData::findOne(['policy_id' => $policy_id, 'data_id' => $data_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
