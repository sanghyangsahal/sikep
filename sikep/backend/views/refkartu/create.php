<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Referensi Kartu */

$this->title = 'Create Referensi Kartu';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Kartu', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="refkartu-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
