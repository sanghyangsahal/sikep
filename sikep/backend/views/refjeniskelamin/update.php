<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Refjeniskelamin */

$this->title = 'Update Referensi Jeniskelamin: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Jenis Kelamin', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idJenisKelamin, 'url' => ['view', 'id' => $model->idJenisKelamin]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tref-jeniskelamin-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
