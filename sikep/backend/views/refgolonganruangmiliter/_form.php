<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Refgolonganruangmiliter */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="refgolonganruangmiliter-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'JenisAngkatanMiliter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'JenjangMiliter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NamaPangkatMiliter')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
