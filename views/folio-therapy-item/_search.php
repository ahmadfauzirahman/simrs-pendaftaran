<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FolioTherapyItemSearch */
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

    <?= $form->field($model, 'item_id') ?>

    <?= $form->field($model, 'quantity') ?>

    <?= $form->field($model, 'age_weight') ?>

    <?php // echo $form->field($model, 'total_qty') ?>

    <?php // echo $form->field($model, 'dtd') ?>

    <?php // echo $form->field($model, 'uom') ?>

    <?php // echo $form->field($model, 'uom_conversion') ?>

    <?php // echo $form->field($model, 'remark') ?>

    <?php // echo $form->field($model, 'dosage') ?>

    <?php // echo $form->field($model, 'other_remark') ?>

    <?php // echo $form->field($model, 'iter') ?>

    <?php // echo $form->field($model, 'posted') ?>

    <?php // echo $form->field($model, 'posted_sent') ?>

    <?php // echo $form->field($model, 'deleted_sent') ?>

    <?php // echo $form->field($model, 'created_user_id') ?>

    <?php // echo $form->field($model, 'created_time') ?>

    <?php // echo $form->field($model, 'modified_user_id') ?>

    <?php // echo $form->field($model, 'modified_time') ?>

    <?php // echo $form->field($model, 'deleted_user_id') ?>

    <?php // echo $form->field($model, 'deleted_time') ?>

    <?php // echo $form->field($model, 'validated_by') ?>

    <?php // echo $form->field($model, 'validated_time') ?>

    <?php // echo $form->field($model, 'deleted_by') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    </div>
    <!--.col-md-12-->
</div>
