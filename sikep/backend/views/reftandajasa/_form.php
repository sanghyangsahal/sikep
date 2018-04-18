<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Reftandajasa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reftandajasa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'NamaTandaJasa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'LembagaPemberiTandaJasa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'StatusTandaJasa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'JenisTandaJasa')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
