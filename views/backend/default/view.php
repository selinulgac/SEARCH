<?php
use yii\helpers\Html;
use yii\widgets\DetailView;
/* @var $this yii\web\View */
/* @var $model kouosl\search\models\Search */
$this->title = $model->search;
$this->params['breadcrumbs'][] = ['label' => 'Search', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="search-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'ID' => $model->ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'ID' => $model->ID], [
            'class' => 'btn btn-danger',
            'Sunucu' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ID',
        ],
    ]) ?>

</div>

    © 2018 GitHub, Inc.
    Terms
    Privacy
    Securi