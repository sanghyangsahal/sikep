<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Refjurusan */

$this->title = $model->IdJurusan;
$this->params['breadcrumbs'][] = ['label' => 'Referensi Jurusan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="refjurusan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->IdJurusan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->IdJurusan], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'IdJurusan',
            'KodeJurusan',
            'NamaJurusan',
            'idTingkatPendidikan',
        ],
    ]) ?>

</div>
