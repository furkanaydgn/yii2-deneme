
<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel furkanaydgn\deneme\models\KullaniciSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Yolcu';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kullanici-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Yeni Yolcu', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'uid',
            'userssim',
            'useroyisim',
            'useryas',
            'usercinsiyet',
            //'fid',
            //'biletsayisi',

            ['class' => 'yii\grid\ActionColumn', 'template' => '{update} {delete}'],
        ],
    ]); ?>


</div>