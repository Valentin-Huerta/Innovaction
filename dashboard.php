<?php
conexion
if sesion
	dashboard

	inicio

$arr = array(
	'profile_pic' => '',
	'nombre' => '',
	'campus' => '',
);

echo json_encode($arr);

$exp_time=60*60*24*30;
setcookie("dashboard",$dashboard,time()+$exp_time);

/* name is your cookie's name
value is cookie's value
$int is time of cookie expires */

/* echo $_COOKIE["your cookie name"]; */

/* setcookie("color","red"); */
/* echo $_COOKIE["color"]; */

/* color is red */
/* your codes and functions */
/* setcookie("color","blue"); */
/* echo $_COOKIE["color"]; */
/* new color is blue */

/* unset($_COOKIE["yourcookie"]); */
/* Or */
/* setcookie("yourcookie","yourvalue",time()-1); */

/* it expired so it's deleted */

?>