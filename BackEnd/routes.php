<?php
// routes.php
require 'connect.php';
require 'api/get_data.php';
require 'api/post_data.php';

$database = new Database();
$db = $database->getConnection();

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    getData($db);
} elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
    postData($db);
}
?>
