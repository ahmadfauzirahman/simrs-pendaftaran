<?php

namespace app\controllers;

use Yii;
use app\models\MedrecTransferDet;
use app\models\MedrecTransferDetSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MedrecTransferDetController implements the CRUD actions for MedrecTransferDet model.
 */
class MedrecTransferDetController extends Controller
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
     * Lists all MedrecTransferDet models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MedrecTransferDetSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single MedrecTransferDet model.
     * @param integer $mr_transfer_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($mr_transfer_id, $seq)
    {
        return $this->render('view', [
            'model' => $this->findModel($mr_transfer_id, $seq),
        ]);
    }

    /**
     * Creates a new MedrecTransferDet model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new MedrecTransferDet();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'mr_transfer_id' => $model->mr_transfer_id, 'seq' => $model->seq]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing MedrecTransferDet model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $mr_transfer_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($mr_transfer_id, $seq)
    {
        $model = $this->findModel($mr_transfer_id, $seq);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'mr_transfer_id' => $model->mr_transfer_id, 'seq' => $model->seq]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing MedrecTransferDet model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $mr_transfer_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($mr_transfer_id, $seq)
    {
        $this->findModel($mr_transfer_id, $seq)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the MedrecTransferDet model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $mr_transfer_id
     * @param integer $seq
     * @return MedrecTransferDet the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($mr_transfer_id, $seq)
    {
        if (($model = MedrecTransferDet::findOne(['mr_transfer_id' => $mr_transfer_id, 'seq' => $seq])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
