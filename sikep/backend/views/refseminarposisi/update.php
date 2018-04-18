<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Refseminarposisi */

$this->title = 'Update Refseminarposisi: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Seminar Posisi', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdSeminarPosisi, 'url' => ['view', 'id' => $model->IdSeminarPosisi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="refseminarposisi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
