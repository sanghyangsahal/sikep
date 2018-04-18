<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Refnegara */

$this->title = 'Update Referensi Negara: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Refnegaras', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdNegara, 'url' => ['view', 'id' => $model->IdNegara]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="refnegara-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
