<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Reffungsionalperjenjangan */

$this->title = 'Create Referensi Fungsional Perjenjangan';
$this->params['breadcrumbs'][] = ['label' => 'Reffungsionalperjenjangan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reffungsionalperjenjangan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
