<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Refgolonganruang */

$this->title = $model->idGolonganRuang;
$this->params['breadcrumbs'][] = ['label' => 'Referensi Golongan Ruang', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="refgolonganruang-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idGolonganRuang], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idGolonganRuang], [
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
            'idGolonganRuang',
            'UrutanGolonganRuang',
            'KodeGolonganRuang',
            'NamaGolongan',
            'Golongan',
            'Ruang',
            'idFormatBKN',
            'idTingkatPendidikanMinimal',
        ],
    ]) ?>

</div>
