<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\RefuniversitasSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="referensi-universitas-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idUniversitas') ?>

    <?= $form->field($model, 'IdTingkatPendidikan') ?>

    <?= $form->field($model, 'IdNegara') ?>

    <?= $form->field($model, 'KodeUniversitas') ?>

    <?= $form->field($model, 'NamaUniversitas') ?>

    <?php // echo $form->field($model, 'DeskripsiUniversitas') ?>

    <?php // echo $form->field($model, 'SingkatanUniversitas') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
