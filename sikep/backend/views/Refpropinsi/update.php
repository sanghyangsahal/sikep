<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\ReferensiPropinsi */

$this->title = 'Update Referensi Propinsi: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Propinsi', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdPropinsi, 'url' => ['view', 'id' => $model->IdPropinsi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="referensi-propinsi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
