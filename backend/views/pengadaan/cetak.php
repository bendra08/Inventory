<?php

use yii\helpers\Html;
use yii\grid\GridView;

$this->params['breadcrumbs'][] = $this->title;
?>
<div class="beli-barang-index">

    <h1><?= Html::encode($this->title) ?></h1>
      <?= Html::a('CETAK LAPORAN', ['report'], ['class' => 'btn btn-primary']) ?>

 <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'pengadaan.nama_barang',
            'jumlah_barang',
            'Tanggal',
            'pengadaan.harga',
            'Keterangan',
            'status_pengadaan',
            ['class' => 'yii\grid\ActionColumn'
                ],

        ],
    ]); ?>
</div>
