<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Reffungsionalstatus */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reffungsionalstatus-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'NamaRefFungsionalStatus')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
