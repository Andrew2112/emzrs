<?php

use yii\helpers\Html;

?>

<div class="slide-one-item home-slider owl-carousel">

    <div class="site-blocks-cover overlay" style="background-image: url(/images/product-1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">
                <div class="col-md-10">
                    <h1 class="mb-5">Наша продукция</h1>

                </div>
            </div>
        </div>
    </div>

    <div class="site-blocks-cover overlay" style="background-image: url(/images/product-2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">
                <div class="col-md-10">
                    <h1 class="mb-5">Наша продукция</h1>

                </div>
            </div>
        </div>
    </div>
    <div class="site-blocks-cover overlay" style="background-image: url(/images/product-3.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">
                <div class="col-md-10">
                    <h1 class="mb-5">Наша продукция</h1>

                </div>
            </div>
        </div>
    </div>

</div>

</div>

<div class="site-section">

    <div class="container">
        <div class="row mb-5 justify-content-center">
            <div class="col-12 text-center">
                <h2 class="font-weight-light text-black display-4">Наша продукция</h2>
            </div>
            <div class="col-md-10 ">

                <p>Основная специализация ООО "Энергомехзавод ремонт и сервис" - изготовление и поставка запасных частей к воздушным выключателям серий <strong>ВВН, ВВШ, ВВБ(М), ВВД(М), ВВБК, ВВЭ, ВВУ, ВВП</strong>, генераторным выключателям <strong>ВВГ-20, КАГ-24</strong>, КРУЭ производства ОАО "Энергомеханический завод" типа <strong>ЯЭ-110, ЯЭ-220, ЯЭУ-220, ЯГК-110, ЯЭГ-220</strong>.</p>
                <p>В настоящее время мы производим весь перечень запасных частей необходимый для качественного проведения текущих, средних и капитальных ремонтов воздушных выключателей и КРУЭ.</p>
                    <p>ООО "Энергомехзавод ремонт и сервис" имеет большой опыт поставки производимой продукции на предприятия энергетического сектора России и стран ближнего зарубежья.</p>
            </div>
        </div>
        <div class="row no-gutters align-items-stretch h-100">
            <?php use yii\helpers\Url;

            if (!empty($categories)): ?>
                <?php $i=1; foreach ($categories as $category): ?>

                    <div class="col-lg-6">
                        <div class="row no-gutters align-items-stretch h-100 half-sm">
                            <div class="col-md-6 bg-image bg-sm-height <?php if ($i==3 || $i==4)  echo "order-md-2" ?>" style="background-image: url('/images/<?=$category->img?>');" data-aos="fade" data-aos-delay="0"></div>
                            <div class="col-md-6 bg-light text <?php if ($i==3 || $i==4)  echo "order-md-1" ?>">
                                <div class="p-4">
                                    <a href="<?=Url::to(['category/view', 'id'=>$category->id])?>"> <h2 class="h5 mb-3 text-black text-center line-height-sm"><?=$category->title?></h2></a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $i++; ?>
                <?php endforeach;?>
            <?php endif; ?>
        </div>
    </div>

</div>


