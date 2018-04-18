<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Refpendidikanmiliter */

$this->title = 'Create Referensi Pendidikan Militer';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Pendidikan Militer', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="refpendidikanmiliter-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
