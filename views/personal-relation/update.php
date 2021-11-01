<?php

/* @var $this yii\web\View */
/* @var $model app\models\PersonalRelation */

$this->title = 'Update Personal Relation: ' . $model->personal_relation_id;
$this->params['breadcrumbs'][] = ['label' => 'Personal Relations', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->personal_relation_id, 'url' => ['view', 'id' => $model->personal_relation_id]];
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