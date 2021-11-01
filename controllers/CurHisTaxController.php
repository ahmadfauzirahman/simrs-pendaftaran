<?php

namespace app\controllers;

use Yii;
use app\models\CurHisTax;
use app\models\CurHisTaxSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CurHisTaxController implements the CRUD actions for CurHisTax model.
 */
class CurHisTaxController extends Controller
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
     * Lists all CurHisTax models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CurHisTaxSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single CurHisTax model.
     * @param integer $currency_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($currency_id, $seq)
    {
        return $this->render('view', [
            'model' => $this->findModel($currency_id, $seq),
        ]);
    }

    /**
     * Creates a new CurHisTax model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new CurHisTax();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'currency_id' => $model->currency_id, 'seq' => $model->seq]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing CurHisTax model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $currency_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($currency_id, $seq)
    {
        $model = $this->findModel($currency_id, $seq);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'currency_id' => $model->currency_id, 'seq' => $model->seq]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing CurHisTax model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $currency_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($currency_id, $seq)
    {
        $this->findModel($currency_id, $seq)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the CurHisTax model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $currency_id
     * @param integer $seq
     * @return CurHisTax the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($currency_id, $seq)
    {
        if (($model = CurHisTax::findOne(['currency_id' => $currency_id, 'seq' => $seq])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
