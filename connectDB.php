<?php

$server_name = '127.0.0.1';
$username = 'RWListCN';
$password = 'dhGSLwLDrxmxJPmj';
$db_name = 'rwlistcn';

global $conn;
$conn = new mysqli($server_name, $username, $password, $db_name);

if ($conn->connect_error) {
 	return;
}


$conn->query('SET NAMES UTF8');
$conn->query('SET time_zone = "+8:00"');

