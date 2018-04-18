<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Refdiklatperjenjangan */

$this->title = $model->idDiklatPerjenjangan;
$this->params['breadcrumbs'][] = ['label' => 'Referensi Diklat Penjenjangan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="refdiklatperjenjangan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idDiklatPerjenjangan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idDiklatPerjenjangan], [
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
            'idDiklatPerjenjangan',
            'levelDiklatPerjenjangan',
            'namaDiklatPerjenjangan',
        ],
    ]) ?>

</div>
