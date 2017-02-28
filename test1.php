<?php

$student = array(

    "Emmanuel" => 42,
    "Thierry" => 51,
    "Pascal" => 45,
    "Eric" => 48,
    "Nicolas" =>19

);
foreach ($student as $name => $age){
    echo ($name) . ' '.($age).'</br></br>';
}

$moyenne = array_sum($student)/count($student);


echo $moyenne;







