<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\BarangmasukSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Laporan Sparepart Masuk';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="Barangmasuk-index">

    <h1><?= Html::encode($this->title) ?></h1>
      <?= Html::a('CETAK LAPORAN', ['report'], ['class' => 'btn btn-primary']) ?>

 <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'kodeBarang.nama_barang',
            'supplier.nama_supplier',
            'tanggal_masuk',
            'jumlah_barang',
            'kodeBarang.satuan',
            'kodeBarang.harga',
            'total_harga',
            ['class' => 'yii\grid\ActionColumn'
                ],

        ],
    ]); ?>
</div>
