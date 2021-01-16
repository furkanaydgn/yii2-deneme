
<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use furkanaydgn\deneme\models\Firmalistesi;
/* @var $this yii\web\View */
/* @var $model furkanaydgn\deneme\models\Alinanbiletler */

$this->title = $model->userssim." " .$model->useroyisim ;
$this->params['breadcrumbs'][] = ['label' => 'Alinan Biletler', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="alinanbiletler-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->uid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->uid], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
          //  'uid',
            'userssim',
            'useroyisim',
            'useryas',
            'usercinsiyet',
           // 'fid',
            'biletsayisi',
            "firmadi"=>[
                "attribute"=>"firma adi",
                "value" => Firmalistesi::findOne($model->fid)->fad
            ]
        ],
    ]) ?>
     
      <?php
