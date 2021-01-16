
<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model furkanaydgn\deneme\models\Kullanici */

$this->title = 'Yolcu Güncelle ' . $model->userssim. " ". $model->useroyisim ;
$this->params['breadcrumbs'][] = ['label' => 'Kullanici', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->uid, 'url' => ['view', 'id' => $model->uid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kullanici-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>