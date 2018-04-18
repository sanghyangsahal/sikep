<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Refstatusmasaorganisasi */

$this->title = 'Update Referensi Status Masa Organisasi';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Status Masa Organisasi', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IDStatusMasaOrganisasi, 'url' => ['view', 'id' => $model->IDStatusMasaOrganisasi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="refstatusmasaorganisasi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
