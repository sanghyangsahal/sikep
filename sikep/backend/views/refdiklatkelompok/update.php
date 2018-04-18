<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Refdiklatkelompok */

$this->title = 'Update Referensi Diklat Kelompok: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Diklat Kelompok', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idKelompokDiklat, 'url' => ['view', 'id' => $model->idKelompokDiklat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="refdiklatkelompok-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
