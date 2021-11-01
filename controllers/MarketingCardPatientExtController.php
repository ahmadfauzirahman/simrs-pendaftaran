<?php

namespace app\controllers;

use Yii;
use app\models\MarketingCardPatientExt;
use app\models\MarketingCardPatientExtSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MarketingCardPatientExtController implements the CRUD actions for MarketingCardPatientExt model.
 */
class MarketingCardPatientExtController extends Controller
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
     * Lists all MarketingCardPatientExt models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MarketingCardPatientExtSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single MarketingCardPatientExt model.
     * @param integer $card_id
     * @param integer $patient_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($card_id, $patient_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($card_id, $patient_id),
        ]);
    }

    /**
     * Creates a new MarketingCardPatientExt model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new MarketingCardPatientExt();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'card_id' => $model->card_id, 'patient_id' => $model->patient_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing MarketingCardPatientExt model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $card_id
     * @param integer $patient_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($card_id, $patient_id)
    {
        $model = $this->findModel($card_id, $patient_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'card_id' => $model->card_id, 'patient_id' => $model->patient_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing MarketingCardPatientExt model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $card_id
     * @param integer $patient_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($card_id, $patient_id)
    {
        $this->findModel($card_id, $patient_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the MarketingCardPatientExt model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $card_id
     * @param integer $patient_id
     * @return MarketingCardPatientExt the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($card_id, $patient_id)
    {
        if (($model = MarketingCardPatientExt::findOne(['card_id' => $card_id, 'patient_id' => $patient_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
