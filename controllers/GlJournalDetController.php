<?php

namespace app\controllers;

use Yii;
use app\models\GlJournalDet;
use app\models\GlJournalDetSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * GlJournalDetController implements the CRUD actions for GlJournalDet model.
 */
class GlJournalDetController extends Controller
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
     * Lists all GlJournalDet models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new GlJournalDetSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single GlJournalDet model.
     * @param integer $journal_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($journal_id, $seq)
    {
        return $this->render('view', [
            'model' => $this->findModel($journal_id, $seq),
        ]);
    }

    /**
     * Creates a new GlJournalDet model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new GlJournalDet();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'journal_id' => $model->journal_id, 'seq' => $model->seq]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing GlJournalDet model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $journal_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($journal_id, $seq)
    {
        $model = $this->findModel($journal_id, $seq);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'journal_id' => $model->journal_id, 'seq' => $model->seq]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing GlJournalDet model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $journal_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($journal_id, $seq)
    {
        $this->findModel($journal_id, $seq)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the GlJournalDet model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $journal_id
     * @param integer $seq
     * @return GlJournalDet the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($journal_id, $seq)
    {
        if (($model = GlJournalDet::findOne(['journal_id' => $journal_id, 'seq' => $seq])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}