// FOR THE HOMEPAGE

$(document).ready(function(){
    $("#city_loc_btn").click(function(){
        $("#country_state_city").fadeIn(1200);
    });
});

$(document).ready(function(){
    $("#cur_loc_btn").click(function(){
        $("#checkbox_div").fadeIn(1200);
    });
});

function SetSearchType() {
    if (document.getElementById('cur_loc_btn').checked) {
        document.getElementById("country_state_city").style.display = 'none';
        getLocation();
    }
    else{
       // document.getElementById('checkbox_div').style.display = 'none';
    }
}

navigator.geolocation.getCurrentPosition(function(location) {
    // alert("1st");
    console.log(location.coords.latitude);
    console.log(location.coords.longitude);
    console.log(location.coords.accuracy);
});


// GET LOCATION
function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else {
        alert("Geolocation is not supported by this browser.");
    }
}
// SET CURRENT LOCATION VARIABLES IN LOCAL STORAGE
function showPosition(position) {
    // x.innerHTML = "Latitude: " + position.coords.latitude +
    // "<br>Longitude: " + position.coords.longitude;
    localStorage.setItem("lat", position.coords.latitude.toString());
    localStorage.setItem("lng", position.coords.longitude.toString());
    // alert("latitude issss " + localStorage.getItem("lat"));
}

// ----------------------------------------------------------------------------------------------------------------------
function setRange(value) {
    // alert(value);
    var range_span = document.getElementById("range_span");
    range_span.innerHTML = "Range is " + value +" miles";

}

function f() {
    return "4244";
    // HOW TO RETURN VALUE TO PHP. MUST BE STRING
}

//--------------------THE RADIUS SLIDER--------------------------------------------------------------------

// END OF HOMEPAGE------------------------------------------------------------------------------------------------------