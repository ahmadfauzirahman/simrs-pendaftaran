<?php

namespace app\controllers;

use Yii;
use app\models\FolioItemMtl;
use app\models\FolioItemMtlSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * FolioItemMtlController implements the CRUD actions for FolioItemMtl model.
 */
class FolioItemMtlController extends Controller
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
     * Lists all FolioItemMtl models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new FolioItemMtlSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single FolioItemMtl model.
     * @param integer $folio_id
     * @param integer $seq
     * @param integer $material_seq
     * @param integer $material_item_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($folio_id, $seq, $material_seq, $material_item_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($folio_id, $seq, $material_seq, $material_item_id),
        ]);
    }

    /**
     * Creates a new FolioItemMtl model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new FolioItemMtl();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'folio_id' => $model->folio_id, 'seq' => $model->seq, 'material_seq' => $model->material_seq, 'material_item_id' => $model->material_item_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing FolioItemMtl model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $folio_id
     * @param integer $seq
     * @param integer $material_seq
     * @param integer $material_item_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($folio_id, $seq, $material_seq, $material_item_id)
    {
        $model = $this->findModel($folio_id, $seq, $material_seq, $material_item_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'folio_id' => $model->folio_id, 'seq' => $model->seq, 'material_seq' => $model->material_seq, 'material_item_id' => $model->material_item_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing FolioItemMtl model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $folio_id
     * @param integer $seq
     * @param integer $material_seq
     * @param integer $material_item_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($folio_id, $seq, $material_seq, $material_item_id)
    {
        $this->findModel($folio_id, $seq, $material_seq, $material_item_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the FolioItemMtl model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $folio_id
     * @param integer $seq
     * @param integer $material_seq
     * @param integer $material_item_id
     * @return FolioItemMtl the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($folio_id, $seq, $material_seq, $material_item_id)
    {
        if (($model = FolioItemMtl::findOne(['folio_id' => $folio_id, 'seq' => $seq, 'material_seq' => $material_seq, 'material_item_id' => $material_item_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
