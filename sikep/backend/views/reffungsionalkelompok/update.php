<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Reffungsionalkelompok */

$this->title = 'Update Referensi Fungsional Kelompok: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Fungsional Kelompok', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdFungsionalKelompok, 'url' => ['view', 'id' => $model->IdFungsionalKelompok]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="reffungsionalkelompok-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
