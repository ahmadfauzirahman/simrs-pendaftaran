<?php

namespace app\controllers;

use Yii;
use app\models\InformasiPhoneXt;
use app\models\InformasiPhoneXtSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * InformasiPhoneXtController implements the CRUD actions for InformasiPhoneXt model.
 */
class InformasiPhoneXtController extends Controller
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
     * Lists all InformasiPhoneXt models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new InformasiPhoneXtSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single InformasiPhoneXt model.
     * @param integer $informasi_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($informasi_id, $seq)
    {
        return $this->render('view', [
            'model' => $this->findModel($informasi_id, $seq),
        ]);
    }

    /**
     * Creates a new InformasiPhoneXt model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new InformasiPhoneXt();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'informasi_id' => $model->informasi_id, 'seq' => $model->seq]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing InformasiPhoneXt model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $informasi_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($informasi_id, $seq)
    {
        $model = $this->findModel($informasi_id, $seq);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'informasi_id' => $model->informasi_id, 'seq' => $model->seq]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing InformasiPhoneXt model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $informasi_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($informasi_id, $seq)
    {
        $this->findModel($informasi_id, $seq)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the InformasiPhoneXt model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $informasi_id
     * @param integer $seq
     * @return InformasiPhoneXt the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($informasi_id, $seq)
    {
        if (($model = InformasiPhoneXt::findOne(['informasi_id' => $informasi_id, 'seq' => $seq])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
