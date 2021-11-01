<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ScrtPolicyMod */

$this->title = $model->policy_id;
$this->params['breadcrumbs'][] = ['label' => 'Scrt Policy Mods', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <?= Html::a('Update', ['update', 'policy_id' => $model->policy_id, 'mod_id' => $model->mod_id], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Delete', ['delete', 'policy_id' => $model->policy_id, 'mod_id' => $model->mod_id], [
                            'class' => 'btn btn-danger',
                            'data' => [
                                'confirm' => 'Are you sure you want to delete this item?',
                                'method' => 'post',
                            ],
                        ]) ?>
                    </p>
                    <?= DetailView::widget([
                        'model' => $model,
                        'attributes' => [
                            'policy_id',
                            'mod_id',
                            'standard_actions',
                            'add_actions',
                        ],
                    ]) ?>
                </div>
                <!--.col-md-12-->
            </div>
            <!--.row-->
        </div>
        <!--.card-body-->
    </div>
    <!--.card-->
</div>