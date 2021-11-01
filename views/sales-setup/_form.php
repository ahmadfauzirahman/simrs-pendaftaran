<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SalesSetup */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="sales-setup-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'company_id')->textInput() ?>

    <?= $form->field($model, 'shipment_warehouse_id')->textInput() ?>

    <?= $form->field($model, 'shipment_carrier_id')->textInput() ?>

    <?= $form->field($model, 'qty_ordered_restriction')->textInput() ?>

    <?= $form->field($model, 'qty_shipped_restriction')->textInput() ?>

    <?= $form->field($model, 'default_show_order')->textInput() ?>

    <?= $form->field($model, 'default_show_shipment')->textInput() ?>

    <?= $form->field($model, 'sorder_rpt_cat_id')->textInput() ?>

    <?= $form->field($model, 'shipment_rpt_cat_id')->textInput() ?>

    <?= $form->field($model, 'correction_needs_supervisor')->textInput() ?>

    <?= $form->field($model, 'created_user_id')->textInput() ?>

    <?= $form->field($model, 'created_time')->textInput() ?>

    <?= $form->field($model, 'modified_user_id')->textInput() ?>

    <?= $form->field($model, 'modified_time')->textInput() ?>

    <?= $form->field($model, 'pos_usage')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'pos_usage_remark')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'dtd')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'non_dtd')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
