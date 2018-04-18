<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Refjurusan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="refjurusan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'KodeJurusan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NamaJurusan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idTingkatPendidikan')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
