<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Sorder */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="sorder-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'order_id')->textInput() ?>

    <?= $form->field($model, 'order_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'order_date')->textInput() ?>

    <?= $form->field($model, 'customer_id')->textInput() ?>

    <?= $form->field($model, 'req_shipped_date')->textInput() ?>

    <?= $form->field($model, 'purchase_order_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'carrier_id')->textInput() ?>

    <?= $form->field($model, 'salesman_id')->textInput() ?>

    <?= $form->field($model, 'order_status')->textInput() ?>

    <?= $form->field($model, 'printed')->textInput() ?>

    <?= $form->field($model, 'currency_id')->textInput() ?>

    <?= $form->field($model, 'items_net_amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'order_amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tax1_id')->textInput() ?>

    <?= $form->field($model, 'tax2_id')->textInput() ?>

    <?= $form->field($model, 'tax1_rate')->textInput() ?>

    <?= $form->field($model, 'tax2_rate')->textInput() ?>

    <?= $form->field($model, 'tax1_amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tax2_amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'taxable_tax1_id')->textInput() ?>

    <?= $form->field($model, 'taxable_tax2_id')->textInput() ?>

    <?= $form->field($model, 'taxable_tax3_id')->textInput() ?>

    <?= $form->field($model, 'taxable_amount1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'taxable_amount2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'taxable_amount3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'num_of_shipments')->textInput() ?>

    <?= $form->field($model, 'order_disc_pc')->textInput() ?>

    <?= $form->field($model, 'order_disc_amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'shipto_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'shipto_address')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'notes')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'authorized_user_id')->textInput() ?>

    <?= $form->field($model, 'authorized_reason')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_user_id')->textInput() ?>

    <?= $form->field($model, 'created_time')->textInput() ?>

    <?= $form->field($model, 'modified_user_id')->textInput() ?>

    <?= $form->field($model, 'modified_time')->textInput() ?>

    <?= $form->field($model, 'disc_days')->textInput() ?>

    <?= $form->field($model, 'net_days')->textInput() ?>

    <?= $form->field($model, 'disc_pc')->textInput() ?>

    <?= $form->field($model, 'cod')->textInput() ?>

    <?= $form->field($model, 'dp_amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dp_invoiced')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
