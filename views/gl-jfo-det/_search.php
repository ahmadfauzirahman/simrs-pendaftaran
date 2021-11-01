<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\GlJfoDetSearch */
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

    <?= $form->field($model, 'journal_id') ?>

    <?= $form->field($model, 'seq') ?>

    <?= $form->field($model, 'account_id') ?>

    <?= $form->field($model, 'location_id') ?>

    <?= $form->field($model, 'currency_id') ?>

    <?php // echo $form->field($model, 'foreign_amount') ?>

    <?php // echo $form->field($model, 'exchange_rate') ?>

    <?php // echo $form->field($model, 'department_id') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'amount') ?>

    <?php // echo $form->field($model, 'item_id') ?>

    <?php // echo $form->field($model, 'item_mtl_id') ?>

    <?php // echo $form->field($model, 'item_kits_id') ?>

    <?php // echo $form->field($model, 'folio_id') ?>

    <?php // echo $form->field($model, 'folio_seq') ?>

    <?php // echo $form->field($model, 'folio_mtl_seq') ?>

    <?php // echo $form->field($model, 'folio_kits_seq') ?>

    <?php // echo $form->field($model, 'folio_line_amount') ?>

    <?php // echo $form->field($model, 'tax1_id') ?>

    <?php // echo $form->field($model, 'tax1_amount') ?>

    <?php // echo $form->field($model, 'tax2_id') ?>

    <?php // echo $form->field($model, 'tax2_amount') ?>

    <?php // echo $form->field($model, 'posted') ?>

    <?php // echo $form->field($model, 'processed') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    </div>
    <!--.col-md-12-->
</div>
