<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\RefgolonganruangSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="refgolonganruang-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idGolonganRuang') ?>

    <?= $form->field($model, 'UrutanGolonganRuang') ?>

    <?= $form->field($model, 'KodeGolonganRuang') ?>

    <?= $form->field($model, 'NamaGolongan') ?>

    <?= $form->field($model, 'Golongan') ?>

    <?php // echo $form->field($model, 'Ruang') ?>

    <?php // echo $form->field($model, 'idFormatBKN') ?>

    <?php // echo $form->field($model, 'idTingkatPendidikanMinimal') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
