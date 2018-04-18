<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Reftingkatpendidikan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reftingkatpendidikan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'UrutanTingkatPendidikan')->textInput() ?>

    <?= $form->field($model, 'KodeTingkatPendidikan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NamaTingkatPendidikan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DeskripsiTingkatPendidikan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'IdPangkatGolonganTingkatanPendidikan')->textInput() ?>

    <?= $form->field($model, 'GolonganMulaiTingkatPendidikan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
