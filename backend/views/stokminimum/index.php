<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\StokminimumSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Barang minimum';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stokminimum-index">

    
    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
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
