<aside class="main-sidebar">
    <section class="sidebar">
        <!-- Sidbar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Admin</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii']],
                    ['label' => 'Pre Tests', 'icon' => 'file-code-o', 'url' => ['/pre-tests']],
                    ['label' => 'Drag Tests', 'icon' => 'file-code-o', 'url' => ['/drag-tests']],
                    ['label' => 'Choose Tests', 'icon' => 'file-code-o', 'url' => ['/choose-tests']],
                ],
            ]
        ) ?>

    </section>

</aside>
