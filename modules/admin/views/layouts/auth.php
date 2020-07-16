<?php

/* @var $this \yii\web\View */

/* @var $content string */
use yii\helpers\Html;

use app\assets\AuthAsset;
AuthAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <base href="/adminlte/">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/web/images/favicon.ico" type="image/x-icon">

</head>
<body class="hold-transition login-page">
<?php $this->beginBody() ?>
<?//=Yii::$app->getSecurity()->generatePasswordHash('123'); ; ?>
<?=$content ; ?>

<!-- /.login-box -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

