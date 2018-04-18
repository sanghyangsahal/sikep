<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Refjurusan */

$this->title = 'Create Referensi Jurusan';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Jurusan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="refjurusan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
