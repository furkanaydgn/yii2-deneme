
<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model furkanaydgn\deneme\models\Alinanbiletler */

$this->title = 'Bilet Güncelle ' . $model->uid;
$this->params['breadcrumbs'][] = ['label' => 'Alinanbiletlers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->uid, 'url' => ['view', 'id' => $model->uid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="alinanbiletler-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>