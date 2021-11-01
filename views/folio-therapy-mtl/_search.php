<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FolioTherapyMtlSearch */
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

    <?= $form->field($model, 'folio_id') ?>

    <?= $form->field($model, 'seq') ?>

    <?= $form->field($model, 'material_seq') ?>

    <?= $form->field($model, 'material_item_id') ?>

    <?= $form->field($model, 'quantity') ?>

    <?php // echo $form->field($model, 'waste_pc') ?>

    <?php // echo $form->field($model, 'uom') ?>

    <?php // echo $form->field($model, 'uom_conversion') ?>

    <?php // echo $form->field($model, 'uom_id') ?>

    <?php // echo $form->field($model, 'unit_price') ?>

    <?php // echo $form->field($model, 'unit_discount') ?>

    <?php // echo $form->field($model, 'staff_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    </div>
    <!--.col-md-12-->
</div>
