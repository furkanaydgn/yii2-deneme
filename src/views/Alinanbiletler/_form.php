
<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model furkanaydgn\deneme\models\Alinanbiletler */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="alinanbiletler-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'userssim')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'useroyisim')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'useryas')->textInput() ?>

    <?= $form->field($model, 'usercinsiyet')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fid')->textInput() ?>

    <?= $form->field($model, 'biletsayisi')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>