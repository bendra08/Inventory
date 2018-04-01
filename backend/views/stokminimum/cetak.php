<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\PemesananSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Stok Minimum Sparepart';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stokminimum-index">

    <h1><?= Html::encode($this->title) ?></h1>
      <?= Html::a('CETAK LAPORAN', ['report'], ['class' => 'btn btn-primary']) ?>

 <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
              'kode_barang',
              'nama_barang',
              'stok_barang',
              'satuan',
              'harga',
              'kategori_barang',
            ['class' => 'yii\grid\ActionColumn'
                ],

        ],
    ]); ?>
</div>
