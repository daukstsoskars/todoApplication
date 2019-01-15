<?php
require_once("db_connect.php");
?>

<head><title>Page Title</title></head>

<body>
    <h1>TODO List</h1>

    <form onsubmit="checkField()" method="post" action="add.php">
    <!-- <form onsubmit="addEvent(document.getElementById('event_input_box').value)"></form> -->
    Add Event: <input type="text" id="event_input_box" name="event"><br>
    <input type="submit">
    </form>
    <h1>Your Events</h1>

    <ul id="event_list">
    <?php
    db();
    global $conn;

    $query = "SELECT id,name FROM event_table";
            $result = mysqli_query($conn, $query);
            //check if there’s any data inside the table
            if(mysqli_num_rows($result) >= 1){
                while($row = mysqli_fetch_array($result)){
                $id = $row['id'];
                $name = $row['name'];

    ?>

        <li>
            <b>#<?php echo $id ?></b>   <?php echo $name ?>  -------  <b><a href="delete.php?id=<?php echo $id ?>">DELETE</a></b>
            </a>
        </li>

    <?php
        }
    }
    ?>
    </ul>

</body>
<script>

    function checkField(){
        var input = document.getElementById('event_input_box').value;
        if(input == ""){
            alert("Your event name is empty");
        }
    }

</script>

</html>