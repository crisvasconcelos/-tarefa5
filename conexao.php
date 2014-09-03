<?php


$host       = 'localhost';
$dbname     = 'restaurante';
$user       = 'restaurante';
$password   = '123';

$con = new PDO("pgsql:dbname=$dbname; host=$host", "$user", "$password");
