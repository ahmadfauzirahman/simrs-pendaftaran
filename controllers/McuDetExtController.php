<?php

namespace app\controllers;

use Yii;
use app\models\McuDetExt;
use app\models\McuDetExtSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * McuDetExtController implements the CRUD actions for McuDetExt model.
 */
class McuDetExtController extends Controller
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
     * Lists all McuDetExt models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new McuDetExtSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single McuDetExt model.
     * @param integer $mcu_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($mcu_id, $seq)
    {
        return $this->render('view', [
            'model' => $this->findModel($mcu_id, $seq),
        ]);
    }

    /**
     * Creates a new McuDetExt model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new McuDetExt();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'mcu_id' => $model->mcu_id, 'seq' => $model->seq]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing McuDetExt model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $mcu_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($mcu_id, $seq)
    {
        $model = $this->findModel($mcu_id, $seq);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'mcu_id' => $model->mcu_id, 'seq' => $model->seq]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing McuDetExt model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $mcu_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($mcu_id, $seq)
    {
        $this->findModel($mcu_id, $seq)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the McuDetExt model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $mcu_id
     * @param integer $seq
     * @return McuDetExt the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($mcu_id, $seq)
    {
        if (($model = McuDetExt::findOne(['mcu_id' => $mcu_id, 'seq' => $seq])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
