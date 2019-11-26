<?php

if (isset($_POST["buttom"])) {

     $numero1=$_POST["weight"];
     $numero2=$_POST["height"];

     $operator= $numero2*$numero2;
     $operador1= $numero1/$operator;


     echo "Your BMI is: " . $operador1; 

     if ($operador1<18.5) {

      echo " You are Underweight";
     } else if ($operador1<24.9) {

      echo " Your are Normal";
     } else if ($operador1<29.9) {

      echo " You are Fat";
     } else {

      echo " You are Obese";
     }

    
   
}






?>