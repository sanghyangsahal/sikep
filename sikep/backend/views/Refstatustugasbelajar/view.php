<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\ReferensiStatusTugasBelajar */

$this->title = $model->IdStatusTugasBelajar;
$this->params['breadcrumbs'][] = ['label' => 'Referensi Status Tugas Belajar', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="referensi-status-tugas-belajar-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->IdStatusTugasBelajar], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->IdStatusTugasBelajar], [
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
            'IdStatusTugasBelajar',
            'NamaStatusTugasBelajar',
        ],
    ]) ?>

</div>
