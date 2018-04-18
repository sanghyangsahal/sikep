<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Refgolonganruangmiliter */

$this->title = 'Update Referensi Golongan Ruang Militer: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Golongan Ruang Militer', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdPangkatMiliter, 'url' => ['view', 'id' => $model->IdPangkatMiliter]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="refgolonganruangmiliter-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
