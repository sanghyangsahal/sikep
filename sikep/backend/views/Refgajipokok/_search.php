<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\RefgajipokokSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="referensi-gaji-pokok-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idGajiPokok') ?>

    <?= $form->field($model, 'Tahun') ?>

    <?= $form->field($model, 'idGolonganRuang') ?>

    <?= $form->field($model, 'Golongan') ?>

    <?= $form->field($model, 'MasaKerja') ?>

    <?php // echo $form->field($model, 'GajiPokok') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
