<?php
echo "<table style='border: solid 1px black;'>";
echo "<tr><th>Id</th><th>Firstname</th><th>Lastname</th></tr>";
class latihan extends RecursiveIteratorIterator{
	function __construct($it){
		parent:: __construct($it, self::LEAVES_ONLY);
	}
	function current(){
		return '<td style="width:150px; border: 1px solid black;">'.parent::current().'</td>';
	}
	function beginChildren(){
		echo '<tr>';
	}
	function endChildren(){
		echo '</tr>';
	}
}
$host= 'localhost';
$username= 'root';
$password= '';
$db= 'latihan';

try{
	$conn= new PDO("mysql:host=$host; dbname=$db", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$stmt= $conn->prepare("select * from teman; ");
	$stmt->execute();

	$result= $stmt->setFetchMode(PDO::FETCH_ASSOC);
	foreach(new latihan(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v){
		echo $v;
	}
}catch(PDOException $e){
	echo 'error'+$e->getMessage();
}
$conn= null;
echo '</table>';

echo $conn;
?>