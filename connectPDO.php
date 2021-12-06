<?php
// 環境変数を読み込むライブラリ
require 'vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// 環境変数のプロパティ
$serverName = $_ENV["SERVER_NAME"];
$userName = $_ENV["USER_NAME"];
$password = $_ENV["PASSWORD"];
$database = "todo";
$dsn = 'mysql:host='.$serverName.';dbname='.$database.';charset=utf8';
// echo $serverName;
try { 
    $dbh = new PDO($dsn, $userName, $password);
    echo '接続できました';
    echo '<br>';
} catch (PDOException $e) {
      // エラーメッセージを表示させる
  echo 'データベースにアクセスできません！' . $e->getMessage();
  echo '<br>';
  // 強制終了
  exit;
}

$sql = "SELECT * FROM users";
$statement = $dbh->query($sql);

foreach ($statement as $row) {
    echo "id".$row["id"].","."name".$row["name"].","."mail".$row["mail"];
    echo '<br>';
}