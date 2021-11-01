<?php

namespace app\controllers;

use Yii;
use app\models\SubUnitTimeByDate;
use app\models\SubUnitTimeByDateSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SubUnitTimeByDateController implements the CRUD actions for SubUnitTimeByDate model.
 */
class SubUnitTimeByDateController extends Controller
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
     * Lists all SubUnitTimeByDate models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SubUnitTimeByDateSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SubUnitTimeByDate model.
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
     * Creates a new SubUnitTimeByDate model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new SubUnitTimeByDate();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'sub_unit_id' => $model->sub_unit_id, 'seq' => $model->seq]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing SubUnitTimeByDate model.
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
     * Deletes an existing SubUnitTimeByDate model.
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
     * Finds the SubUnitTimeByDate model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $sub_unit_id
     * @param integer $seq
     * @return SubUnitTimeByDate the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($sub_unit_id, $seq)
    {
        if (($model = SubUnitTimeByDate::findOne(['sub_unit_id' => $sub_unit_id, 'seq' => $seq])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
