<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\RefbiayatransportmutasiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="refbiayatransportmutasi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idBiayaTransport') ?>

    <?= $form->field($model, 'KodeSatkerAsalMutasi') ?>

    <?= $form->field($model, 'KodeSatkerTujuanMutasi') ?>

    <?= $form->field($model, 'BiayaDaratTrasnportMutasi') ?>

    <?= $form->field($model, 'BiayaLautTrasnportMutasi') ?>

    <?php // echo $form->field($model, 'UangHarianIiiMutasi') ?>

    <?php // echo $form->field($model, 'UangHarianViMutasi') ?>

    <?php // echo $form->field($model, 'JarakJarakTrasnportMutasi') ?>

    <?php // echo $form->field($model, 'TIketTransportMutasi') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
