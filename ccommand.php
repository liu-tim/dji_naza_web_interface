<?php

/* To use core command interface you need to install sudo and add
   the www-data user to sudoers file as root permitted.
   /etc/sudoers -> www-data ALL=(ALL)    NOPASSWD: ALL

   Also you have to compile the core_control tool from the
   Naza V2 interface main repository. And add the resulting binary as ccontrol.exe
   to this directory.
   */

$forward = $_GET["forward"];
$back = $_GET["back"];
$throttle = $_GET["throttle"];
$left = $_GET["left"];
$right = $_GET["right"];
$tright = $_GET["tright"];
$tleft = $_GET["tleft"];
$flm = $_GET["flm"];
$arm = $_GET["arm"];
$neutral = $_GET["neutral"];
$fly_test_speed = $_GET["fly_test_speed"];
$fly_test_time = $_GET["fly_test_time"];
$move_gimbal_value = $_GET["move_gimbal_value"];
$move_gimbal_time = $_GET["move_gimbal_time"];

if($forward!=""){
  echo "forward with $forward \n"; ?><br><?php
  echo shell_exec ("sudo ./bins/ccontrol.exe forward $forward");
} else if($back!=""){
  echo "back with $back \n"; ?><br><?php
  echo shell_exec ("sudo ./bins/ccontrol.exe back $back");
} else if($throttle!=""){
  echo "throttle with $throttle \n"; ?><br><?php
  echo shell_exec ("sudo ./bins/ccontrol.exe throttle $throttle");
} else if($left!=""){
  echo "left with $left \n"; ?><br><?php
  echo shell_exec ("sudo ./bins/ccontrol.exe left $left");
} else if($right!=""){
  echo "right with $right \n"; ?><br><?php
  echo shell_exec ("sudo ./bins/ccontrol.exe right $right");
} else if($tright!=""){
  echo "tright with $tright \n"; ?><br><?php
  echo shell_exec ("sudo ./bins/ccontrol.exe tright $tright");
} else if($tleft!=""){
  echo "tleft with $tleft \n"; ?><br><?php
  echo shell_exec ("sudo ./bins/ccontrol.exe tleft $tleft");
} else if($flm!=""){
  echo "flm with $flm \n"; ?><br><?php
  echo shell_exec ("sudo ./bins/ccontrol.exe flm $flm");
} else if($arm!=""){
  echo "arm with $arm \n"; ?><br><?php
  echo shell_exec ("sudo ./bins/ccontrol.exe arm");
} else if($neutral!=""){
  echo "neutral \n"; ?><br><?php
  echo shell_exec ("sudo ./bins/ccontrol.exe neutral");
} else if($fly_test_speed!="" && $fly_test_time!=""){
  echo "fly_test with $fly_test_speed and $fly_test_time \n"; ?><br><?php
  echo shell_exec ("sudo ./bins/ccontrol.exe fly_test $fly_test_speed $fly_test_time");
} else if($move_gimbal_value!="" && $move_gimbal_time!=""){
  echo "move_gimbal with $move_gimbal_value and $move_gimbal_time \n"; ?><br><?php
  echo shell_exec ("sudo ./bins/ccontrol.exe move_gimbal $move_gimbal_value $move_gimbal_time");
}
?>
