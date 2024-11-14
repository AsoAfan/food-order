<?php

$db_name = 'mysql:host=localhost;dbname=<data_base_name>';
$user_name = 'root';
$user_password = '<your_db_password>';

$conn = new PDO($db_name, $user_name, $user_password);

?>
