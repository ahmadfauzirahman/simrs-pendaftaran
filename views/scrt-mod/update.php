<?php

/* @var $this yii\web\View */
/* @var $model app\models\ScrtMod */

$this->title = 'Update Scrt Mod: ' . $model->mod_id;
$this->params['breadcrumbs'][] = ['label' => 'Scrt Mods', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->mod_id, 'url' => ['view', 'id' => $model->mod_id]];
$this->params['breadcrumbs'][] = 'Update';
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <?=$this->render('_form', [
                        'model' => $model
                    ]) ?>
                </div>
            </div>
        </div>
        <!--.card-body-->
    </div>
    <!--.card-->
</div>