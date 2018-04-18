<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\ReftingkatpendidikanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reftingkatpendidikan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'IdRefTingkatPendidikan') ?>

    <?= $form->field($model, 'UrutanTingkatPendidikan') ?>

    <?= $form->field($model, 'KodeTingkatPendidikan') ?>

    <?= $form->field($model, 'NamaTingkatPendidikan') ?>

    <?= $form->field($model, 'DeskripsiTingkatPendidikan') ?>

    <?php // echo $form->field($model, 'IdPangkatGolonganTingkatanPendidikan') ?>

    <?php // echo $form->field($model, 'GolonganMulaiTingkatPendidikan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
