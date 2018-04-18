<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Reftingkatpendidikan */

$this->title = $model->IdRefTingkatPendidikan;
$this->params['breadcrumbs'][] = ['label' => 'Referensi Tingkat Pendidikan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reftingkatpendidikan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->IdRefTingkatPendidikan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->IdRefTingkatPendidikan], [
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
            'IdRefTingkatPendidikan',
            'UrutanTingkatPendidikan',
            'KodeTingkatPendidikan',
            'NamaTingkatPendidikan',
            'DeskripsiTingkatPendidikan',
            'IdPangkatGolonganTingkatanPendidikan',
            'GolonganMulaiTingkatPendidikan',
        ],
    ]) ?>

</div>
