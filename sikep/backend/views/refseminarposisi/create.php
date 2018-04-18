<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Refseminarposisi */

$this->title = 'Create Referensi Seminar Posisi';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Seminar Posisi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="refseminarposisi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
