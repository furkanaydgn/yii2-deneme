
<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model furkanaydgn\deneme\models\FirmalistesiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="firmalistesi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'fid') ?>

    <?= $form->field($model, 'fad') ?>

    <?= $form->field($model, 'kalkisnoktasi') ?>

    <?= $form->field($model, 'varisnoktasi') ?>

    <?= $form->field($model, 'biletucret') ?>

    <?php // echo $form->field($model, 'cagrımerkezi') ?>

    <?php // echo $form->field($model, 'koltuksayisi') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>