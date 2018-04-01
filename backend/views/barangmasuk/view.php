<?php

use yii\helpers\Html;
use yii\widgets\DetailView;


/* @var $this yii\web\View */
/* @var $model backend\models\Barangmasuk */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Barang masuk', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="barangmasuk-view">

    <h1><?= Html::encode($this->title) ?></h1>
  <?= Html::a('CETAK LAPORAN', ['report'], ['class' => 'btn btn-primary']) ?>
    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            'id',
            'kode_barang',
            'kodeBarang.nama_barang',
            'supplier.nama_supplier',
            'tanggal_masuk',
            'jumlah_barang',
            'kodeBarang.satuan',
            'kodeBarang.harga',
            'total_harga',

        ],
    ]) ?>

</div>
