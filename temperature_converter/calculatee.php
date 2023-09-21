<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
       $num1 = $_POST["num"];
       $operation = $_POST["operation"];

       switch ($operation) {
           case "celTofer":
               $result = ($num1 * 9/5) + 32;
               echo "<p>$num1 Celsius And $result Fahrenheit</p>";
               break;
           case "ferTocel":
               $result = ($num1 - 32) * 5/9;
               echo "<p>$num1 Fahrenheit And $result Celsius</p>";
               break;
           default:
               echo "<p>Invalid operation</p>";
       }
   }