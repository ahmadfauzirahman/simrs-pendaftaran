<?php

namespace app\controllers;

use Yii;
use app\models\BpjsGetSepApproval;
use app\models\BpjsGetSepApprovalSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BpjsGetSepApprovalController implements the CRUD actions for BpjsGetSepApproval model.
 */
class BpjsGetSepApprovalController extends Controller
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
     * Lists all BpjsGetSepApproval models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new BpjsGetSepApprovalSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single BpjsGetSepApproval model.
     * @param string $no_kartu
     * @param string $tgl_sep
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_kartu, $tgl_sep)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_kartu, $tgl_sep),
        ]);
    }

    /**
     * Creates a new BpjsGetSepApproval model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new BpjsGetSepApproval();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_kartu' => $model->no_kartu, 'tgl_sep' => $model->tgl_sep]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing BpjsGetSepApproval model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_kartu
     * @param string $tgl_sep
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_kartu, $tgl_sep)
    {
        $model = $this->findModel($no_kartu, $tgl_sep);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_kartu' => $model->no_kartu, 'tgl_sep' => $model->tgl_sep]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing BpjsGetSepApproval model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_kartu
     * @param string $tgl_sep
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_kartu, $tgl_sep)
    {
        $this->findModel($no_kartu, $tgl_sep)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the BpjsGetSepApproval model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_kartu
     * @param string $tgl_sep
     * @return BpjsGetSepApproval the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_kartu, $tgl_sep)
    {
        if (($model = BpjsGetSepApproval::findOne(['no_kartu' => $no_kartu, 'tgl_sep' => $tgl_sep])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
