<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RefAlasanpensiun */

//$this->title = 'Update Referensi Alasan Pensiun: {nameAttribute}';
$this->title = 'Update Referensi Alasan Pensiun: ';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Alasan Pensiun', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idAlasanPensiun, 'url' => ['view', 'id' => $model->idAlasanPensiun]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ref-alasanpensiun-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
