<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\RefposisijabatanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="refposisijabatan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'IdPosisiJabatan') ?>

    <?= $form->field($model, 'KodePosisiJabatan') ?>

    <?= $form->field($model, 'LevelPosisiJabatan') ?>

    <?= $form->field($model, 'UrutanPosisiJabatan') ?>

    <?= $form->field($model, 'NamaPosisiJabatan') ?>

    <?php // echo $form->field($model, 'KeteranganPosisiJabatan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
