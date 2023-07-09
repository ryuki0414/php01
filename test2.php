<?php
$name = "森田";
$age = 26;
echo $name;
echo "私は".$name."です"; //.で結合する。
//JS "私は"+name+"です"
$message = "年齢は"; //message="年齢は"
$message .= $age; //message += age
$message .="です"; //message +="です"
echo $message;
?>