<?php
use yii\helpers\Html;
/* @var $this yii\web\View */
/* @var $model kouosl\search\models\search */
$this->title = 'Update Search: ' . $model->search;
$this->params['breadcrumbs'][] = ['label' => 'Search', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Sunucu, 'url' => ['view', 'ID' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="search-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>