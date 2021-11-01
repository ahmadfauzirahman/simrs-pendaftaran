<?php

namespace app\controllers;

use Yii;
use app\models\IdExt;
use app\models\IdExtSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * IdExtController implements the CRUD actions for IdExt model.
 */
class IdExtController extends Controller
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
     * Lists all IdExt models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new IdExtSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single IdExt model.
     * @param integer $num_id
     * @param string $name_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($num_id, $name_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($num_id, $name_id),
        ]);
    }

    /**
     * Creates a new IdExt model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new IdExt();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'num_id' => $model->num_id, 'name_id' => $model->name_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing IdExt model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $num_id
     * @param string $name_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($num_id, $name_id)
    {
        $model = $this->findModel($num_id, $name_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'num_id' => $model->num_id, 'name_id' => $model->name_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing IdExt model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $num_id
     * @param string $name_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($num_id, $name_id)
    {
        $this->findModel($num_id, $name_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the IdExt model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $num_id
     * @param string $name_id
     * @return IdExt the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($num_id, $name_id)
    {
        if (($model = IdExt::findOne(['num_id' => $num_id, 'name_id' => $name_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
