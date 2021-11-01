<?php

namespace app\controllers;

use Yii;
use app\models\MarketingCardExtDet;
use app\models\MarketingCardExtDetSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MarketingCardExtDetController implements the CRUD actions for MarketingCardExtDet model.
 */
class MarketingCardExtDetController extends Controller
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
     * Lists all MarketingCardExtDet models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MarketingCardExtDetSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single MarketingCardExtDet model.
     * @param integer $card_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($card_id, $seq)
    {
        return $this->render('view', [
            'model' => $this->findModel($card_id, $seq),
        ]);
    }

    /**
     * Creates a new MarketingCardExtDet model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new MarketingCardExtDet();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'card_id' => $model->card_id, 'seq' => $model->seq]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing MarketingCardExtDet model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $card_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($card_id, $seq)
    {
        $model = $this->findModel($card_id, $seq);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'card_id' => $model->card_id, 'seq' => $model->seq]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing MarketingCardExtDet model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $card_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($card_id, $seq)
    {
        $this->findModel($card_id, $seq)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the MarketingCardExtDet model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $card_id
     * @param integer $seq
     * @return MarketingCardExtDet the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($card_id, $seq)
    {
        if (($model = MarketingCardExtDet::findOne(['card_id' => $card_id, 'seq' => $seq])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
