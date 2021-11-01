<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BedAvailableBpjsSearch */
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

    <?= $form->field($model, 'kodekelas') ?>

    <?= $form->field($model, 'koderuang') ?>

    <?= $form->field($model, 'namakelas') ?>

    <?= $form->field($model, 'namaruang') ?>

    <?= $form->field($model, 'kapasitas') ?>

    <?php // echo $form->field($model, 'tersedia') ?>

    <?php // echo $form->field($model, 'tersediapria') ?>

    <?php // echo $form->field($model, 'tersediawanita') ?>

    <?php // echo $form->field($model, 'tersediapriawanita') ?>

    <?php // echo $form->field($model, 'synchronize') ?>

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
