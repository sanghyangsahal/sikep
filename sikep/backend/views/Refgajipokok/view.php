<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\ReferensiGajiPokok */

$this->title = $model->idGajiPokok;
$this->params['breadcrumbs'][] = ['label' => 'Referensi Gaji Pokok', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="referensi-gaji-pokok-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idGajiPokok], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idGajiPokok], [
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
            'idGajiPokok',
            'Tahun',
            'idGolonganRuang',
            'Golongan',
            'MasaKerja',
            'GajiPokok',
        ],
    ]) ?>

</div>
