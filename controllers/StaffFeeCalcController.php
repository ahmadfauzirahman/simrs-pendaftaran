<?php

namespace app\controllers;

use Yii;
use app\models\StaffFeeCalc;
use app\models\StaffFeeCalcSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * StaffFeeCalcController implements the CRUD actions for StaffFeeCalc model.
 */
class StaffFeeCalcController extends Controller
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
     * Lists all StaffFeeCalc models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new StaffFeeCalcSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single StaffFeeCalc model.
     * @param integer $staff_id
     * @param string $trans_date
     * @param integer $folio_id
     * @param integer $folio_seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($staff_id, $trans_date, $folio_id, $folio_seq)
    {
        return $this->render('view', [
            'model' => $this->findModel($staff_id, $trans_date, $folio_id, $folio_seq),
        ]);
    }

    /**
     * Creates a new StaffFeeCalc model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new StaffFeeCalc();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'staff_id' => $model->staff_id, 'trans_date' => $model->trans_date, 'folio_id' => $model->folio_id, 'folio_seq' => $model->folio_seq]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing StaffFeeCalc model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $staff_id
     * @param string $trans_date
     * @param integer $folio_id
     * @param integer $folio_seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($staff_id, $trans_date, $folio_id, $folio_seq)
    {
        $model = $this->findModel($staff_id, $trans_date, $folio_id, $folio_seq);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'staff_id' => $model->staff_id, 'trans_date' => $model->trans_date, 'folio_id' => $model->folio_id, 'folio_seq' => $model->folio_seq]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing StaffFeeCalc model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $staff_id
     * @param string $trans_date
     * @param integer $folio_id
     * @param integer $folio_seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($staff_id, $trans_date, $folio_id, $folio_seq)
    {
        $this->findModel($staff_id, $trans_date, $folio_id, $folio_seq)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the StaffFeeCalc model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $staff_id
     * @param string $trans_date
     * @param integer $folio_id
     * @param integer $folio_seq
     * @return StaffFeeCalc the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($staff_id, $trans_date, $folio_id, $folio_seq)
    {
        if (($model = StaffFeeCalc::findOne(['staff_id' => $staff_id, 'trans_date' => $trans_date, 'folio_id' => $folio_id, 'folio_seq' => $folio_seq])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
