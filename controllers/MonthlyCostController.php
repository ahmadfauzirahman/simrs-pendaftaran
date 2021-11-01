<?php

namespace app\controllers;

use Yii;
use app\models\MonthlyCost;
use app\models\MonthlyCostSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MonthlyCostController implements the CRUD actions for MonthlyCost model.
 */
class MonthlyCostController extends Controller
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
     * Lists all MonthlyCost models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MonthlyCostSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single MonthlyCost model.
     * @param string $inv_date
     * @param integer $item_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($inv_date, $item_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($inv_date, $item_id),
        ]);
    }

    /**
     * Creates a new MonthlyCost model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new MonthlyCost();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'inv_date' => $model->inv_date, 'item_id' => $model->item_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing MonthlyCost model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $inv_date
     * @param integer $item_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($inv_date, $item_id)
    {
        $model = $this->findModel($inv_date, $item_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'inv_date' => $model->inv_date, 'item_id' => $model->item_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing MonthlyCost model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $inv_date
     * @param integer $item_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($inv_date, $item_id)
    {
        $this->findModel($inv_date, $item_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the MonthlyCost model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $inv_date
     * @param integer $item_id
     * @return MonthlyCost the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($inv_date, $item_id)
    {
        if (($model = MonthlyCost::findOne(['inv_date' => $inv_date, 'item_id' => $item_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
