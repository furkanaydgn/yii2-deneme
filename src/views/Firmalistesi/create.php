
<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model furkanaydgn\deneme\models\Firmalistesi */

$this->title = ' Firma Listesi';
$this->params['breadcrumbs'][] = ['label' => 'Firma listesi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="firmalistesi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>