<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Paket */

$this->title = 'Pembayaran via Transfer';
$this->params['breadcrumbs'][] = ['label' => 'Transfer', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="paket-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('PembayaranTransfer', [
        'model' => $model,
    ]) ?>

</div>
