<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ListingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Listings';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="listing-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Listing', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <div class="row">
        <?= ListView::widget([
            'dataProvider' => $dataProvider,
            'itemOptions' => ['class' => 'item'],
            'itemView' => function($model, $key, $index, $widget){
                echo $this->render('_view', ['model' => $model]);
            }
        ]) ?>
    </div>

</div>
