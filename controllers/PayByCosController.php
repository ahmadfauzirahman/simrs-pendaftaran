<?php

namespace app\controllers;

use Yii;
use app\models\PayByCos;
use app\models\PayByCosSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PayByCosController implements the CRUD actions for PayByCos model.
 */
class PayByCosController extends Controller
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
     * Lists all PayByCos models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PayByCosSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PayByCos model.
     * @param integer $pay_by_id
     * @param integer $dept_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($pay_by_id, $dept_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($pay_by_id, $dept_id),
        ]);
    }

    /**
     * Creates a new PayByCos model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new PayByCos();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'pay_by_id' => $model->pay_by_id, 'dept_id' => $model->dept_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing PayByCos model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $pay_by_id
     * @param integer $dept_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($pay_by_id, $dept_id)
    {
        $model = $this->findModel($pay_by_id, $dept_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'pay_by_id' => $model->pay_by_id, 'dept_id' => $model->dept_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing PayByCos model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $pay_by_id
     * @param integer $dept_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($pay_by_id, $dept_id)
    {
        $this->findModel($pay_by_id, $dept_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PayByCos model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $pay_by_id
     * @param integer $dept_id
     * @return PayByCos the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($pay_by_id, $dept_id)
    {
        if (($model = PayByCos::findOne(['pay_by_id' => $pay_by_id, 'dept_id' => $dept_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
