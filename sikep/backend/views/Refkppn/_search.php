<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\RefkppnSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="refkppn-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'IdKPPN') ?>

    <?= $form->field($model, 'KodeKPPN') ?>

    <?= $form->field($model, 'NamaKPPN') ?>

    <?= $form->field($model, 'KotaKPPN') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
