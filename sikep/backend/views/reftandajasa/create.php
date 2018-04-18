<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Reftandajasa */

$this->title = 'Create Referensi Tanda Jasa';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Tanda Jasa', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reftandajasa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
