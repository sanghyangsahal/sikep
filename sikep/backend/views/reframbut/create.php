<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Reframbut */

$this->title = 'Create Referensi Rambut';
$this->params['breadcrumbs'][] = ['label' => 'Reframbuts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reframbut-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
