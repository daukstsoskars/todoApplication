<?php
require_once("db_connect.php");
$event_name = $_POST["event"];

if(!isset($event_name) || trim($event_name) == '')
{
   echo "You did not fill out the required fields.";
   header("Location: http://localhost/todoApp/index.php"); 
}
else{
    db();
    $sql = "INSERT INTO event_table (name) VALUES ('$event_name')";
        
    if ($conn->query($sql) === TRUE) {
        echo $event_name;
        echo "New record created successfully";
        header("Location: http://localhost/todoApp/index.php"); 
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();

?>