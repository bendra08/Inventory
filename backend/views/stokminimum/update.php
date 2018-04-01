<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Stokminimum */

$this->title = 'Update Stokminimum: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Stokminimums', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_barang, 'url' => ['view', 'id' => $model->kode_barang]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="stokminimum-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
