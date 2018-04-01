<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\BarangSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = ' Data Barang ';
$this->params['breadcrumbs']['Data Barang'] = $this->title;
?>
<div class="barang-index">


    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Tambah Barang', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nama_barang',
            'stok_barang',
            'satuan',
            'harga',
            'kategori_barang',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
