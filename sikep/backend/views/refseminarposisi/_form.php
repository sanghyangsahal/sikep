<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Refseminarposisi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="refseminarposisi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'NamaSeminarPosisi')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
