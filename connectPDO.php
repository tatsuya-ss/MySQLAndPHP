<?php
// 環境変数を読み込むライブラリ
require 'vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// 環境変数のプロパティ
$hostName = $_ENV["HOST_NAME"];
$userName = $_ENV["USER_NAME"];
$password = $_ENV["PASSWORD"];
$database = "todo";
$dsn = 'mysql:host='.$hostName.';dbname='.$database.';charset=utf8';

try { 
    $dbh = new PDO($dsn, $userName, $password);
} catch (PDOException $e) {
      // エラーメッセージを表示させる
  echo 'データベースにアクセスできません！' . $e->getMessage();
  echo '<br>';
  // 強制終了
  exit;
}