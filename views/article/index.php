<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ListView;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ArticleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Articles';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="article-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Article', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    
    <?= ListView::widget([
    		'dataProvider' => $dataProvider,
    		'itemView' => '_article',
    ])?>

</div>
