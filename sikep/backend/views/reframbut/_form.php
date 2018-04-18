<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Reframbut */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reframbut-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'NamaJenisRambut')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
