<?php
use yii\helpers\Html;
use yii\grid\GridView;
/* @var $this yii\web\View */
/* @var $searchModel kouosl\search\models\LibrarySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$this->title = 'Search';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="search-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Search', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
	
	
	
	
	
</div>