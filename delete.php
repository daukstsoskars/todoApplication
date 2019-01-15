<?php
require_once("db_connect.php");
$event_name = $_GET["id"];

db();
$sql = "DELETE FROM event_table WHERE id=$event_name";

if ($conn->query($sql) === TRUE) {
    echo "EVENT DELETED";
    header("Location: http://localhost/todoApp/index.php"); 
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>