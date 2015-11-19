<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Listing */

$this->title = 'Update Listing: ' . ' ' . $model->listing_num;
$this->params['breadcrumbs'][] = ['label' => 'Listings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->listing_num, 'url' => ['view', 'id' => $model->listing_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="listing-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
