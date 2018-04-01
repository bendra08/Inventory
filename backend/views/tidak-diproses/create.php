<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\TidakDiproses */

$this->params['breadcrumbs'][] = ['label' => 'Tidak Diproses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tidak-diproses-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
