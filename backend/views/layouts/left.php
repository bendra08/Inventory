<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?=Yii::$app->user->identity->username?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
         /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Menu Pengadaan Barang', 'options' => ['class' => 'header']],
                    ['label' => Yii::t('app','Menu'), 'icon' => 'fa fa-dashboard', 'url' => ['/site/index']],

                  ['label' => 'Supplier', 'url' => ['/supplier/index']],

                    [
                    'label'=> 'Barang',
                    'items' => [
                      ['label' => 'Stok Barang', 'url' => ['/barang/index'],'visible'=>Yii::$app->user->identity->isAdmin],
                     ['label' => 'Barang Masuk', 'url' => ['/barangmasuk/index'],'visible'=>Yii::$app->user->identity->isAdmin],
                     ['label' => 'Stok Minimum', 'url' => ['/stokminimum/index'],'visible'=>Yii::$app->user->identity->isAdmin],

                    ],
                    ],

        ['label' => 'Pengadaan Barang', 'url' => ['/pengadaan/index'],'visible'=>Yii::$app->user->identity->isAdmin or Yii::$app->user->identity->isPemilik],
    ['label' => 'Penjualan', 'url' => ['/barangkeluar/index'],'visible'=>Yii::$app->user->identity->isAdmin],

    [
    'label' => 'Pelayanan Servis',
    'items' => [

         ['label' => 'Pelayanan Servis', 'url' => ['/pemesanan'],'visible'=>Yii::$app->user->identity->isAdmin],
         ['label' => 'Paket', 'url' => ['/paket'],'visible'=>Yii::$app->user->identity->isAdmin],

    ],
    ],

    [
    'label' => 'Bank',
    'items' => [

         ['label' => 'Bank', 'url' => ['/bank'],'visible'=>Yii::$app->user->identity->isAdmin],
         ['label' => 'Transfer', 'url' => ['/tf'],'visible'=>Yii::$app->user->identity->isAdmin],
         ['label' => 'Cradit', 'url' => ['/cradit'],'visible'=>Yii::$app->user->identity->isAdmin],
         ['label' => 'Nasabah', 'url' => ['/nasabah'],'visible'=>Yii::$app->user->identity->isAdmin],
    ],
    ],
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    [
                        'label' => 'Dev tools',
                        'icon' => 'share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii'],],
                            ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug'],],
                            [
                                'label' => 'Level One',
                                'icon' => 'circle-o',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'Level Two', 'icon' => 'circle-o', 'url' => '#',],
                                    [
                                        'label' => 'Level Two',
                                        'icon' => 'circle-o',
                                        'url' => '#',
                                        'items' => [
                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ]
        ) ?>

    </section>

</aside>
