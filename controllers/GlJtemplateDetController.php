<?php

namespace app\controllers;

use Yii;
use app\models\GlJtemplateDet;
use app\models\GlJtemplateDetSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * GlJtemplateDetController implements the CRUD actions for GlJtemplateDet model.
 */
class GlJtemplateDetController extends Controller
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
     * Lists all GlJtemplateDet models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new GlJtemplateDetSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single GlJtemplateDet model.
     * @param integer $jtemplate_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($jtemplate_id, $seq)
    {
        return $this->render('view', [
            'model' => $this->findModel($jtemplate_id, $seq),
        ]);
    }

    /**
     * Creates a new GlJtemplateDet model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new GlJtemplateDet();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'jtemplate_id' => $model->jtemplate_id, 'seq' => $model->seq]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing GlJtemplateDet model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $jtemplate_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($jtemplate_id, $seq)
    {
        $model = $this->findModel($jtemplate_id, $seq);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'jtemplate_id' => $model->jtemplate_id, 'seq' => $model->seq]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing GlJtemplateDet model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $jtemplate_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($jtemplate_id, $seq)
    {
        $this->findModel($jtemplate_id, $seq)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the GlJtemplateDet model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $jtemplate_id
     * @param integer $seq
     * @return GlJtemplateDet the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($jtemplate_id, $seq)
    {
        if (($model = GlJtemplateDet::findOne(['jtemplate_id' => $jtemplate_id, 'seq' => $seq])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
