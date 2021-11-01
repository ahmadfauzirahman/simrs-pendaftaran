<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\RegistrationFill */

$this->title = $model->registration_id;
$this->params['breadcrumbs'][] = ['label' => 'Registration Fills', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <?= Html::a('Update', ['update', 'id' => $model->registration_id], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Delete', ['delete', 'id' => $model->registration_id], [
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
                            'registration_id',
                            'patient_id',
                            'registration_no',
                            'registration_date',
                            'pay_by_id',
                            'contact_seq_pay',
                            'status',
                            'pay_by_amount',
                            'self_amount',
                            'amount',
                            'owing_pay_by',
                            'owing_self',
                            'first_folio_id',
                            'refer_from_doctor',
                            'refer_from_hospital',
                            'refer_from_diagnose:ntext',
                            'notes:ntext',
                            'created_user_id',
                            'created_time',
                            'modified_user_id',
                            'modified_time',
                            'excess_by_patient',
                            'ref_type_id',
                            'q_number',
                            'reservation_date',
                            'main_folio_id',
                            'process',
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