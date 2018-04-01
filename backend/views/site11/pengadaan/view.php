<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Pengadaan */

$this->title = $model->id_pengadaan;
$this->params['breadcrumbs'][] = ['label' => 'Pengadaans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pengadaan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_pengadaan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_pengadaan], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?php  if (Yii::$app->user->identity->isPemilik){?>
        <?= Html::a('Proses', ['proses', 'id' => $model->id_pengadaan], [
          'class' => 'btn btn-primary',
          /*'visible'=>
                (yii::$app->user->identity->isPemilik),*/
          'data' => [
              'confirm' => 'Proses pengadaan barang ini?',
              'method' => 'post',
            ],
          ]) ?>
      <?php }?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_pengadaan',
            'pengadaan.nama_barang',
            'jumlah_barang',
            'Tanggal',
            'pengadaan.harga',
            'Keterangan',
            'status_pengadaan',
        ],
    ]) ?>

</div>
