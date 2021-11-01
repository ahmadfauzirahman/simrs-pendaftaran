<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\PatientContact */

$this->title = $model->patient_id;
$this->params['breadcrumbs'][] = ['label' => 'Patient Contacts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <?= Html::a('Update', ['update', 'patient_id' => $model->patient_id, 'seq' => $model->seq], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Delete', ['delete', 'patient_id' => $model->patient_id, 'seq' => $model->seq], [
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
                            'patient_id',
                            'seq',
                            'personal_relation_id',
                            'contact_name',
                            'id_card',
                            'address_line1',
                            'address_line2',
                            'rt',
                            'rw',
                            'village',
                            'city',
                            'zipcode',
                            'subdistrict',
                            'district',
                            'province',
                            'phone',
                            'fax',
                            'email:email',
                            'handphone',
                            'occupation',
                            'relative_patient_id',
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