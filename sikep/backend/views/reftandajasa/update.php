<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Reftandajasa */

$this->title = 'Update Reftandajasa: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Tanda Jasa', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdTandaJasa, 'url' => ['view', 'id' => $model->IdTandaJasa]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="reftandajasa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
