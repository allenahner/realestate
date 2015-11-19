    <div class="col-sm-6 col-md-4">
        <a href="<?= \Yii::$app->getUrlManager()->createUrl(['listing/view', 'id'=>$model->listing_id]) ?>" class="thumbnail listing-thumb">
            <span class="label label-success push-left">FOR SALE</span>
            <img src="holder.js/360x200">
            <div class="caption">
                <h3><?= substr($model->getPrintAttr('description'), 0, 50) ?></h3>
                <div class="listing-thumb-info text-center">
                    <div class="row listing-thumb-upper">
                        <div class="col-lg-3">
                            <h4 class="listing-thumb-value"><?= $model->getSqFt() ?></h4>
                            <p class="listing-thumb-label">SQ FT</p>
                        </div>
                        <div class="col-lg-3">
                            <h4 class="listing-thumb-value"><?= $model->getPrintAttr('beds') ?></h4>
                            <p class="listing-thumb-label">BEDS</p>
                        </div>
                        <div class="col-lg-3">
                            <h4 class="listing-thumb-value"><?= $model->getPrintAttr('baths') ?></h4>
                            <p class="listing-thumb-label">BATHS</p>
                        </div>
                        <div class="col-lg-3">
                            <h4 class="listing-thumb-value"><?= $model->getPrintAttr('garage') ?></h4>
                            <p class="listing-thumb-label">GARAGE</p>
                        </div>
                    </div>
                    <div class="row listing-thumb-lower">
                        <h2><?= $model->getPrice() ?></h2>
                    </div>
                </div>
            </div>
        </a>
    </div>
