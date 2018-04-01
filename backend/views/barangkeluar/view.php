<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Barangkeluar */

$this->title = $model->id_barang;
$this->params['breadcrumbs'][] = ['label' => 'Barang keluar', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="barangkeluar-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_barang], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_barang], [
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
            'id_barang',
            'kodeBarang.nama_barang',
            'Jumlah',
            'kodeBarang.harga',
            'total_harga',
            'Tanggal',
            'Keterangan',
            'kode_barang',
        ],
    ]) ?>

</div>
