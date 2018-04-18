<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\ReferensiUniversitas */

$this->title = $model->idUniversitas;
$this->params['breadcrumbs'][] = ['label' => 'Referensi Universitas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="referensi-universitas-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idUniversitas], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idUniversitas], [
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
            'idUniversitas',
            'IdTingkatPendidikan',
            'IdNegara',
            'KodeUniversitas',
            'NamaUniversitas',
            'DeskripsiUniversitas',
            'SingkatanUniversitas',
        ],
    ]) ?>

</div>
