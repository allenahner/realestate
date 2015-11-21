<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ListingSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="listing-search">

    <?php $form = ActiveForm::begin([
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'listing_id') ?>

    <?= $form->field($model, 'listing_num') ?>

    <?= $form->field($model, 'description') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
