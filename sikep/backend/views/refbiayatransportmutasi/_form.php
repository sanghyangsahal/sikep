<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Refbiayatransportmutasi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="refbiayatransportmutasi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'KodeSatkerAsalMutasi')->textInput() ?>

    <?= $form->field($model, 'KodeSatkerTujuanMutasi')->textInput() ?>

    <?= $form->field($model, 'BiayaDaratTrasnportMutasi')->textInput() ?>

    <?= $form->field($model, 'BiayaLautTrasnportMutasi')->textInput() ?>

    <?= $form->field($model, 'UangHarianIiiMutasi')->textInput() ?>

    <?= $form->field($model, 'UangHarianViMutasi')->textInput() ?>

    <?= $form->field($model, 'JarakJarakTrasnportMutasi')->textInput() ?>

    <?= $form->field($model, 'TIketTransportMutasi')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
