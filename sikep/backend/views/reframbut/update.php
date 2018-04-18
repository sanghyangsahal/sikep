<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Reframbut */

$this->title = 'Update Referensi Rambut: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Reframbuts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdJenisRambut, 'url' => ['view', 'id' => $model->IdJenisRambut]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="reframbut-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
