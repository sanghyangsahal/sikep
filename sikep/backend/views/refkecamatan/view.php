<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Refkecamatan */

$this->title = $model->IdKecamatan;
$this->params['breadcrumbs'][] = ['label' => 'Refkecamatans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="refkecamatan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->IdKecamatan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->IdKecamatan], [
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
            'IdKecamatan',
            'NamaKecamatan',
            'idKabupaten',
        ],
    ]) ?>

</div>
