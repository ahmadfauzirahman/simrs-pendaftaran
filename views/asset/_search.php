<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AssetSearch */
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

    <?= $form->field($model, 'asset_id') ?>

    <?= $form->field($model, 'asset_no') ?>

    <?= $form->field($model, 'asset_name') ?>

    <?= $form->field($model, 'tag_id') ?>

    <?= $form->field($model, 'asset_type_id') ?>

    <?php // echo $form->field($model, 'tax_valuation') ?>

    <?php // echo $form->field($model, 'acquisition_date') ?>

    <?php // echo $form->field($model, 'usage_date') ?>

    <?php // echo $form->field($model, 'disposal_date') ?>

    <?php // echo $form->field($model, 'selling_date') ?>

    <?php // echo $form->field($model, 'life_time') ?>

    <?php // echo $form->field($model, 'life_time_unit') ?>

    <?php // echo $form->field($model, 'asset_gl_acc_id') ?>

    <?php // echo $form->field($model, 'dep_gl_acc_id') ?>

    <?php // echo $form->field($model, 'accdep_gl_acc_id') ?>

    <?php // echo $form->field($model, 'disposal_gl_acc_id') ?>

    <?php // echo $form->field($model, 'sales_gl_acc_id') ?>

    <?php // echo $form->field($model, 'model') ?>

    <?php // echo $form->field($model, 'model_name') ?>

    <?php // echo $form->field($model, 'dep_method') ?>

    <?php // echo $form->field($model, 'rate') ?>

    <?php // echo $form->field($model, 'asset_status') ?>

    <?php // echo $form->field($model, 'asset_value') ?>

    <?php // echo $form->field($model, 'dep_value') ?>

    <?php // echo $form->field($model, 'salvage_value') ?>

    <?php // echo $form->field($model, 'num_of_jvs') ?>

    <?php // echo $form->field($model, 'num_of_posted_jvs') ?>

    <?php // echo $form->field($model, 'location_id') ?>

    <?php // echo $form->field($model, 'asset_group_id') ?>

    <?php // echo $form->field($model, 'dept_id') ?>

    <?php // echo $form->field($model, 'manufacturer') ?>

    <?php // echo $form->field($model, 'mfg_model') ?>

    <?php // echo $form->field($model, 'mfg_date') ?>

    <?php // echo $form->field($model, 'serial_no') ?>

    <?php // echo $form->field($model, 'color') ?>

    <?php // echo $form->field($model, 'marking') ?>

    <?php // echo $form->field($model, 'warranty_date') ?>

    <?php // echo $form->field($model, 'last_mnt_date') ?>

    <?php // echo $form->field($model, 'mnt_period') ?>

    <?php // echo $form->field($model, 'picture') ?>

    <?php // echo $form->field($model, 'remark') ?>

    <?php // echo $form->field($model, 'policy_no') ?>

    <?php // echo $form->field($model, 'ins_date') ?>

    <?php // echo $form->field($model, 'ins_company') ?>

    <?php // echo $form->field($model, 'ins_address') ?>

    <?php // echo $form->field($model, 'ins_city') ?>

    <?php // echo $form->field($model, 'ins_term') ?>

    <?php // echo $form->field($model, 'ins_value') ?>

    <?php // echo $form->field($model, 'ins_validity_from') ?>

    <?php // echo $form->field($model, 'ins_validity_to') ?>

    <?php // echo $form->field($model, 'user_name') ?>

    <?php // echo $form->field($model, 'user_title') ?>

    <?php // echo $form->field($model, 'person_in_charge') ?>

    <?php // echo $form->field($model, 'maintenanced_by') ?>

    <?php // echo $form->field($model, 'notes') ?>

    <?php // echo $form->field($model, 'created_user_id') ?>

    <?php // echo $form->field($model, 'created_time') ?>

    <?php // echo $form->field($model, 'modified_user_id') ?>

    <?php // echo $form->field($model, 'modified_time') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    </div>
    <!--.col-md-12-->
</div>
