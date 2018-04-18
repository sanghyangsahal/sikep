<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Reffungsionalperjenjangan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reffungsionalperjenjangan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ParentIdRefFungsionalPerjenjangan')->textInput() ?>

    <?= $form->field($model, 'NamaFungsionalPerjenjangan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
