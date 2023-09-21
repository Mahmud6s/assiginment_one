<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["number1"];
    $num2 = $_POST["number2"];


    if($num1 > $num2){
        echo " The Number =$num1 is Greater then ,$num2";
    }elseif($num1 == $num2){
        echo " The Number =$num1 is Equal ,$num2";
    }else{
        echo " The Number =$num1 is Smaller then ,$num2";
    }
}
