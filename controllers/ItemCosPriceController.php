<?php

namespace app\controllers;

use Yii;
use app\models\ItemCosPrice;
use app\models\ItemCosPriceSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ItemCosPriceController implements the CRUD actions for ItemCosPrice model.
 */
class ItemCosPriceController extends Controller
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
     * Lists all ItemCosPrice models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ItemCosPriceSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ItemCosPrice model.
     * @param integer $item_id
     * @param integer $cos_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($item_id, $cos_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($item_id, $cos_id),
        ]);
    }

    /**
     * Creates a new ItemCosPrice model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ItemCosPrice();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'item_id' => $model->item_id, 'cos_id' => $model->cos_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing ItemCosPrice model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $item_id
     * @param integer $cos_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($item_id, $cos_id)
    {
        $model = $this->findModel($item_id, $cos_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'item_id' => $model->item_id, 'cos_id' => $model->cos_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing ItemCosPrice model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $item_id
     * @param integer $cos_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($item_id, $cos_id)
    {
        $this->findModel($item_id, $cos_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ItemCosPrice model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $item_id
     * @param integer $cos_id
     * @return ItemCosPrice the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($item_id, $cos_id)
    {
        if (($model = ItemCosPrice::findOne(['item_id' => $item_id, 'cos_id' => $cos_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
