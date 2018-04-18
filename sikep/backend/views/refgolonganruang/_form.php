<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Refgolonganruang */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="refgolonganruang-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'UrutanGolonganRuang')->textInput() ?>

    <?= $form->field($model, 'KodeGolonganRuang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NamaGolongan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Golongan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Ruang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idFormatBKN')->textInput() ?>

    <?= $form->field($model, 'idTingkatPendidikanMinimal')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
