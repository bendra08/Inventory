<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Barangmasuk */

$this->title = 'Tambah Barang Masuk';
$this->params['breadcrumbs'][] = ['label' => 'Barang Masuk', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="barangmasuk-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>S
