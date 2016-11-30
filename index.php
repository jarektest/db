<?php
$user = 'root';
$pass = 'jarek';
$server = 'localhost';
$dbname = 'local_db';

$result = [];

$conn = new PDO( "mysql:host=$server;dbname=$dbname", $user, $pass );
$query = $conn->query("SELECT * FROM users");
foreach($query as $row) {
    $result[] = [
	    'id'=> $row['id'],
	    'name'=> $row['name']
    ];
}

echo'<pre>';
print_r($result);
echo'</pre>';