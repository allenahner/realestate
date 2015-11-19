var mapOptions = {
    zoom: 15,
    mapTypeId: google.maps.MapTypeId.ROADMAP
};

var LatLng = null;

function initialize(force) {
    force = (typeof force === "undefined") ? false : force;

    if(force === true || $('#map-canvas').contents().length === 0){
        $('#map-canvas').css('width', '100%');
        $('#map-canvas').css('height', '1000px');
        $('#map-canvas').css('margin-left', 0);
        $('#map-panel').hide();

        if(force === true){
            $('#map-canvas').empty();
            $('#inputSearch').val('');
        }

        map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);

        map.setCenter(LatLng);
        new google.maps.Marker({
            map: map,
            position: LatLng
        });
    }
}

function getLatLong(address){
    $.ajax({
        async: false,
        url:"http://maps.googleapis.com/maps/api/geocode/json?address="+address,
        type: "POST",
        success:function(res){
            LatLng = res.results[0].geometry.location;
        }
    });
}

function getDirections(destination){
    $('#map-panel').show();
    $('#map-canvas').css('width', '70%');
    $('#map-canvas').css('margin-left', '5%');

    var directionsService = new google.maps.DirectionsService();
    var directionsDisplay = new google.maps.DirectionsRenderer();

    var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

    directionsDisplay.setMap(map);
    if($('#map-panel').contents().length === 0)
        directionsDisplay.setPanel(document.getElementById('map-panel'));
    else{
        $('#map-panel').empty();
        directionsDisplay.setPanel(document.getElementById('map-panel'));
    }

    var request = {
        origin: LatLng,
        destination: destination,
        travelMode: google.maps.DirectionsTravelMode.DRIVING
    };

    directionsService.route(request, function(response, status) {
        if (status == google.maps.DirectionsStatus.OK) {
            directionsDisplay.setDirections(response);
        }
    });
}
