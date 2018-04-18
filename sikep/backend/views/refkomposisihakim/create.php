<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Refkomposisihakim */

$this->title = 'Create Referensi Komposisi Hakim';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Komposisi Hakim', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="refkomposisihakim-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
