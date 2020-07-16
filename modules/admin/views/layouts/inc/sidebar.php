<?php ;

use yii\helpers\Html;
?>
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <?php $logo = Yii::$app->user->identity->avatar; ?>
            <?= Html::img("/web/images/{$logo}", ['alt' => 'Наш логотип', 'class' => 'img-circle elevation-2']); ?>

        </div>
        <div class="info">
            <p style="color: #fff"><?= Yii::$app->user->identity->username; ?></p>
        </div>
        <div class="info">
            <a href="<?= \yii\helpers\Url::to(['auth/logout']) ?>" class="d-block"> Выход</a>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
            data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview menu-open">
                <a href="<?=\yii\helpers\Url::to(['main/index'])?>" class="nav-link active">
                    <i class="fas fa-chart-bar"></i>
                    <p>
                        Панель управления
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="<?=\yii\helpers\Url::to(['category/index'])?>" class="nav-link active">
                            <i class="fas fa-cubes"></i>
                            <p>Категории</p>
                            <i class="right fas fa-angle-left"></i>
                        </a>
                        <ul class="nav nav-treeview">
                            <li><a href="<?=\yii\helpers\Url::to(['category/index'])?>"><p>Список категорий</p></a></li>
                            <li><a href="<?=\yii\helpers\Url::to(['category/create'])?>"><p>Добавить категорию</p></a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="<?=\yii\helpers\Url::to(['product/index'])?>" class="nav-link">
                            <i class="fas fa-cogs nav-icon"></i>
                            <p>Запасные части</p>
                            <i class="right fas fa-angle-left"></i>
                        </a>
                        <ul class="nav nav-treeview">
                            <li><a href="<?=\yii\helpers\Url::to(['product/index'])?>"><p>Список запчастей</p></a></li>
                            <li><a href="<?=\yii\helpers\Url::to(['product/create'])?>"><p>Добавить запчасть</p></a></li>
                        </ul>
                    </li>
                </ul>
            </li>

        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
