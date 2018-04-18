<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Refdiklatkelompok */

$this->title = $model->idKelompokDiklat;
$this->params['breadcrumbs'][] = ['label' => 'Referensi Diklat Kelompok', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="refdiklatkelompok-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idKelompokDiklat], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idKelompokDiklat], [
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
            'idKelompokDiklat',
            'NamaKelompokDiklat',
        ],
    ]) ?>

</div>
