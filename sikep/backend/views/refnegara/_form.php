<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Refnegara */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="refnegara-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'KodeNegara')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NamaNegara')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
