<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Tf */

$this->title = $model->id_servis;
$this->params['breadcrumbs'][] = ['label' => 'Transfer', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tf-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_servis], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_servis], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_servis',
            'keterangan',
              [
                'label' => 'bukti_transfer',
                'value' => Html::img(Yii::getAlias('@imageurl')."/transfer/".$model->bukti_transfer, ['width' => '300px']),
                'format' => 'raw'
            ],

            'nominal',
        ],
    ]) ?>

</div>
