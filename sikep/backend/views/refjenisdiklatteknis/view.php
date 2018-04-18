<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Refjenisdiklatteknis */

$this->title = $model->IdJenisDiklat;
$this->params['breadcrumbs'][] = ['label' => 'Referensi Jenis Diklat Teknis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="refjenisdiklatteknis-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->IdJenisDiklat], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->IdJenisDiklat], [
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
            'IdJenisDiklat',
            'IdDiklatKelompok',
            'IdDiklatSektor',
            'NamaJenisDiklatTeknis',
        ],
    ]) ?>

</div>
