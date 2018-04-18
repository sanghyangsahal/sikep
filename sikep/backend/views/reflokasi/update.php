<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Referensi Lokasi */

$this->title = 'Update Referensi Lokasi ';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Lokasi', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdLokasi, 'url' => ['view', 'id' => $model->IdLokasi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="reflokasi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
