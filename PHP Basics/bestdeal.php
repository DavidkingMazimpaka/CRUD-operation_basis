<?php
function betterdeal($qty1,$qty2,$pr1,$pr2){
    $deal1 = $pr1/$qty1;
    $deal2 = $pr2/$qty2;
    return ($deal1 < $deal2);
}
$qty1 = 70;
$qty2 = 100;
$pr1 = 1035;
$pr2 = 1200;

if (betterdeal($qty1,$qty2,$pr1,$pr2)){
    echo "The first deal is the best";
}else {
    echo "The second deal is the best";
}
?>