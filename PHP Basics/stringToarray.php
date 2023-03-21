<?php 
$string = 'Burch Jr, Philip H., The American establishment, Research in political economy 6(1983), 83-156';
$test = explode(",", $string);
$info = print_r($test, true);
echo "<pre>$info</pre>";


?>