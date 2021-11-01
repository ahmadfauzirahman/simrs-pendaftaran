<?php

namespace app\controllers;

use Yii;
use app\models\BedAvailableBpjs;
use app\models\BedAvailableBpjsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BedAvailableBpjsController implements the CRUD actions for BedAvailableBpjs model.
 */
class BedAvailableBpjsController extends Controller
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
     * Lists all BedAvailableBpjs models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new BedAvailableBpjsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single BedAvailableBpjs model.
     * @param string $kodekelas
     * @param string $koderuang
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kodekelas, $koderuang)
    {
        return $this->render('view', [
            'model' => $this->findModel($kodekelas, $koderuang),
        ]);
    }

    /**
     * Creates a new BedAvailableBpjs model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new BedAvailableBpjs();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kodekelas' => $model->kodekelas, 'koderuang' => $model->koderuang]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing BedAvailableBpjs model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kodekelas
     * @param string $koderuang
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kodekelas, $koderuang)
    {
        $model = $this->findModel($kodekelas, $koderuang);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kodekelas' => $model->kodekelas, 'koderuang' => $model->koderuang]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing BedAvailableBpjs model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kodekelas
     * @param string $koderuang
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kodekelas, $koderuang)
    {
        $this->findModel($kodekelas, $koderuang)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the BedAvailableBpjs model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kodekelas
     * @param string $koderuang
     * @return BedAvailableBpjs the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kodekelas, $koderuang)
    {
        if (($model = BedAvailableBpjs::findOne(['kodekelas' => $kodekelas, 'koderuang' => $koderuang])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
