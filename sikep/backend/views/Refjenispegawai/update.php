<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\ReferensiJenisPegawai */

$this->title = 'Update Referensi Jenis Pegawai: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Jenis Pegawai', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdJenisPegawai, 'url' => ['view', 'id' => $model->IdJenisPegawai]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="referensi-jenis-pegawai-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
