<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $number = $_POST["number"];


    if($number %2 == 0){
        echo " $number = is _EVEN Number";
    }else{
        echo " $number = is _ODD Number";
    }
}