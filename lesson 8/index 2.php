<?php
$num = 3;
$x = $num;
$y = $num;
while($x--){
  if ($num%2 != 0 && $x%2 == 0) {
    echo str_repeat(' ',intval($x/2)) . str_repeat('*', $num-$x) . "\n";
  }
}
while($y--){
  if ($num%2 != 0 && $y%2 != 0) {
    echo str_repeat(' ',(($num - $y)/2)) . str_repeat('*', $y) . "\n";
  }
}

?>