
<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model furkanaydgn\deneme\models\Kullanici */

$this->title = ' Yolcu Ekle';
$this->params['breadcrumbs'][] = ['label' => 'Kullanici', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kullanici-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>