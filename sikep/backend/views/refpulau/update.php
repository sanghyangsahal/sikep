<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Referensi Pulau */

$this->title = 'Update Referensi Pulau ';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Pulau', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdPulau, 'url' => ['view', 'id' => $model->IdPulau]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="refpulau-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
