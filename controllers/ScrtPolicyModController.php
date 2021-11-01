<?php

namespace app\controllers;

use Yii;
use app\models\ScrtPolicyMod;
use app\models\ScrtPolicyModSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ScrtPolicyModController implements the CRUD actions for ScrtPolicyMod model.
 */
class ScrtPolicyModController extends Controller
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
     * Lists all ScrtPolicyMod models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ScrtPolicyModSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ScrtPolicyMod model.
     * @param integer $policy_id
     * @param integer $mod_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($policy_id, $mod_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($policy_id, $mod_id),
        ]);
    }

    /**
     * Creates a new ScrtPolicyMod model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ScrtPolicyMod();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'policy_id' => $model->policy_id, 'mod_id' => $model->mod_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing ScrtPolicyMod model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $policy_id
     * @param integer $mod_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($policy_id, $mod_id)
    {
        $model = $this->findModel($policy_id, $mod_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'policy_id' => $model->policy_id, 'mod_id' => $model->mod_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing ScrtPolicyMod model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $policy_id
     * @param integer $mod_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($policy_id, $mod_id)
    {
        $this->findModel($policy_id, $mod_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ScrtPolicyMod model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $policy_id
     * @param integer $mod_id
     * @return ScrtPolicyMod the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($policy_id, $mod_id)
    {
        if (($model = ScrtPolicyMod::findOne(['policy_id' => $policy_id, 'mod_id' => $mod_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
