<?php
function pass_by_value($param) {
  array_push($param, 4, 5);
}

$ar = array(1,2,3);
pass_by_value($ar);

foreach($ar as $elem) {
  echo "<br>$elem";
}

function pass_by_reference(&$param) {
  array_push($param, 4, 5);
}
$ar = array(1, 2, 3);

pass_by_reference($ar);

foreach($ar as $elem) {
  echo "<br>$elem";
}



?>
