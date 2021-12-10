<?php
require_once 'connectPDO.php';

$sql = "SELECT * FROM todo";
$results = $dbh->query($sql);

echo "[";
foreach ($results as $result) {
    echo $result["jdoc"].",";
};
echo "]";