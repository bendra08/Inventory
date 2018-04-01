<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'AHASS-MOTOR SARIJADI',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']],
        ['label' => 'Supplier', 'url' => ['/supplier/index']],

                    [
                    'label'=> 'Barang',
                    'items' => [
                      ['label' => 'Stok Barang', 'url' => ['/barang/index']],
                     ['label' => 'Barang Masuk', 'url' => ['/barangmasuk/index']],
                    ['label' => 'Barang Keluar', 'url' => ['/barangkeluar/index']], 
                     ['label' => 'Stok Minimum', 'url' => ['/stokminimum/index']], 
                    ],
                    ],

        ['label' => 'Pengadaan Barang', 'url' => ['/pengadaan/index']],
          
      
            [
            'label' => 'Pelayanan Servis',
            'items' => [
               
                 ['label' => 'Pelayanan Servis', 'url' => ['/pemesanan']],
                 ['label' => 'Paket', 'url' => ['/paket']],
                 
            ],
        ],

        [
            'label' => 'Bank',
            'items' => [
               
                 ['label' => 'Bank', 'url' => ['/bank']],
                 ['label' => 'Transfer', 'url' => ['/tf']],
                 ['label' => 'Cradit', 'url' => ['/cradit']],
                 ['label' => 'Nasabah', 'url' => ['/nasabah']],
            ],
        ],
    ];

    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
      <p class="pull-left">&copy; PENGADAAN & PELAYANAN <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>



  