<?php

namespace app\controllers;

use Yii;
use app\models\OkupasiTugasXt;
use app\models\OkupasiTugasXtSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * OkupasiTugasXtController implements the CRUD actions for OkupasiTugasXt model.
 */
class OkupasiTugasXtController extends Controller
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
     * Lists all OkupasiTugasXt models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new OkupasiTugasXtSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single OkupasiTugasXt model.
     * @param integer $okup_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($okup_id, $seq)
    {
        return $this->render('view', [
            'model' => $this->findModel($okup_id, $seq),
        ]);
    }

    /**
     * Creates a new OkupasiTugasXt model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new OkupasiTugasXt();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'okup_id' => $model->okup_id, 'seq' => $model->seq]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing OkupasiTugasXt model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $okup_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($okup_id, $seq)
    {
        $model = $this->findModel($okup_id, $seq);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'okup_id' => $model->okup_id, 'seq' => $model->seq]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing OkupasiTugasXt model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $okup_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($okup_id, $seq)
    {
        $this->findModel($okup_id, $seq)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the OkupasiTugasXt model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $okup_id
     * @param integer $seq
     * @return OkupasiTugasXt the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($okup_id, $seq)
    {
        if (($model = OkupasiTugasXt::findOne(['okup_id' => $okup_id, 'seq' => $seq])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
