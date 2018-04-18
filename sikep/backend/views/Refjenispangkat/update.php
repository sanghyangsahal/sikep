<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Refjenispangkat */

$this->title = 'Update Referensi Jenis Pangkat';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Jenis Pangkat', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdJenisPangkat, 'url' => ['view', 'id' => $model->IdJenisPangkat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="refjenispangkat-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
