<div class="row"><div class="col-lg-2 listing-info">
    <p class="listing-info-header">PRICE</p>

    <h3 class="listing-info-value"><?= $model->getPrice() ?></h3>
</div>
<div class="col-lg-2 listing-info">
    <p class="listing-info-header">BATHS</p>

    <h3 class="listing-info-value"><?= $model->getPrintAttr('baths') ?></h3>
</div>
<div class="col-lg-2 listing-info">
    <p class="listing-info-header">BEDS</p>

    <h3 class="listing-info-value"><?= $model->getPrintAttr('beds') ?></h3>
</div>
<div class="col-lg-2 listing-info">
    <p class="listing-info-header">SQ FT</p>

    <h3 class="listing-info-value"><?= $model->getPrintAttr('sq_ft') ?></h3>
</div>
<div class="col-lg-2 listing-info">
    <p class="listing-info-header">YEAR BUILT</p>

    <h3 class="listing-info-value">2011</h3>
</div>
<div class="col-lg-2 listing-info">
    <p class="listing-info-header">SELLER #</p>

    <h3 class="listing-info-value"><?= $model->getPrintAttr('listing_num') ?></h3>
</div>
<div class="col-lg-8 col-sm-12 listing-details">
    <img class="img-responsive img-thumbnail" src="holder.js/730x400">
</div>
</div>