<?php
require_once 'connectPDO.php';

$sql = "SELECT * FROM todo";
$results = $dbh->query($sql);

foreach ($results as $result) {
    echo $result["jdoc"];
}