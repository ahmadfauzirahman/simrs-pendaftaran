<?php

namespace app\controllers;

use Yii;
use app\models\ScrtTestPhp;
use app\models\ScrtTestPhpSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ScrtTestPhpController implements the CRUD actions for ScrtTestPhp model.
 */
class ScrtTestPhpController extends Controller
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
     * Lists all ScrtTestPhp models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ScrtTestPhpSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ScrtTestPhp model.
     * @param integer $policy_id
     * @param integer $test_php_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($policy_id, $test_php_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($policy_id, $test_php_id),
        ]);
    }

    /**
     * Creates a new ScrtTestPhp model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ScrtTestPhp();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'policy_id' => $model->policy_id, 'test_php_id' => $model->test_php_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing ScrtTestPhp model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $policy_id
     * @param integer $test_php_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($policy_id, $test_php_id)
    {
        $model = $this->findModel($policy_id, $test_php_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'policy_id' => $model->policy_id, 'test_php_id' => $model->test_php_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing ScrtTestPhp model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $policy_id
     * @param integer $test_php_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($policy_id, $test_php_id)
    {
        $this->findModel($policy_id, $test_php_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ScrtTestPhp model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $policy_id
     * @param integer $test_php_id
     * @return ScrtTestPhp the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($policy_id, $test_php_id)
    {
        if (($model = ScrtTestPhp::findOne(['policy_id' => $policy_id, 'test_php_id' => $test_php_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
