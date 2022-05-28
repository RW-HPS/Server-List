<?php

$server_name = 'localhost';
$username = 'RWListCN';
$password = 'DR @ RW-HPS Team !';
$db_name = 'List';

$conn = new mysqli($server_name, $username, $password, $db_name);

if ($conn->connect_error) {
 	return;
}



$conn->query('SET NAMES UTF8');
$conn->query('SET time_zone = "+8:00"');

