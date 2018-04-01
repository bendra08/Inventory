<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Pemesanan */

$this->title = $model->id_pemesan;
$this->params['breadcrumbs'][] = ['label' => 'Pelayanan Servis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pemesanan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_pemesan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_pemesan], [
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
            'id_pemesan',
            'nama_pelanggan',
            'alamat_pelanggan',
            'email_pelanggan:email',
            'No_Tlp',
            'status',
            'paket_id',
            'paket.deskripsi',
            'tanggal',
        ],
    ]) ?>

        <right><?= Html::a('Download Bukti Servis', ['cetakpelayanan', 'id' => $model->id_pemesan], ['class' => 'btn btn-primary']); ?></center>

</div>
