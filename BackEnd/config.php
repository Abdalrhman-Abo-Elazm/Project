<?php
// config.php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'lawreto');

// محاولة الاتصال بقاعدة البيانات MySQL
$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// التحقق من الاتصال
if($conn === false){
    die("ERROR: Could not connect. " . $conn->connect_error);
}
?>
