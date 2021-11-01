<?php

namespace app\controllers;

use Yii;
use app\models\StaffDet;
use app\models\StaffDetSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * StaffDetController implements the CRUD actions for StaffDet model.
 */
class StaffDetController extends Controller
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
     * Lists all StaffDet models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new StaffDetSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single StaffDet model.
     * @param integer $staff_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($staff_id, $seq)
    {
        return $this->render('view', [
            'model' => $this->findModel($staff_id, $seq),
        ]);
    }

    /**
     * Creates a new StaffDet model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new StaffDet();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'staff_id' => $model->staff_id, 'seq' => $model->seq]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing StaffDet model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $staff_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($staff_id, $seq)
    {
        $model = $this->findModel($staff_id, $seq);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'staff_id' => $model->staff_id, 'seq' => $model->seq]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing StaffDet model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $staff_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($staff_id, $seq)
    {
        $this->findModel($staff_id, $seq)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the StaffDet model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $staff_id
     * @param integer $seq
     * @return StaffDet the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($staff_id, $seq)
    {
        if (($model = StaffDet::findOne(['staff_id' => $staff_id, 'seq' => $seq])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
