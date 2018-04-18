<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Referensi Lokasi */

$this->title = $model->IdLokasi;
$this->params['breadcrumbs'][] = ['label' => 'Referensi Lokasi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reflokasi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->IdLokasi], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->IdLokasi], [
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
            'IdLokasi',
            'NamaLokasi',
        ],
    ]) ?>

</div>
