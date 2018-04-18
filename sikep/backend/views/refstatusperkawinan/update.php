<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\RefStatusperkawinan */

$this->title = 'Update Referensi Status Perkawinan : {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Ref Statusperkawinans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idStatusKawin, 'url' => ['view', 'id' => $model->idStatusKawin]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ref-statusperkawinan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
