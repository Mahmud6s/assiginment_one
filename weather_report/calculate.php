<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $num = $_POST["number"];

    if($num >=20 && $num <=30){
        echo "$num degree celsius is __EXCELLENT WEATHER";
    }elseif($num <=19 && $num >=5){
        echo "$num degree celsius is __COOL WEATHER";
    }elseif($num <=4){
        echo "$num degree celsius is __FREEZING WEATHER";
    }elseif($num >=31 && $num <=40){
        echo "$num degree celsius is __WARM WEATHER";
    }elseif($num >=41){
        echo "$num degree celsius is __EXTREME HOT WEATHER";
    }
}