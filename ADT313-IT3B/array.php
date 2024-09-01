<?php
$cars = array("Volvo", "BMW", "Toyota");
$cars = ["Volvo", "BMW", "Toyota"];

echo $cars[0];

$userInformation = array(
    "firstname"=>"rhey",
    "lastname" =>"verunque",
    "role" => "admin"

);
echo "<br/>";
$userInformation["address"] = 'Marilao';

echo $userInformation ["address"];
echo "<br/>";
print_r($userInformation);

echo "<br/>";

var_dump($userInformation);
?>