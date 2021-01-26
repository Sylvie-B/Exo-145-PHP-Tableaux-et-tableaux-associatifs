<?php

// Premiere ligne

$fruits = array("Apple", "Banana", "Orange");

echo count($fruits)."<br>";

echo $fruits[1]."<br>";

//Deuxieme ligne

$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

echo "<br><br>Ben is ".$age["Ben"]." years old.<br><br>";

foreach($age as $key => $value) {
    echo "<br>Key=".$key." , Value=".$value ;
}

////Troisieme ligne

$colors = array("red", "green", "blue", "yellow");
sort($colors);
foreach($colors as $item) {
    echo "<br>".$item;
}

rsort($colors);
foreach($colors as $item) {
    echo "<br>".$item;
}



//// Quatrieme ligne

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

asort($age);

foreach($age as $key => $item) {
    echo "<br>".$key." ".$item;
}
