<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Refbiayatransportmutasi */

$this->title = $model->idBiayaTransport;
$this->params['breadcrumbs'][] = ['label' => 'Referensi Biaya Transport Mutasi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="refbiayatransportmutasi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idBiayaTransport], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idBiayaTransport], [
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
            'idBiayaTransport',
            'KodeSatkerAsalMutasi',
            'KodeSatkerTujuanMutasi',
            'BiayaDaratTrasnportMutasi',
            'BiayaLautTrasnportMutasi',
            'UangHarianIiiMutasi',
            'UangHarianViMutasi',
            'JarakJarakTrasnportMutasi',
            'TIketTransportMutasi',
        ],
    ]) ?>

</div>
