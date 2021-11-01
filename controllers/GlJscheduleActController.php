<?php

namespace app\controllers;

use Yii;
use app\models\GlJscheduleAct;
use app\models\GlJscheduleActSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * GlJscheduleActController implements the CRUD actions for GlJscheduleAct model.
 */
class GlJscheduleActController extends Controller
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
     * Lists all GlJscheduleAct models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new GlJscheduleActSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single GlJscheduleAct model.
     * @param integer $jschedule_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($jschedule_id, $seq)
    {
        return $this->render('view', [
            'model' => $this->findModel($jschedule_id, $seq),
        ]);
    }

    /**
     * Creates a new GlJscheduleAct model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new GlJscheduleAct();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'jschedule_id' => $model->jschedule_id, 'seq' => $model->seq]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing GlJscheduleAct model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $jschedule_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($jschedule_id, $seq)
    {
        $model = $this->findModel($jschedule_id, $seq);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'jschedule_id' => $model->jschedule_id, 'seq' => $model->seq]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing GlJscheduleAct model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $jschedule_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($jschedule_id, $seq)
    {
        $this->findModel($jschedule_id, $seq)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the GlJscheduleAct model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $jschedule_id
     * @param integer $seq
     * @return GlJscheduleAct the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($jschedule_id, $seq)
    {
        if (($model = GlJscheduleAct::findOne(['jschedule_id' => $jschedule_id, 'seq' => $seq])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
