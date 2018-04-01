<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Proses */

$this->title = 'Update Barangmasuk';
$this->params['breadcrumbs'][] = ['label' => 'Proses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_pengadaan, 'url' => ['view', 'id' => $model->id_pengadaan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="proses-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
