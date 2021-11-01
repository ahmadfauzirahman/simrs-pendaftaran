<?php

namespace app\controllers;

use Yii;
use app\models\MaintUserPerms;
use app\models\MaintUserPermsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MaintUserPermsController implements the CRUD actions for MaintUserPerms model.
 */
class MaintUserPermsController extends Controller
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
     * Lists all MaintUserPerms models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MaintUserPermsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single MaintUserPerms model.
     * @param integer $user_id
     * @param string $page_name
     * @param string $perm_name
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($user_id, $page_name, $perm_name)
    {
        return $this->render('view', [
            'model' => $this->findModel($user_id, $page_name, $perm_name),
        ]);
    }

    /**
     * Creates a new MaintUserPerms model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new MaintUserPerms();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'user_id' => $model->user_id, 'page_name' => $model->page_name, 'perm_name' => $model->perm_name]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing MaintUserPerms model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $user_id
     * @param string $page_name
     * @param string $perm_name
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($user_id, $page_name, $perm_name)
    {
        $model = $this->findModel($user_id, $page_name, $perm_name);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'user_id' => $model->user_id, 'page_name' => $model->page_name, 'perm_name' => $model->perm_name]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing MaintUserPerms model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $user_id
     * @param string $page_name
     * @param string $perm_name
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($user_id, $page_name, $perm_name)
    {
        $this->findModel($user_id, $page_name, $perm_name)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the MaintUserPerms model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $user_id
     * @param string $page_name
     * @param string $perm_name
     * @return MaintUserPerms the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($user_id, $page_name, $perm_name)
    {
        if (($model = MaintUserPerms::findOne(['user_id' => $user_id, 'page_name' => $page_name, 'perm_name' => $perm_name])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
