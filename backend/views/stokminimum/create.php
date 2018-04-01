<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Stokminimum */

$this->title = 'Create Stokminimum';
$this->params['breadcrumbs'][] = ['label' => 'Stokminimums', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stokminimum-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
