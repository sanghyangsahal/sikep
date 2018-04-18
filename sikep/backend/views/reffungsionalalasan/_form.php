<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Reffungsionalalasan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reffungsionalalasan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'IdStatusFungsional')->textInput() ?>

    <?= $form->field($model, 'NamaRefFungsionalAlasan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
