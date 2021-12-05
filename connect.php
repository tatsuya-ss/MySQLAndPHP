<?PHP
// 環境変数を読み込むライブラリ
require 'vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$serverName = $_ENV["SERVER_NAME"];
$userName = $_ENV["USER_NAME"];
$password = $_ENV["PASSWORD"];
$database = "todo";
$connection = new mysqli($serverName, $userName, $password, $database);

if ($connection->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "接続に成功しました！！！";
?>