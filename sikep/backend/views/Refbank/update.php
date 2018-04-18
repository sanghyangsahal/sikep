<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\ReferensiBank */

$this->title = 'Update Referensi Bank: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Bank', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdBank, 'url' => ['view', 'id' => $model->IdBank]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="referensi-bank-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
