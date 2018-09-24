<?php 

$server = 'localhost';
$user = 'root';
$password = 'root';
$dbname = 'killer';

$connection = new mysqli($server, $user, $password, $dbname);

if($connection->connect_error)
{
	die('Verbindung getrennt');
}

$sql = 'SELECT * FROM people';
$result = $connection->query($sql);

if($result->num_rows > 0)
{
	while($row = $result->fetch_assoc())
	{
		echo $row['name'] . ' - ' . $row['id'] . '<br>';
	}
}

$connection->close();