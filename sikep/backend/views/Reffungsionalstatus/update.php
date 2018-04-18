<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Reffungsionalstatus */

//$this->title = 'Update Reffungsionalstatus: {nameAttribute}';
$this->title = 'Update Referensi Fungsional Status';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Fungsional Status', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idRefFungsionalStatus, 'url' => ['view', 'id' => $model->idRefFungsionalStatus]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="reffungsionalstatus-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
