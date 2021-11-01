<?php

namespace app\controllers;

use Yii;
use app\models\InvTransferDet;
use app\models\InvTransferDetSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * InvTransferDetController implements the CRUD actions for InvTransferDet model.
 */
class InvTransferDetController extends Controller
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
     * Lists all InvTransferDet models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new InvTransferDetSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single InvTransferDet model.
     * @param integer $transfer_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($transfer_id, $seq)
    {
        return $this->render('view', [
            'model' => $this->findModel($transfer_id, $seq),
        ]);
    }

    /**
     * Creates a new InvTransferDet model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new InvTransferDet();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'transfer_id' => $model->transfer_id, 'seq' => $model->seq]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing InvTransferDet model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $transfer_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($transfer_id, $seq)
    {
        $model = $this->findModel($transfer_id, $seq);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'transfer_id' => $model->transfer_id, 'seq' => $model->seq]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing InvTransferDet model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $transfer_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($transfer_id, $seq)
    {
        $this->findModel($transfer_id, $seq)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the InvTransferDet model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $transfer_id
     * @param integer $seq
     * @return InvTransferDet the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($transfer_id, $seq)
    {
        if (($model = InvTransferDet::findOne(['transfer_id' => $transfer_id, 'seq' => $seq])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
