<?php
require_once "settings.php";
$connection = new mysqli(DB_HOST, DB_USER_NAME, DB_PASS, DB_NAME);
if ($connection->connect_errno) {
    echo "Failed to connect to MySQL: (" . $connection->connect_errno . ") " . $connection->connect_error;
}
$query = "select * from master where url =''";
if ($result = $connection->query($query)) {
	while ($row = $result->fetch_assoc()) {
		$title = $row['title'];
		$id = $row['id'];
		$subcategory = $row['subcategory'];

		$title = str_replace(" ", "-", $title);
		$title = strtolower($title);

		$url = BASE_URL . "$subcategory/$title/pid-$id";
		echo "$url<br/>";
		$query = "update master set url = '$url' where id=$id";
		$connection->query($query);
	}
}


?>