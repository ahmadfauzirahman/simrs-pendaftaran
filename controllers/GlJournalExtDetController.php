<?php

namespace app\controllers;

use Yii;
use app\models\GlJournalExtDet;
use app\models\GlJournalExtDetSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * GlJournalExtDetController implements the CRUD actions for GlJournalExtDet model.
 */
class GlJournalExtDetController extends Controller
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
     * Lists all GlJournalExtDet models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new GlJournalExtDetSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single GlJournalExtDet model.
     * @param integer $j_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($j_id, $seq)
    {
        return $this->render('view', [
            'model' => $this->findModel($j_id, $seq),
        ]);
    }

    /**
     * Creates a new GlJournalExtDet model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new GlJournalExtDet();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'j_id' => $model->j_id, 'seq' => $model->seq]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing GlJournalExtDet model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $j_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($j_id, $seq)
    {
        $model = $this->findModel($j_id, $seq);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'j_id' => $model->j_id, 'seq' => $model->seq]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing GlJournalExtDet model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $j_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($j_id, $seq)
    {
        $this->findModel($j_id, $seq)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the GlJournalExtDet model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $j_id
     * @param integer $seq
     * @return GlJournalExtDet the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($j_id, $seq)
    {
        if (($model = GlJournalExtDet::findOne(['j_id' => $j_id, 'seq' => $seq])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
