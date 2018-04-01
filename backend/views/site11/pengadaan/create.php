<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Pengadaan */

$this->title = 'Pengajuan Pengadaan';
$this->params['breadcrumbs'][] = ['label' => 'Pengadaan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pengadaan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
