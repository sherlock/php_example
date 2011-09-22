<?php 
//This is a simple function to return number of digits of an integer. 

//function declaration 
function count_digit($number) 
{ 
    $digit = 0; 
    do 
    { 
        $number /= 10;      //$number = $number / 10; 
        $number = intval($number); 
        $digit++;    
    }while($number!=0); 
    return $digit; 
} 

//function call 
$num = 12312; 
$number_of_digits = count_digit($num); //this is call :) 
echo $number_of_digits; 
//prints 5 
?> 
