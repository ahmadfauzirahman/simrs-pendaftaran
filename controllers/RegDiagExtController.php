<?php

namespace app\controllers;

use Yii;
use app\models\RegDiagExt;
use app\models\RegDiagExtSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * RegDiagExtController implements the CRUD actions for RegDiagExt model.
 */
class RegDiagExtController extends Controller
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
     * Lists all RegDiagExt models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new RegDiagExtSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single RegDiagExt model.
     * @param integer $reg_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($reg_id, $seq)
    {
        return $this->render('view', [
            'model' => $this->findModel($reg_id, $seq),
        ]);
    }

    /**
     * Creates a new RegDiagExt model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new RegDiagExt();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'reg_id' => $model->reg_id, 'seq' => $model->seq]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing RegDiagExt model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $reg_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($reg_id, $seq)
    {
        $model = $this->findModel($reg_id, $seq);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'reg_id' => $model->reg_id, 'seq' => $model->seq]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing RegDiagExt model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $reg_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($reg_id, $seq)
    {
        $this->findModel($reg_id, $seq)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the RegDiagExt model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $reg_id
     * @param integer $seq
     * @return RegDiagExt the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($reg_id, $seq)
    {
        if (($model = RegDiagExt::findOne(['reg_id' => $reg_id, 'seq' => $seq])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
