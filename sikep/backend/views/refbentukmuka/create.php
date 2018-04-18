<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Referensi Bentuk Muka */

$this->title = 'Create Referensi Bentuk Muka';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Bentuk Muka', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="refbentukmuka-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
