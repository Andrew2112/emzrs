<?php

use yii\helpers\Html;

?>



<div class="site-section">
    <div class="container">
        <div class="row mb-5 justify-content-center">
            <div class="col-12 text-center">
                <h2 class="font-weight-light text-black display-4">Оценка нашей работы</h2>
            </div>

        </div>
        <div class="row mb-5 justify-content-center">
            <div class="col-9 text-center">
<!--                <h2 class="font-weight-light text-black display-4">--><?//=$category->title?><!--</h2>-->
            </div>
            <div class="col-md-12 text-center">
                <p><?//=$category->content?></p>
            </div>
        </div>
        <div class="row mb-5">
            <?php if(!empty($otzyv)): ?>
                <?php foreach($otzyv as $item): ?>
                    <div class="col-md-4 col-lg-4 mb-4">
                        <div class="post-entry bg-white">
                            <div class="image">
                                <a href="/images/<?=$item->title_pdf?> "target="_blank"><?=Html::img("@web/images/{$item->title}",['class'=>"img-fluid",'alt' => 'Наш логотип','style'=>['max-width'=>'380px', 'max-height'=>'400px'] ]) ; ?></a>

                            </div>

                        </div>
                    </div>
                <?php endforeach;?>
            <?php else: ?>
                Здесь пока нет карточки
            <?php endif; ?>

        </div>


    </div>
</div>


