<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Refagama */

$this->title = 'Update Referensi Agama: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Agama', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idAgama, 'url' => ['view', 'id' => $model->idAgama]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="refagama-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
