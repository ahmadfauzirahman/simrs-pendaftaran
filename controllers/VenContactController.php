<?php

namespace app\controllers;

use Yii;
use app\models\VenContact;
use app\models\VenContactSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * VenContactController implements the CRUD actions for VenContact model.
 */
class VenContactController extends Controller
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
     * Lists all VenContact models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new VenContactSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single VenContact model.
     * @param integer $vendor_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($vendor_id, $seq)
    {
        return $this->render('view', [
            'model' => $this->findModel($vendor_id, $seq),
        ]);
    }

    /**
     * Creates a new VenContact model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new VenContact();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'vendor_id' => $model->vendor_id, 'seq' => $model->seq]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing VenContact model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $vendor_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($vendor_id, $seq)
    {
        $model = $this->findModel($vendor_id, $seq);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'vendor_id' => $model->vendor_id, 'seq' => $model->seq]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing VenContact model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $vendor_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($vendor_id, $seq)
    {
        $this->findModel($vendor_id, $seq)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the VenContact model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $vendor_id
     * @param integer $seq
     * @return VenContact the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($vendor_id, $seq)
    {
        if (($model = VenContact::findOne(['vendor_id' => $vendor_id, 'seq' => $seq])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
