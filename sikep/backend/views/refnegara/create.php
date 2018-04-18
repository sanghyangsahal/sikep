<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Refnegara */

$this->title = 'Create Referensi Negara';
$this->params['breadcrumbs'][] = ['label' => 'Refnegaras', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="refnegara-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
