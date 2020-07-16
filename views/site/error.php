<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>

<div class="site-blocks-cover inner-page overlay" style="background-image: url(/images/404.png);" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center">
                <h1 class="mb-5">  <?= nl2br(Html::encode($message)) ?></h1>
            </div>
        </div>
    </div>
</div>




