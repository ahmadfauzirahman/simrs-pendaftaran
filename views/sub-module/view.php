<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\SubModule */

$this->title = $model->sub_mod_id;
$this->params['breadcrumbs'][] = ['label' => 'Sub Modules', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <?= Html::a('Update', ['update', 'id' => $model->sub_mod_id], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Delete', ['delete', 'id' => $model->sub_mod_id], [
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
                            'sub_mod_id',
                            'sub_mod_name',
                            'interface_id',
                            'image',
                            'dept_id',
                            'unit_id',
                            'sub_unit_id',
                            'mod_id',
                            'barcode_enabled',
                            'payment_type',
                            'before_insert_url:url',
                            'after_insert_url:url',
                            'before_edit_url:url',
                            'after_edit_url:url',
                            'before_cancel_url:url',
                            'after_cancel_url:url',
                            'bi_x',
                            'bi_y',
                            'ai_x',
                            'ai_y',
                            'be_x',
                            'be_y',
                            'ae_x',
                            'ae_y',
                            'bc_x',
                            'bc_y',
                            'ac_x',
                            'ac_y',
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