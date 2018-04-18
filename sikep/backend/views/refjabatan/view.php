<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Referensi Jabatan */

$this->title = $model->IdNamaJabatan;
$this->params['breadcrumbs'][] = ['label' => 'Referensi Jabatan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="refjabatan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->IdNamaJabatan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->IdNamaJabatan], [
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
            'IdNamaJabatan',
            'UrutanJabatan',
            'IdPosisiJabatan',
            'NamaJabatan',
            'SingkatanNamaJabatan',
            'KeteranganNamaJabatan',
            'UsiaPensiunJabatan',
            'MinimumAngaKreditJabatan',
        ],
    ]) ?>

</div>
