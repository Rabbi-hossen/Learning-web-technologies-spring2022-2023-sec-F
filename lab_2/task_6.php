<?php
$number = array(1,2,3,4,5);
$search_num = 5;
$found = false;
foreach($number as $number){
    if($number == $search_num){
          $found = true;
          break;
    }
}

if($found) {
    echo "$search_num is in the array";

}
else {
    echo " Not found";
}

?>