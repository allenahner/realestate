<?php

use yii\helpers\Html;
use yii\bootstrap\Tabs;

/* @var $this yii\web\View */
/* @var $model app\models\Listing */

$this->title = "Listing " . $model->listing_num;
$this->params['breadcrumbs'][] = ['label' => 'Listings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="listing-view row">
    <div class="col-lg-12">
        <p>
            <?= Html::a('Update', ['update', 'id' => $model->listing_id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $model->listing_id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Are you sure you want to delete this item?',
                    'method' => 'post',
                ],
            ]) ?>
        </p>
    </div>
    <div class="col-lg-12">
        <?= Tabs::widget([
            'options' => ['id' => 'listingTabs'],
            'items' => [
                [
                    'label' => 'Property Deatils',
                    'content' => $this->render('_property_details', ['model' => $model]),
                    'active' => true,
                    'options' => ['id' => 'propertyDetails']
                ],
                [
                    'label' => 'Photos',
                    'content' => $this->render('_photos', ['model' => $model]),
                    'options' => ['id' => 'photos'],
                ],
                [
                    'label' => 'Map & Directions',
                    'content' => $this->render('_map', ['model' => $model]),
                    'options' => ['id' => 'map'],
                ],
            ],
        ]); ?>
    </div>
</div>
</div>
