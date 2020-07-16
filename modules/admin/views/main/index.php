<?php
$this->title = 'Панель администратора';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-lg-3 col-6">
        <!-- small card -->
        <div class="small-box bg-info">
            <div class="inner">
                <h3><?=$category ; ?></h3>

                <p>Марки выключателей</p>
            </div>
            <div class="icon">
                <i class="fas fa-bolt"></i>
            </div>
            <a href="<?=\yii\helpers\Url::to(['category/index'])?>" class="small-box-footer">
                Подробнее <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small card -->
        <div class="small-box bg-success">
            <div class="inner">
                <h3><?=$product ; ?></h3>

                <p>Фото запчастей</p>
            </div>
            <div class="icon">
                <i class="fas fa-cogs"></i>
            </div>
            <a href="<?=\yii\helpers\Url::to(['product/index'])?>" class="small-box-footer">
                Подробнее <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    <!-- ./col -->
  
</div>