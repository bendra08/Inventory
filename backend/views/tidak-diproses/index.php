<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TidakDiprosesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Barang Tidak Di Proses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tidak-diproses-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

          'pengadaan.nama_barang',
            'jumlah_barang',
            'Tanggal',
            'Keterangan',
            'status_pengadaan',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
