
<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model furkanaydgn\deneme\models\Firmalistesi */

$this->title = 'Firma listesi Güncelle: ' . $model->fid;
$this->params['breadcrumbs'][] = ['label' => 'Firma Güncelle', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->fid, 'url' => ['view', 'id' => $model->fad]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="firmalistesi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>