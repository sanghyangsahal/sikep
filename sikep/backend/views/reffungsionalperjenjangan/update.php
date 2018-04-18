<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Reffungsionalperjenjangan */

$this->title = 'Update Referensi Fungsional Perjenjangan: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Fungsional Perjenjangan', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdRefFungsionalPerjenjangan, 'url' => ['view', 'id' => $model->IdRefFungsionalPerjenjangan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="reffungsionalperjenjangan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
