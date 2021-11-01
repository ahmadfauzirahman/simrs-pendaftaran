<?php

namespace app\controllers;

use Yii;
use app\models\DeptUser;
use app\models\DeptUserSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DeptUserController implements the CRUD actions for DeptUser model.
 */
class DeptUserController extends Controller
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
     * Lists all DeptUser models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DeptUserSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single DeptUser model.
     * @param integer $dept_id
     * @param integer $user_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($dept_id, $user_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($dept_id, $user_id),
        ]);
    }

    /**
     * Creates a new DeptUser model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new DeptUser();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'dept_id' => $model->dept_id, 'user_id' => $model->user_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing DeptUser model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $dept_id
     * @param integer $user_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($dept_id, $user_id)
    {
        $model = $this->findModel($dept_id, $user_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'dept_id' => $model->dept_id, 'user_id' => $model->user_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing DeptUser model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $dept_id
     * @param integer $user_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($dept_id, $user_id)
    {
        $this->findModel($dept_id, $user_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the DeptUser model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $dept_id
     * @param integer $user_id
     * @return DeptUser the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($dept_id, $user_id)
    {
        if (($model = DeptUser::findOne(['dept_id' => $dept_id, 'user_id' => $user_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
