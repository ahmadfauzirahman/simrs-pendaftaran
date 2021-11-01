<?php

namespace app\controllers;

use Yii;
use app\models\ItemDist;
use app\models\ItemDistSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ItemDistController implements the CRUD actions for ItemDist model.
 */
class ItemDistController extends Controller
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
     * Lists all ItemDist models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ItemDistSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ItemDist model.
     * @param integer $item_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($item_id, $seq)
    {
        return $this->render('view', [
            'model' => $this->findModel($item_id, $seq),
        ]);
    }

    /**
     * Creates a new ItemDist model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ItemDist();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'item_id' => $model->item_id, 'seq' => $model->seq]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing ItemDist model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $item_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($item_id, $seq)
    {
        $model = $this->findModel($item_id, $seq);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'item_id' => $model->item_id, 'seq' => $model->seq]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing ItemDist model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $item_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($item_id, $seq)
    {
        $this->findModel($item_id, $seq)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ItemDist model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $item_id
     * @param integer $seq
     * @return ItemDist the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($item_id, $seq)
    {
        if (($model = ItemDist::findOne(['item_id' => $item_id, 'seq' => $seq])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
