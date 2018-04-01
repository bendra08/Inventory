<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PengadaanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pengadaan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pengadaan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Pengajuan Pengadaan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            
            'pengadaan.nama_barang',
            'jumlah_barang',
            'Tanggal',
            'pengadaan.harga',
            'status_pengadaan',
            //'Keterangan',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
