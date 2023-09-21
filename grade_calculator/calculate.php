<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bangla = $_POST["bangla"];
    $english = $_POST["english"];
    $math = $_POST["math"];

    echo "Bangla = $bangla"."<br>";
    echo "english = $english"."<br>";
    echo "math = $math"."<br>";
    $avgMarks = ($bangla + $english + $math)/3;

    if($avgMarks>=80 && $avgMarks<=100){
      echo "Avg Marks is = $avgMarks"."<br>"." Result is = A+";
    }elseif ($avgMarks>=70 && $avgMarks<79) {
        echo "Avg Marks is = $avgMarks"."<br>"." Result is = A";
    } elseif ($avgMarks>=60 && $avgMarks<69) {
        echo "Avg Marks is = $avgMarks"."<br>"." Result is = A-";
    } elseif ($avgMarks>=50 && $avgMarks<59) {
        echo "Avg Marks is = $avgMarks"."<br>"." Result is = B";
    } elseif ($avgMarks>=40 && $avgMarks<49) {
        echo "Avg Marks is = $avgMarks"."<br>"." Result is = C";
    }else{
        echo "Avg Marks is = $avgMarks"."<br>"." Result is = F";
    }
}