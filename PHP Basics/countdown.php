<?php
function countdown($num_args){
    if ($num_args > 0){
        print("number is $num_args");
        countdown($num_args - 1);
    }
}
countdown(10);



?>