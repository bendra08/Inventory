<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Pemesanan */

$this->title = $model->id_pemesan;
$this->params['breadcrumbs'][] = ['label' => 'Pemesanans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pemesanan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <right><?php if ($model->status=='Belum Bayar') {
            echo Html::a('Bayar via Kartu Kredit', ['pembayarankredit', 'id' => $model->id_pemesan], ['class' => 'btn btn-primary']);
            } else {
                echo '';
                } ?></center>



            <?php
                echo Html::a('Bayar via Transfer' , ['tf/create'], ['class' => 'btn btn-primary']);
                ?>

    </p>







    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_pemesan',
            'nama_pelanggan',
            'plat',
            'alamat_pelanggan',
            'email_pelanggan:email',
            'No_Tlp',
            'status',
              [
                'label' => 'Jenis Paket',
                'value' => $model->paket->jenis_paket,
            ],
            'paket.deskripsi',
                'paket.harga',

            [
                'label' => 'Tanggal Servis',
                'value' => Yii::$app->formatter->asDate($model->tanggal, 'dd MMMM yyyy'),
            ],

        ],
    ]) ?>

    <right><?= Html::a('Download Bukti Servis', ['cetakpelayanan', 'id' => $model->id_pemesan], ['class' => 'btn btn-primary']); ?></center>

</div>
