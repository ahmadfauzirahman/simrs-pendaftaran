<?php

namespace app\controllers;

use Yii;
use app\models\StaffFeeCriteria;
use app\models\StaffFeeCriteriaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * StaffFeeCriteriaController implements the CRUD actions for StaffFeeCriteria model.
 */
class StaffFeeCriteriaController extends Controller
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
     * Lists all StaffFeeCriteria models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new StaffFeeCriteriaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single StaffFeeCriteria model.
     * @param integer $staff_id
     * @param integer $item_id
     * @param integer $item_type_ide
     * @param integer $item_group_id
     * @param integer $dept_id
     * @param integer $unit_id
     * @param integer $sub_unit_id
     * @param integer $service_cos_id
     * @param integer $pay_by_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($staff_id, $item_id, $item_type_ide, $item_group_id, $dept_id, $unit_id, $sub_unit_id, $service_cos_id, $pay_by_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($staff_id, $item_id, $item_type_ide, $item_group_id, $dept_id, $unit_id, $sub_unit_id, $service_cos_id, $pay_by_id),
        ]);
    }

    /**
     * Creates a new StaffFeeCriteria model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new StaffFeeCriteria();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'staff_id' => $model->staff_id, 'item_id' => $model->item_id, 'item_type_ide' => $model->item_type_ide, 'item_group_id' => $model->item_group_id, 'dept_id' => $model->dept_id, 'unit_id' => $model->unit_id, 'sub_unit_id' => $model->sub_unit_id, 'service_cos_id' => $model->service_cos_id, 'pay_by_id' => $model->pay_by_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing StaffFeeCriteria model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $staff_id
     * @param integer $item_id
     * @param integer $item_type_ide
     * @param integer $item_group_id
     * @param integer $dept_id
     * @param integer $unit_id
     * @param integer $sub_unit_id
     * @param integer $service_cos_id
     * @param integer $pay_by_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($staff_id, $item_id, $item_type_ide, $item_group_id, $dept_id, $unit_id, $sub_unit_id, $service_cos_id, $pay_by_id)
    {
        $model = $this->findModel($staff_id, $item_id, $item_type_ide, $item_group_id, $dept_id, $unit_id, $sub_unit_id, $service_cos_id, $pay_by_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'staff_id' => $model->staff_id, 'item_id' => $model->item_id, 'item_type_ide' => $model->item_type_ide, 'item_group_id' => $model->item_group_id, 'dept_id' => $model->dept_id, 'unit_id' => $model->unit_id, 'sub_unit_id' => $model->sub_unit_id, 'service_cos_id' => $model->service_cos_id, 'pay_by_id' => $model->pay_by_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing StaffFeeCriteria model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $staff_id
     * @param integer $item_id
     * @param integer $item_type_ide
     * @param integer $item_group_id
     * @param integer $dept_id
     * @param integer $unit_id
     * @param integer $sub_unit_id
     * @param integer $service_cos_id
     * @param integer $pay_by_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($staff_id, $item_id, $item_type_ide, $item_group_id, $dept_id, $unit_id, $sub_unit_id, $service_cos_id, $pay_by_id)
    {
        $this->findModel($staff_id, $item_id, $item_type_ide, $item_group_id, $dept_id, $unit_id, $sub_unit_id, $service_cos_id, $pay_by_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the StaffFeeCriteria model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $staff_id
     * @param integer $item_id
     * @param integer $item_type_ide
     * @param integer $item_group_id
     * @param integer $dept_id
     * @param integer $unit_id
     * @param integer $sub_unit_id
     * @param integer $service_cos_id
     * @param integer $pay_by_id
     * @return StaffFeeCriteria the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($staff_id, $item_id, $item_type_ide, $item_group_id, $dept_id, $unit_id, $sub_unit_id, $service_cos_id, $pay_by_id)
    {
        if (($model = StaffFeeCriteria::findOne(['staff_id' => $staff_id, 'item_id' => $item_id, 'item_type_ide' => $item_type_ide, 'item_group_id' => $item_group_id, 'dept_id' => $dept_id, 'unit_id' => $unit_id, 'sub_unit_id' => $sub_unit_id, 'service_cos_id' => $service_cos_id, 'pay_by_id' => $pay_by_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
