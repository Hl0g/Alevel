<?php
$room = 37;
$floor = 9;
$num = 4;

function search($r, $f, $n){
  $number_room_entrance = $n * $f;
  $num_entrence = 1;
  $num_floor = 1;
  while($r > $number_room_entrance){
    $r -= $number_room_entrance;
    $num_entrence++;
  }
  while($r > $n){
    $r -= $n;
    $num_floor++;
}
var_dump($num_entrence);
}
search($room, $floor, $num);
?>