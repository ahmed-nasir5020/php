<?php 
// loops 
echo "loops <br>";
$family = array("ahmed","omer","ali","khalid");
$worker = [
    "designer" => "ahmed",
    "devolper" => "nasir",
    "gamer" => "elamin"
];

for($i=0;$i<count($family);$i++){
echo $family[$i]."<br>";
}

foreach($worker as $key => $value){
echo " $key => $value ";
}
?>