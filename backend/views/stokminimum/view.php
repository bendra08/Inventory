<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Stokminimum */

$this->title = $model->kode_barang;
$this->params['breadcrumbs'][] = ['label' => 'Stokminimum', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stokminimum-view">

    <h1><?= Html::encode($this->title) ?></h1>
    <?= Html::a('CETAK LAPORAN', ['report'], ['class' => 'btn btn-primary']) ?>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->kode_barang], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->kode_barang], [
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
            'kode_barang',
            'nama_barang',
            'stok_barang',
            'satuan',
            'harga',
            'kategori_barang',
        ],
    ]) ?>

</div>
