<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ReferenceType */

$this->title = $model->ref_type_id;
$this->params['breadcrumbs'][] = ['label' => 'Reference Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <?= Html::a('Update', ['update', 'id' => $model->ref_type_id], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Delete', ['delete', 'id' => $model->ref_type_id], [
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
                            'ref_type_id',
                            'type_name',
                            'bpjs_refer_type',
                            'created_user_id',
                            'created_time',
                            'modified_user_id',
                            'modified_time',
                            'source',
                            'bpjs_online',
                            'address_line',
                            'code_ref',
                            'city_id',
                            'district_id',
                            'subdistrict_id',
                            'province_id',
                            'village_id',
                            'pic_name',
                            'handphone',
                            'ref_type_group',
                            'sub_district_id',
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