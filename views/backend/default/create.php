<?php
use yii\helpers\Html;
/* @var $this yii\web\View */
/* @var $model kouosl\search\models\Search */
$this->title = 'Create Search';
$this->params['breadcrumbs'][] = ['label' => 'Search', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="searcg-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div><?php
use yii\helpers\Html;
/* @var $this yii\web\View */
/* @var $model kouosl\search\models\search */
$this->title = 'Create LibrarySearch';
$this->params['breadcrumbs'][] = ['label' => 'Emergencies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="search-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>