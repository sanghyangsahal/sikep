<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Refagama */

$this->title = 'Create Referensi Agama';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Agama', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="refagama-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
