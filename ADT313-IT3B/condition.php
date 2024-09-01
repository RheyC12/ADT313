<?php

echo "comditional statements";

$showVariable = true;
$name = " Rhey";
$auth = false;
if($showVariable == true){
    echo $name;
} elseif($showVariable && $name == "Rhey" && $auth){
    echo  "hello" .$name;


}else{
    echo "Else Statement";
}

 $anotherVariable = ($showVariable == true) ? $name : "short hand: else";
 echo $anotherVariable;

?>