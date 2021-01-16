
<?php

use yii\helpers\Html;
use yii\grid\GridView;
use furkanaydgn\deneme\models\kullanici;
/* @var $this yii\web\View */
/* @var $searchModel furkanaydgn\deneme\models\FirmalistesiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Otobüs Firma listesi';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="firmalistesi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Yeni Firma Ekle', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <p>
        <?= Html::a('Bilet Al', ['kullanici/create'], ['class' => 'btn btn-success']) ?>
    </p>
 
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'fid',
            'fad',
            'kalkisnoktasi',
            'varisnoktasi',
            'biletucret',
            //'cagrımerkezi',
            //'koltuksayisi',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>