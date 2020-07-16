<?php

use yii\helpers\Html;
use yii\widgets\LinkPager;

?>

<div class="site-blocks-cover inner-page overlay" style="background-image: url(/images/<?=$category->img_bg?>);" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center">
                <h1 class="mb-5"><?=$category->name_bg?></h1>
            </div>
        </div>
    </div>
</div>

<div class="site-section">
    <div class="container">
        <div class="row mb-5 justify-content-center">
            <div class="col-9 text-center">
                <h2 class="font-weight-light text-black display-4"><?=$category->title?></h2>
            </div>
            <div class="col-md-10">
                <p><?=$category->content?></p>
            </div>
        </div>
        <div class="row mb-5 list">
            <?php if(!empty($products)): ?>
                <?php foreach($products as $product): ?>
            <div class="col-md-4 col-lg-3 mb-4 list_item">
                <div class="post-entry bg-white">
                    <div class="image">
                        <?=Html::img("/{$product->img}", ['alt'=>"Image", 'class'=>"img-fluid"]) ; ?>

                    </div>
                    <div class="text p-4">
                        <h2 class="h5 text-black text-center"><?=$product->title?></h2>
<!--                        <span class="text-uppercase date d-block mb-3"><small>By Colorlib &bullet; Sep 25, 2018</small></span>-->
<!--                        <p class="mb-0">--><?//=$product->content?><!--</p>-->
                    </div>
                </div>
            </div>
            <?php endforeach;?>
        </div>
            <div class="row">
                <div class="col-md-12 pagination-page ">

                        <?php
                        echo LinkPager::widget([
                            'pagination' => $pages,
                        ]);
                        ?>


                </div>
            </div>


            <?php else: ?>
            Здесь пока нет карточки
            <?php endif; ?>




    </div>
</div>

