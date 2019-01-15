<?php

function db(){
    global $conn;

    $dbhost = "localhost";
    $dbuser = "todoevent";
    $dbpass = "todoevent";
    $db = "todo_event_list_db";

    $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
    return $conn;
}
 
function CloseCon($conn){
    $conn -> close();
}
   
?>