<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Button;
use yii\bootstrap\ButtonGroup;
use yii\bootstrap\ButtonDropdown;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\BarangmasukSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Barang Masuk';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="barangmasuk-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
 <span class="pull-right">
      <p><a class="btn btn-info" href="index.php?r=barangmasuk%2Findex">Home &raquo;</a></p>
    </span>

    <p>

        <?= ButtonDropdown::widget([
    'label' => 'Barang Masuk',
    'options' => ['class'=>'btn-danger', 'style'=>'margin-right:10px;'],
    'dropdown' => [
        'items' => [
            ['label' => 'TIDAK DIPROSES', 'url' => '/app/backend/web/index.php?r=tidak-diproses%2Findex'],
            ['label' => 'PROSES', 'url' => '/app/backend/web/index.php?r=proses%2Findex'],

        ],
    ],
])?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
        ],
    ]); ?>
</div>
