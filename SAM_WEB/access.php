<?php
error_reporting(0);
$lo=fopen("admin/config/host.txt","r");
$localhost=fgets($lo);

$us=fopen("admin/config/user.txt","r");
$user=fgets($us);

$ps=fopen("admin/config/pass.txt","r");
$pass=fgets($ps);

$d=fopen("admin/config/db.txt","r");
$db=fgets($d);

$ihost=base64_decode($localhost);
$iuser=base64_decode($user);
$ipass=base64_decode($pass);
$idb=base64_decode($db);

$conx=mysql_connect($ihost,$iuser,$ipass)or die(mysql_error());
mysql_select_db($idb,$conx)or die(mysql_error());
?>