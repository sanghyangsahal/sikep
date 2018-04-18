<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Refkomposisihakim */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="refkomposisihakim-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'KodeSatkerKomposisiHakim')->textInput() ?>

    <?= $form->field($model, 'MinimalJumlahKomposisiHakim')->textInput() ?>

    <?= $form->field($model, 'MaksimalJumlahKomposisiHakim')->textInput() ?>

    <?= $form->field($model, 'BalancingScoreKomposisiHakim')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
