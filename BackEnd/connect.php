<?php
// connect.php
require_once 'config.php';

class Database {
    private $conn;
    
    public function __construct() {
        $this->conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
        
        if($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }
    
    public function getConnection() {
        return $this->conn;
    }
}
?>
<?php
try {
    // فتح قاعدة بيانات SQLite
    $conn = new PDO("sqlite:database/lawreto.db");
    // تعيين الوضع الخطأ إلى استثناء
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>

