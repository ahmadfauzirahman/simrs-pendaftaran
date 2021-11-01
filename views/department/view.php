<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Department */

$this->title = $model->dept_id;
$this->params['breadcrumbs'][] = ['label' => 'Departments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <?= Html::a('Update', ['update', 'id' => $model->dept_id], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Delete', ['delete', 'id' => $model->dept_id], [
                            'class' => 'btn btn-danger',
                            'data' => [
                                'confirm' => 'Are you sure you want to delete this item?',
                                'method' => 'post',
                            ],
                        ]) ?>
                    </p>
                    <?= DetailView::widget([
                        'model' => $model,
                        'attributes' => [
                            'dept_id',
                            'dept_name',
                            'person_in_charge',
                            'created_user_id',
                            'created_time',
                            'modified_user_id',
                            'modified_time',
                            'unit_caption',
                            'sub_unit_caption',
                            'small_icon',
                            'large_icon',
                            'description:ntext',
                            'tab_charges',
                            'tab_auto_charges',
                            'tab_anamnesis',
                            'tab_physical_exam',
                            'tab_other_exam',
                            'tab_diagnosis',
                            'tab_therapy',
                            'tab_procedure',
                            'tab_prognosis',
                            'tab_alergy',
                            'tab_degenerative',
                            'tab_chronic',
                            'tab_diet',
                            'tab_notes',
                            'gl_jtype_id',
                            'col_staff',
                            'refer_dept_code',
                        ],
                    ]) ?>
                </div>
                <!--.col-md-12-->
            </div>
            <!--.row-->
        </div>
        <!--.card-body-->
    </div>
    <!--.card-->
</div>