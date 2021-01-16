
<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model furkanaydgn\deneme\models\Firmalistesi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="firmalistesi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fad')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kalkisnoktasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'varisnoktasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'biletucret')->textInput() ?>

    <?= $form->field($model, 'cagrımerkezi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'koltuksayisi')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>