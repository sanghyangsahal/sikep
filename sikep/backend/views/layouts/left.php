<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii']],
                    ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug']],
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    ['label' => 'Referensi',
                        'icon' => 'tools',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Agama', 'icon' => 'moon-o', 'url' => ['/refagama/index'],],
                            ['label' => 'Alasan Pensiun', 'icon' => 'user', 'url' => ['/refalasanpensiun/index'],],
                            ['label' => 'Bentuk Muka', 'icon' => 'user', 'url' => ['/refbentukmuka/index'],],
                            ['label' => 'Biaya Transport Mutasi', 'icon' => 'user', 'url' => ['/refbiayatransportmutasi/index'],],
                            ['label' => 'Diklat Fungsional', 'icon' => 'user', 'url' => ['/refdiklatfungsional/index'],],
                            ['label' => 'Diklat Kelompok', 'icon' => 'user', 'url' => ['/refdiklatkelompok/index'],],
                            ['label' => 'Diklat Kualifikasi Kelulusan', 'icon' => 'user', 'url' => ['/refdiklatkualifikasikelulusan/index'],],
                        ],
                    ],
                    ['label' => 'Komponen', 'icon' => 'file-code-o', 'url' => ['/komponen/index']],
                ],
            ]
        ) ?>

    </section>

</aside>
