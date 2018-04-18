<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Refjeniscuti */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="refjeniscuti-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'NamaJenisCuti')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
