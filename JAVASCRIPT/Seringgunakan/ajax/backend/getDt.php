<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "latihan";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM teman";
$result = mysqli_query($conn, $sql);
$rows= array();
while($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
}
print json_encode($rows);
?>