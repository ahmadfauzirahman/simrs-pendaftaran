<?php

namespace app\controllers;

use Yii;
use app\models\ScrtCustomForm;
use app\models\ScrtCustomFormSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ScrtCustomFormController implements the CRUD actions for ScrtCustomForm model.
 */
class ScrtCustomFormController extends Controller
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
     * Lists all ScrtCustomForm models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ScrtCustomFormSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ScrtCustomForm model.
     * @param integer $policy_id
     * @param integer $custom_form_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($policy_id, $custom_form_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($policy_id, $custom_form_id),
        ]);
    }

    /**
     * Creates a new ScrtCustomForm model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ScrtCustomForm();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'policy_id' => $model->policy_id, 'custom_form_id' => $model->custom_form_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing ScrtCustomForm model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $policy_id
     * @param integer $custom_form_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($policy_id, $custom_form_id)
    {
        $model = $this->findModel($policy_id, $custom_form_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'policy_id' => $model->policy_id, 'custom_form_id' => $model->custom_form_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing ScrtCustomForm model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $policy_id
     * @param integer $custom_form_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($policy_id, $custom_form_id)
    {
        $this->findModel($policy_id, $custom_form_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ScrtCustomForm model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $policy_id
     * @param integer $custom_form_id
     * @return ScrtCustomForm the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($policy_id, $custom_form_id)
    {
        if (($model = ScrtCustomForm::findOne(['policy_id' => $policy_id, 'custom_form_id' => $custom_form_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
