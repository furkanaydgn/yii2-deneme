
<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use furkanaydgn\deneme\models\Firmalistesi;
/* @var $this yii\web\View */
/* @var $model furkanaydgn\deneme\models\Kullanici */

$this->title = $model->uid;
$this->params['breadcrumbs'][] = ['label' => 'Yolcu', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="kullanici-view">

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
            'uid',
            'userssim',
            'useroyisim',
            'useryas',
            'usercinsiyet',
            'biletsayisi',
            'fid',
        ],


    ]) ?>
    
    <?php
  $firma= Firmalistesi::findOne($model->fid) ;
  
    ?>
     
      <?= DetailView::widget([
        'model' => $firma,
        'attributes' => [
             'fad',

        ],
    ]) ?>
</div>
