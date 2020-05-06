<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="HomePageScript.js"></script>

<?php
/**
 * Created by PhpStorm.
 * User: codyp
 * Date: 2/12/20
 * Time: 4:58 PM
 */

//echo "found me";
$rankBy = "";
if (isset($_POST['checkbox'])){
  //  echo "checkbox is clicked";
//    SORT BY PROMINENCE HAS BEEN SELECTED
    $rankBy = "Prominence";
}else{
    $rankBy = "Distance";
}

$radius =  $_POST['range_slider'];
$lat = "";
$lng = "";



// SEARCH BY CURRENT LOCATION
if ($_POST['location'] === 'cur_loc') {
    //echo "cur location selected";
    $lat= "<script type='text/javascript'>document.write(localStorage.getItem('lat'));</script>";
    $lng= "<script type='text/javascript'>document.write(localStorage.getItem('lng'));</script>";

    require_once("Search_Results.php");
}else{ // SEARCH BY CITY, STATE


    $selectOptionCountry = $_POST['country'];
    $selectOptionState = $_POST['state'];
    $selectOptionCity = $_POST['city'];


//    echo $selectOptionState;
//    echo $selectOptionCity;

    $search_url = "https://nominatim.openstreetmap.org/search?q=" . urlencode($selectOptionCity) . "," . urlencode($selectOptionState) . "&format=json";

    // API WON'T WORK WITHOUT THE HEADER BELOW
    $httpOptions = [
        "http" => [
            "method" => "GET",
            "header" => "User-Agent: Nominatim-Test"
        ]
    ];

    $streamContext = stream_context_create($httpOptions);
    $json = file_get_contents($search_url, false, $streamContext);

    $decoded = json_decode($json, true);
    $lat = $decoded[0]["lat"];
    $lng = $decoded[0]["lon"];


    require_once("Search_Results.php");
}


