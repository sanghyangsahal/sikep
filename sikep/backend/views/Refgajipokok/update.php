<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\ReferensiGajiPokok */

$this->title = 'Update Referensi Gaji Pokok: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Gaji Pokok', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idGajiPokok, 'url' => ['view', 'id' => $model->idGajiPokok]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="referensi-gaji-pokok-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
