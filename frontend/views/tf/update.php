<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Tf */

$this->title = 'Update Bukti Transfer';
$this->params['breadcrumbs'][] = ['label' => 'Tfs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_servis, 'url' => ['view', 'id' => $model->id_servis]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tf-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
