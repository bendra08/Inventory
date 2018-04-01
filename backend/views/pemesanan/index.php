<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PemesananSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pelayanan Servis';
$this->params['breadcrumbs'][] = $this->title;
?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_pemesan',
            'nama_pelanggan',
            'alamat_pelanggan',
            'email_pelanggan:email',
            'No_Tlp',
            //'status',
            //'paket_id',
            //'tanggal',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
