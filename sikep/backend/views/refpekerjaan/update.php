<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Refpekerjaan */

$this->title = 'Update Referensi Pekerjaan: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Pekerjaan', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdPekerjaan, 'url' => ['view', 'id' => $model->IdPekerjaan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tref-pekerjaan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
