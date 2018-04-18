<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\ReferensiStatusTugasBelajar */

$this->title = 'Update Referensi Status Tugas Belajar: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Status Tugas Belajar', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdStatusTugasBelajar, 'url' => ['view', 'id' => $model->IdStatusTugasBelajar]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="referensi-status-tugas-belajar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
