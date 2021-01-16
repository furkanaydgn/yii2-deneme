
<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model furkanaydgn\deneme\models\Alinanbiletler */

$this->title = 'Alınan Bilet Ekle';
$this->params['breadcrumbs'][] = ['label' => 'Alinan Biletler', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="alinanbiletler-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>