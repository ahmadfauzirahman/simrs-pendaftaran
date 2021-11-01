<?php

namespace app\controllers;

use Yii;
use app\models\ItemCosPriceFuture;
use app\models\ItemCosPriceFutureSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ItemCosPriceFutureController implements the CRUD actions for ItemCosPriceFuture model.
 */
class ItemCosPriceFutureController extends Controller
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
     * Lists all ItemCosPriceFuture models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ItemCosPriceFutureSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ItemCosPriceFuture model.
     * @param integer $update_method
     * @param string $eff_date
     * @param integer $item_id
     * @param integer $cos_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($update_method, $eff_date, $item_id, $cos_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($update_method, $eff_date, $item_id, $cos_id),
        ]);
    }

    /**
     * Creates a new ItemCosPriceFuture model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ItemCosPriceFuture();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'update_method' => $model->update_method, 'eff_date' => $model->eff_date, 'item_id' => $model->item_id, 'cos_id' => $model->cos_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing ItemCosPriceFuture model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $update_method
     * @param string $eff_date
     * @param integer $item_id
     * @param integer $cos_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($update_method, $eff_date, $item_id, $cos_id)
    {
        $model = $this->findModel($update_method, $eff_date, $item_id, $cos_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'update_method' => $model->update_method, 'eff_date' => $model->eff_date, 'item_id' => $model->item_id, 'cos_id' => $model->cos_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing ItemCosPriceFuture model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $update_method
     * @param string $eff_date
     * @param integer $item_id
     * @param integer $cos_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($update_method, $eff_date, $item_id, $cos_id)
    {
        $this->findModel($update_method, $eff_date, $item_id, $cos_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ItemCosPriceFuture model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $update_method
     * @param string $eff_date
     * @param integer $item_id
     * @param integer $cos_id
     * @return ItemCosPriceFuture the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($update_method, $eff_date, $item_id, $cos_id)
    {
        if (($model = ItemCosPriceFuture::findOne(['update_method' => $update_method, 'eff_date' => $eff_date, 'item_id' => $item_id, 'cos_id' => $cos_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
