<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\RefAlasanpensiun */

$this->title = $model->idAlasanPensiun;
$this->params['breadcrumbs'][] = ['label' => 'Referensi Alasan Pensiun', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ref-alasanpensiun-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idAlasanPensiun], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idAlasanPensiun], [
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
            'idAlasanPensiun',
            'AlasanPensiun',
            'Keterangan',
        ],
    ]) ?>

</div>
