<?php

$age = array(21,34,"twenty-one");

print_r($age);
echo "<br>";
echo $age[2];
echo "<br>";
$run = array("shakib"=>55, "akib"=>10);

echo $run["shakib"];
echo "<br>";
echo "<ul>";
foreach($age as $value){
    echo "<li>$value</li>";
}
echo "</ul>";
?>