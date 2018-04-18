<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Referensi JabatanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="refjabatan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'IdNamaJabatan') ?>

    <?= $form->field($model, 'UrutanJabatan') ?>

    <?= $form->field($model, 'IdPosisiJabatan') ?>

    <?= $form->field($model, 'NamaJabatan') ?>

    <?= $form->field($model, 'SingkatanNamaJabatan') ?>

    <?php // echo $form->field($model, 'KeteranganNamaJabatan') ?>

    <?php // echo $form->field($model, 'UsiaPensiunJabatan') ?>

    <?php // echo $form->field($model, 'MinimumAngaKreditJabatan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
