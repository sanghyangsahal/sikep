<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Refjenisdiklatteknis */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="refjenisdiklatteknis-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'IdDiklatKelompok')->textInput() ?>

    <?= $form->field($model, 'IdDiklatSektor')->textInput() ?>

    <?= $form->field($model, 'NamaJenisDiklatTeknis')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
