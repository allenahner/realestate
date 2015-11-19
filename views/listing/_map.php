<?php
$this->registerJsFile('/js/map.js', ['position' => yii\web\View::POS_END, 'depends' => ['\app\assets\AppAsset']]);
$this->registerJs('


$("#map").click(function(){
    getLatLong("' . $model->address . '");
    $(".tab-content") . css("height", "100%");
    initialize(false);
});
$("#clear-directions") . click(function () {
    initialize(true);
});
$("#direction-form") . submit(function () {
    var location = $("#inputSearch") . val();
    getDirections(location);
    return false;
});', yii\web\View::POS_READY);
?>
<style>
    #inputSearch {
        width: 100%;
    }
</style>
<form class="form-inline" id="direction-form" action="javascript:return false;">
    <div class="col-lg-12" id="search-col">
        <div class="input-group">
            <input type="text" class="form-control" id="inputSearch" placeholder="Enter Location">
		      			<span class="input-group-btn">
		      				<button type="submit" class="btn btn-default btn-group" id="getDirections">Get Directions
                            </button>
		      				<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                                    tabindex="-1">
                                <span class="caret"></span>
                            </button>
		      				<ul class="dropdown-menu">
                                <li><a href="#" id="clear-directions">Clear Directions</a></li>
                            </ul>
		      			</span>
        </div>
    </div>
</form>
<div id="map-panel"></div>
<div id="map-canvas"></div>

