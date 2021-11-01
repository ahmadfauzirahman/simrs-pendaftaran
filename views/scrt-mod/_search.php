<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ScrtModSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="row mt-2">
    <div class="col-md-12">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'mod_id') ?>

    <?= $form->field($model, 'mod_name') ?>

    <?= $form->field($model, 'standard_actions') ?>

    <?= $form->field($model, 'add_actions') ?>

    <?= $form->field($model, 'action_name') ?>

    <?php // echo $form->field($model, 'form_name') ?>

    <?php // echo $form->field($model, 'parent_mod_id') ?>

    <?php // echo $form->field($model, 'order_seq') ?>

    <?php // echo $form->field($model, 'notes') ?>

    <?php // echo $form->field($model, 'before_insert_url') ?>

    <?php // echo $form->field($model, 'after_insert_url') ?>

    <?php // echo $form->field($model, 'before_edit_url') ?>

    <?php // echo $form->field($model, 'after_edit_url') ?>

    <?php // echo $form->field($model, 'before_save_url') ?>

    <?php // echo $form->field($model, 'after_save_url') ?>

    <?php // echo $form->field($model, 'before_cancel_url') ?>

    <?php // echo $form->field($model, 'after_cancel_url') ?>

    <?php // echo $form->field($model, 'before_delete_url') ?>

    <?php // echo $form->field($model, 'after_delete_url') ?>

    <?php // echo $form->field($model, 'before_copy_url') ?>

    <?php // echo $form->field($model, 'after_copy_url') ?>

    <?php // echo $form->field($model, 'before_post_url') ?>

    <?php // echo $form->field($model, 'after_post_url') ?>

    <?php // echo $form->field($model, 'before_export_url') ?>

    <?php // echo $form->field($model, 'after_export_url') ?>

    <?php // echo $form->field($model, 'before_print_url') ?>

    <?php // echo $form->field($model, 'after_print_url') ?>

    <?php // echo $form->field($model, 'before_refresh_url') ?>

    <?php // echo $form->field($model, 'after_refresh_url') ?>

    <?php // echo $form->field($model, 'on_call_url') ?>

    <?php // echo $form->field($model, 'bi_x') ?>

    <?php // echo $form->field($model, 'bi_y') ?>

    <?php // echo $form->field($model, 'ai_x') ?>

    <?php // echo $form->field($model, 'ai_y') ?>

    <?php // echo $form->field($model, 'be_x') ?>

    <?php // echo $form->field($model, 'be_y') ?>

    <?php // echo $form->field($model, 'ae_x') ?>

    <?php // echo $form->field($model, 'ae_y') ?>

    <?php // echo $form->field($model, 'bs_x') ?>

    <?php // echo $form->field($model, 'bs_y') ?>

    <?php // echo $form->field($model, 'as_x') ?>

    <?php // echo $form->field($model, 'as_y') ?>

    <?php // echo $form->field($model, 'bc_x') ?>

    <?php // echo $form->field($model, 'bc_y') ?>

    <?php // echo $form->field($model, 'ac_x') ?>

    <?php // echo $form->field($model, 'ac_y') ?>

    <?php // echo $form->field($model, 'bd_x') ?>

    <?php // echo $form->field($model, 'bd_y') ?>

    <?php // echo $form->field($model, 'ad_x') ?>

    <?php // echo $form->field($model, 'ad_y') ?>

    <?php // echo $form->field($model, 'bo_x') ?>

    <?php // echo $form->field($model, 'bo_y') ?>

    <?php // echo $form->field($model, 'ao_x') ?>

    <?php // echo $form->field($model, 'ao_y') ?>

    <?php // echo $form->field($model, 'bp_x') ?>

    <?php // echo $form->field($model, 'bp_y') ?>

    <?php // echo $form->field($model, 'ap_x') ?>

    <?php // echo $form->field($model, 'ap_y') ?>

    <?php // echo $form->field($model, 'bx_x') ?>

    <?php // echo $form->field($model, 'bx_y') ?>

    <?php // echo $form->field($model, 'ax_x') ?>

    <?php // echo $form->field($model, 'ax_y') ?>

    <?php // echo $form->field($model, 'bt_x') ?>

    <?php // echo $form->field($model, 'bt_y') ?>

    <?php // echo $form->field($model, 'at_x') ?>

    <?php // echo $form->field($model, 'at_y') ?>

    <?php // echo $form->field($model, 'br_x') ?>

    <?php // echo $form->field($model, 'br_y') ?>

    <?php // echo $form->field($model, 'ar_x') ?>

    <?php // echo $form->field($model, 'ar_y') ?>

    <?php // echo $form->field($model, 'oc_x') ?>

    <?php // echo $form->field($model, 'oc_y') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    </div>
    <!--.col-md-12-->
</div>
