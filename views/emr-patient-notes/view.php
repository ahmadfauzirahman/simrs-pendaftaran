<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\EmrPatientNotes */

$this->title = $model->patient_id;
$this->params['breadcrumbs'][] = ['label' => 'Emr Patient Notes', 'url' => ['index']];
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
                            'patient_notes_id',
                            'notes_status',
                            'notes_description',
                            'notes_created_time',
                            'notes_created_by',
                            'notes_modified_time',
                            'notes_modified_by',
                            'notes_cancelled_time',
                            'notes_cancelled_by',
                            'notes_cancellation_reason',
                            'notes_cancelled_signature',
                            'notes_verified_time',
                            'notes_verified_by',
                            'notes_verified_signature',
                            'notes_cosigned_time',
                            'notes_cosigned_by',
                            'notes_cosigned_signature',
                            'notes_cosigned2_time',
                            'notes_cosigned2_by',
                            'notes_cosigned2_signature',
                            'notes_cosigned3_time',
                            'notes_cosigned3_by',
                            'notes_cosigned3_signature',
                            'notes_cosigned4_time',
                            'notes_cosigned4_by',
                            'notes_cosigned4_signature',
                            'notes_cosigned5_time',
                            'notes_cosigned5_by',
                            'notes_cosigned5_signature',
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