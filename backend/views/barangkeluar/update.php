<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Barangkeluar */

$this->title = 'Update [Penjualan]';
$this->params['breadcrumbs'][] = ['label' => 'Barang keluar', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_barang, 'url' => ['view', 'id' => $model->id_barang]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="barangkeluar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
