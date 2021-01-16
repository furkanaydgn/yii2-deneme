
<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model furkanaydgn\deneme\models\KullaniciSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kullanici-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'uid') ?>

    <?= $form->field($model, 'userssim') ?>

    <?= $form->field($model, 'useroyisim') ?>

    <?= $form->field($model, 'useryas') ?>

    <?= $form->field($model, 'usercinsiyet') ?>

    <?php // echo $form->field($model, 'fid') ?>

    <?php // echo $form->field($model, 'biletsayisi') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>