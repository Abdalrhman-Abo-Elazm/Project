<?php
try {
    // فتح أو إنشاء قاعدة بيانات SQLite داخل مجلد database
    $conn = new PDO("sqlite:database/lawreto.db");
    // تعيين الوضع الخطأ إلى استثناء
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // إنشاء جدول users إذا لم يكن موجودًا
    $sql = "CREATE TABLE IF NOT EXISTS users (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        name TEXT NOT NULL,
        email TEXT NOT NULL
    )";

    // تنفيذ استعلام SQL
    $conn->exec($sql);
    echo "Table users created successfully";

} catch(PDOException $e) {
    echo "Error creating table: " . $e->getMessage();
}

// إغلاق الاتصال
$conn = null;
?>
