<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Referensi Bentuk Muka */

$this->title = 'Update Referensi Bentuk Muka ';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Bentuk Muka', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idBentukMuka, 'url' => ['view', 'id' => $model->idBentukMuka]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="refbentukmuka-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
