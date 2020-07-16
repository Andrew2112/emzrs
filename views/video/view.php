<?php

use yii\helpers\Html;

?>
<div class="container">
    <div class="row mb-5 justify-content-center">
        <div class="col-12 text-center">
            <h2 class="font-weight-light text-black display-4">Ремонт и работа выключателей</h2>
        </div>
        <div class="col-md-7 text-center">

            <p>В данном разделе представлены видео по ремонту воздушных выключателей, а так же видео, где показана
                работа воздушных выключателей на ПС.</p>
        </div>
    </div>

    <div class="row">
        <?php if (!empty($videos)): ?>
            <?php foreach ($videos as $video): ?>
                <div class="col-md-6 mb-4">
                    <div class="post-entry bg-white">
                    </div>
                    <div class="image">
                        <?= $video->link; ?>
                    </div>
                    <div class="text p-4">
                        <h2 class="h5 text-black text-center"><?= $video->title; ?></h2>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>

</div>


