<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Refdiklatperjenjangan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="refdiklatperjenjangan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'levelDiklatPerjenjangan')->textInput() ?>

    <?= $form->field($model, 'namaDiklatPerjenjangan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
