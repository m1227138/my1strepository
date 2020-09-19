<?php
echo "Zdr<br>";
$username = "monika";
echo $username;
$age = 20;
echo $age."<br>";
$varBool = true;
echo $varBool;
$array = ["Monika", 20, true];
echo $array[0]."<br>";
$associate = ["username"=> "Monika", "grad" => "Burgas"];
echo $associate["grad"];
for($i=0; $i < 2; $i++) {
    echo $i;
}
foreach($associate as $assocfor) {
    echo $assocfor."<br>";
}
?>