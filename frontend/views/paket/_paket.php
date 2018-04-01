<?php
use yii\helpers\Html;
use yii\helpers\Markdown;
?>
<?php /** @var $model \common\models\Product */ ?>
<style type="text/css">
    .image-new {
        height: 150px;
        width: 200px;
    }
    .padding-anyar {
        padding-top: 20px;
    }
</style>
<div class="col-lg-4">
<center>
<div class="thumbnail shadow">
    <div class="padding-anyar">
    <p>
        <h5><b><?= Html::encode($model->jenis_paket) ?></b></h5>
        <h5><b><?= Html::encode($model->harga) ?></b></h5>
        
        <div class="row">
                <p>
                <center>
                    <p><?= Html::a('<span class="glyphicon glyphicon-eye-open"></span> Lihat Detail Paket' , ['view', 'id' => $model->id_paket], ['class' => 'btn btn-primary']);?></p>
                    <p><?= Html::a('<span class="glyphicon glyphicon-eye-open"></span> Pesan Paket' , ['pemesanan/create', 'id' => $model->id_paket], ['class' => 'btn btn-primary']);?></p>
                </center>
                </p>
        </div>
    </p>
    </div>
    </div>
    </center>
</div>