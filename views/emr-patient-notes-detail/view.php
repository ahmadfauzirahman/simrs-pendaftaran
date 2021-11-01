<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\EmrPatientNotesDetail */

$this->title = $model->patient_notes_id;
$this->params['breadcrumbs'][] = ['label' => 'Emr Patient Notes Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <?= Html::a('Update', ['update', 'patient_notes_id' => $model->patient_notes_id, 'notes_seq' => $model->notes_seq], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Delete', ['delete', 'patient_notes_id' => $model->patient_notes_id, 'notes_seq' => $model->notes_seq], [
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
                            'patient_notes_id',
                            'notes_seq',
                            'notes_heading',
                            'notes_heading_seq',
                            'notes_content_type',
                            'notes_content',
                            'notes_report_id',
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