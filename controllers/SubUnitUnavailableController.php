<?php

namespace app\controllers;

use Yii;
use app\models\SubUnitUnavailable;
use app\models\SubUnitUnavailableSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SubUnitUnavailableController implements the CRUD actions for SubUnitUnavailable model.
 */
class SubUnitUnavailableController extends Controller
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
     * Lists all SubUnitUnavailable models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SubUnitUnavailableSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SubUnitUnavailable model.
     * @param integer $sub_unit_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($sub_unit_id, $seq)
    {
        return $this->render('view', [
            'model' => $this->findModel($sub_unit_id, $seq),
        ]);
    }

    /**
     * Creates a new SubUnitUnavailable model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new SubUnitUnavailable();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'sub_unit_id' => $model->sub_unit_id, 'seq' => $model->seq]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing SubUnitUnavailable model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $sub_unit_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($sub_unit_id, $seq)
    {
        $model = $this->findModel($sub_unit_id, $seq);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'sub_unit_id' => $model->sub_unit_id, 'seq' => $model->seq]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing SubUnitUnavailable model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $sub_unit_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($sub_unit_id, $seq)
    {
        $this->findModel($sub_unit_id, $seq)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the SubUnitUnavailable model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $sub_unit_id
     * @param integer $seq
     * @return SubUnitUnavailable the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($sub_unit_id, $seq)
    {
        if (($model = SubUnitUnavailable::findOne(['sub_unit_id' => $sub_unit_id, 'seq' => $seq])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
