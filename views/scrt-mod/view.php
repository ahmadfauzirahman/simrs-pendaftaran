<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ScrtMod */

$this->title = $model->mod_id;
$this->params['breadcrumbs'][] = ['label' => 'Scrt Mods', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <?= Html::a('Update', ['update', 'id' => $model->mod_id], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Delete', ['delete', 'id' => $model->mod_id], [
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
                            'mod_id',
                            'mod_name',
                            'standard_actions',
                            'add_actions',
                            'action_name',
                            'form_name',
                            'parent_mod_id',
                            'order_seq',
                            'notes:ntext',
                            'before_insert_url:url',
                            'after_insert_url:url',
                            'before_edit_url:url',
                            'after_edit_url:url',
                            'before_save_url:url',
                            'after_save_url:url',
                            'before_cancel_url:url',
                            'after_cancel_url:url',
                            'before_delete_url:url',
                            'after_delete_url:url',
                            'before_copy_url:url',
                            'after_copy_url:url',
                            'before_post_url:url',
                            'after_post_url:url',
                            'before_export_url:url',
                            'after_export_url:url',
                            'before_print_url:url',
                            'after_print_url:url',
                            'before_refresh_url:url',
                            'after_refresh_url:url',
                            'on_call_url:url',
                            'bi_x',
                            'bi_y',
                            'ai_x',
                            'ai_y',
                            'be_x',
                            'be_y',
                            'ae_x',
                            'ae_y',
                            'bs_x',
                            'bs_y',
                            'as_x',
                            'as_y',
                            'bc_x',
                            'bc_y',
                            'ac_x',
                            'ac_y',
                            'bd_x',
                            'bd_y',
                            'ad_x',
                            'ad_y',
                            'bo_x',
                            'bo_y',
                            'ao_x',
                            'ao_y',
                            'bp_x',
                            'bp_y',
                            'ap_x',
                            'ap_y',
                            'bx_x',
                            'bx_y',
                            'ax_x',
                            'ax_y',
                            'bt_x',
                            'bt_y',
                            'at_x',
                            'at_y',
                            'br_x',
                            'br_y',
                            'ar_x',
                            'ar_y',
                            'oc_x',
                            'oc_y',
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