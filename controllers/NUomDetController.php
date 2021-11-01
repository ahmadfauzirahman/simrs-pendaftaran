<?php

namespace app\controllers;

use Yii;
use app\models\NUomDet;
use app\models\NUomDetSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * NUomDetController implements the CRUD actions for NUomDet model.
 */
class NUomDetController extends Controller
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
     * Lists all NUomDet models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new NUomDetSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single NUomDet model.
     * @param integer $uom_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($uom_id, $seq)
    {
        return $this->render('view', [
            'model' => $this->findModel($uom_id, $seq),
        ]);
    }

    /**
     * Creates a new NUomDet model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new NUomDet();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'uom_id' => $model->uom_id, 'seq' => $model->seq]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing NUomDet model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $uom_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($uom_id, $seq)
    {
        $model = $this->findModel($uom_id, $seq);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'uom_id' => $model->uom_id, 'seq' => $model->seq]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing NUomDet model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $uom_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($uom_id, $seq)
    {
        $this->findModel($uom_id, $seq)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the NUomDet model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $uom_id
     * @param integer $seq
     * @return NUomDet the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($uom_id, $seq)
    {
        if (($model = NUomDet::findOne(['uom_id' => $uom_id, 'seq' => $seq])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
