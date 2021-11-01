<?php

namespace app\controllers;

use Yii;
use app\models\ItemKits;
use app\models\ItemKitsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ItemKitsController implements the CRUD actions for ItemKits model.
 */
class ItemKitsController extends Controller
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
     * Lists all ItemKits models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ItemKitsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ItemKits model.
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
     * Creates a new ItemKits model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ItemKits();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'item_id' => $model->item_id, 'seq' => $model->seq]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing ItemKits model.
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
     * Deletes an existing ItemKits model.
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
     * Finds the ItemKits model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $item_id
     * @param integer $seq
     * @return ItemKits the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($item_id, $seq)
    {
        if (($model = ItemKits::findOne(['item_id' => $item_id, 'seq' => $seq])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
