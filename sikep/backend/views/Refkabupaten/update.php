<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\ReferensiKabupaten */

$this->title = 'Update Referensi Kabupaten: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Kabupaten', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idKabupaten, 'url' => ['view', 'id' => $model->idKabupaten]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="referensi-kabupaten-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
