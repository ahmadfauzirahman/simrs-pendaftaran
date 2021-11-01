<?php

namespace app\controllers;

use Yii;
use app\models\ScrtPolicyLogin;
use app\models\ScrtPolicyLoginSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ScrtPolicyLoginController implements the CRUD actions for ScrtPolicyLogin model.
 */
class ScrtPolicyLoginController extends Controller
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
     * Lists all ScrtPolicyLogin models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ScrtPolicyLoginSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ScrtPolicyLogin model.
     * @param integer $policy_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($policy_id, $seq)
    {
        return $this->render('view', [
            'model' => $this->findModel($policy_id, $seq),
        ]);
    }

    /**
     * Creates a new ScrtPolicyLogin model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ScrtPolicyLogin();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'policy_id' => $model->policy_id, 'seq' => $model->seq]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing ScrtPolicyLogin model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $policy_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($policy_id, $seq)
    {
        $model = $this->findModel($policy_id, $seq);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'policy_id' => $model->policy_id, 'seq' => $model->seq]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing ScrtPolicyLogin model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $policy_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($policy_id, $seq)
    {
        $this->findModel($policy_id, $seq)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ScrtPolicyLogin model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $policy_id
     * @param integer $seq
     * @return ScrtPolicyLogin the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($policy_id, $seq)
    {
        if (($model = ScrtPolicyLogin::findOne(['policy_id' => $policy_id, 'seq' => $seq])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
