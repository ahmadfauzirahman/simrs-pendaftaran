<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ItemKitsSearch */
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

    <?= $form->field($model, 'item_id') ?>

    <?= $form->field($model, 'seq') ?>

    <?= $form->field($model, 'kits_item_id') ?>

    <?= $form->field($model, 'quantity') ?>

    <?= $form->field($model, 'waste_pc') ?>

    <?php // echo $form->field($model, 'uom') ?>

    <?php // echo $form->field($model, 'unit_price') ?>

    <?php // echo $form->field($model, 'disc_pc') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    </div>
    <!--.col-md-12-->
</div>
