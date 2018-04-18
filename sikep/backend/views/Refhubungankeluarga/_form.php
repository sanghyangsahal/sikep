<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Refhubungankeluarga */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="refhubungankeluarga-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'JenisHubunganKeluarga')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
