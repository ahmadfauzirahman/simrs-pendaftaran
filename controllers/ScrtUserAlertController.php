<?php

namespace app\controllers;

use Yii;
use app\models\ScrtUserAlert;
use app\models\ScrtUserAlertSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ScrtUserAlertController implements the CRUD actions for ScrtUserAlert model.
 */
class ScrtUserAlertController extends Controller
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
     * Lists all ScrtUserAlert models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ScrtUserAlertSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ScrtUserAlert model.
     * @param integer $user_id
     * @param integer $alert_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($user_id, $alert_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($user_id, $alert_id),
        ]);
    }

    /**
     * Creates a new ScrtUserAlert model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ScrtUserAlert();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'user_id' => $model->user_id, 'alert_id' => $model->alert_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing ScrtUserAlert model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $user_id
     * @param integer $alert_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($user_id, $alert_id)
    {
        $model = $this->findModel($user_id, $alert_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'user_id' => $model->user_id, 'alert_id' => $model->alert_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing ScrtUserAlert model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $user_id
     * @param integer $alert_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($user_id, $alert_id)
    {
        $this->findModel($user_id, $alert_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ScrtUserAlert model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $user_id
     * @param integer $alert_id
     * @return ScrtUserAlert the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($user_id, $alert_id)
    {
        if (($model = ScrtUserAlert::findOne(['user_id' => $user_id, 'alert_id' => $alert_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
