<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Refpendidikanmiliter */

$this->title = 'Update Refpendidikanmiliter: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Pendidikan Militer', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idPendidikanMilter, 'url' => ['view', 'id' => $model->idPendidikanMilter]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="refpendidikanmiliter-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
