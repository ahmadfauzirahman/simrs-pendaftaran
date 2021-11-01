<?php

namespace app\controllers;

use Yii;
use app\models\FolioTherapyMtl;
use app\models\FolioTherapyMtlSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * FolioTherapyMtlController implements the CRUD actions for FolioTherapyMtl model.
 */
class FolioTherapyMtlController extends Controller
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
     * Lists all FolioTherapyMtl models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new FolioTherapyMtlSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single FolioTherapyMtl model.
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
     * Creates a new FolioTherapyMtl model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new FolioTherapyMtl();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'folio_id' => $model->folio_id, 'seq' => $model->seq, 'material_seq' => $model->material_seq, 'material_item_id' => $model->material_item_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing FolioTherapyMtl model.
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
     * Deletes an existing FolioTherapyMtl model.
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
     * Finds the FolioTherapyMtl model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $folio_id
     * @param integer $seq
     * @param integer $material_seq
     * @param integer $material_item_id
     * @return FolioTherapyMtl the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($folio_id, $seq, $material_seq, $material_item_id)
    {
        if (($model = FolioTherapyMtl::findOne(['folio_id' => $folio_id, 'seq' => $seq, 'material_seq' => $material_seq, 'material_item_id' => $material_item_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
