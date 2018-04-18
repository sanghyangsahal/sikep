<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Refkppn */

$this->title = 'Create Referensi KPPN';
$this->params['breadcrumbs'][] = ['label' => 'Referensi KPPN', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="refkppn-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
