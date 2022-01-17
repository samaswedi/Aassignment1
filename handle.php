<?php


if(isset($_GET['register'])){
 
    echo "Your first name is :" .$_GET['first-name'] .'<br>';
    echo "Your last name is :" .$_GET['last-name'] .'<br>';
    echo "Your email or mobile is :" .$_GET['email-mobile'] .'<br>';
    echo "Your password is :" .$_GET['up-password'] .'<br>';
    echo "Your date of birth is : ".$_GET['birth-day']; echo "-" .$_GET['birth-month']; echo "-".$_GET['birth-year'] .'<br>';
    echo "Your gender is :".$_GET['gen'];
    
 }
 else
 echo "Error 404";



?>
