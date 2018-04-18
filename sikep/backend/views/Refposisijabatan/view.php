<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Refposisijabatan */

$this->title = $model->IdPosisiJabatan;
$this->params['breadcrumbs'][] = ['label' => 'Referensi Posisi Jabatan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="refposisijabatan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->IdPosisiJabatan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->IdPosisiJabatan], [
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
            'IdPosisiJabatan',
            'KodePosisiJabatan',
            'LevelPosisiJabatan',
            'UrutanPosisiJabatan',
            'NamaPosisiJabatan',
            'KeteranganPosisiJabatan',
        ],
    ]) ?>

</div>
