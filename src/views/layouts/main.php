
<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;

use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
use furkanaydgn\deneme\widgets\navbar;
use furkanaydgn\deneme\widgets\altbaslik;
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<style>
    .wrap
    {
        background-color:#42f5c8;

    }
</style>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
<?php
    echo navbar::widget([

        ]);
    ?>

    <div class="container">
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<?= altbaslik::widget([]); ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>