<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
$username = "root";  // isset($_SESSION['username']) ? $_SESSION['username'] : '';
$password = "84981219";  // isset($_SESSION['password']) ? $_SESSION['password'] : '';
$dbhost = 'localhost'; // 一般是 localhost或127.0.0.1
$dbms = 'mysql'; // 資料庫型別
$dbuser = $username; // 一般是 root
$dbpasswd = $password;
$dbname = 'test';
$dbcharacter = 'utf8'; // 一般是 utf8
try
{
    $db = new PDO("{$dbms}:host={$dbhost};dbname={$dbname};charset={$dbcharacter}", $dbuser, $dbpasswd);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); // 禁用prepared statements的模擬效果
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // 讓資料庫顯示錯誤原因

} catch (PDOException $e) {
    // $error=die("無法連上資料庫：" . $e->getMessage());
    // echo gettype($error); 
    echo "<script>alert('Please enter the account password first!!!');location.href='login.php';</script>";
    // die("無法連上資料庫：" . $e->getMessage());
}

?>