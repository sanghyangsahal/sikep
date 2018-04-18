<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Refgolongandarah */

$this->title = 'Create Referensi Golongan Darah';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Golongan Darah', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="refgolongandarah-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
