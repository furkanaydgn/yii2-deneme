
<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model furkanaydgn\deneme\models\Firmalistesi */

$this->title = $model->fad;
$this->params['breadcrumbs'][] = ['label' => 'Firma listesi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="firmalistesi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->fid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->fid], [
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
            'fid',
            'fad',
            'kalkisnoktasi',
            'varisnoktasi',
            'biletucret',
            'cagrımerkezi',
            'koltuksayisi',
        ],
    ]) ?>

</div>