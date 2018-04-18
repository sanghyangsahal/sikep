<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Referensi Gaji Tunjangan */

$this->title = 'Update Referensi Gaji Tunjangan ';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Gaji Tunjangan', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdRefGajiTunjangan, 'url' => ['view', 'id' => $model->IdRefGajiTunjangan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="refgajitunjangan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
