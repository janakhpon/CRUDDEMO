<?php

    include "connection.php";
    if(isset($_GET['s'])){
        $s = $_GET['s'];

        $sql = "SELECT * FROM `info` WHERE `name` LIKE '%$s%' OR `email` LIKE '%$s%' OR `address` LIKE '%$s%'";
        $result = mysqli_query($conn,$sql);
        
        if(mysqli_num_rows($result)){

?>
            
    <table border="1">
    <thead>
        <th>ID</th>
        <th>NAME</th>
        <th>EMAIL</th>
        <th>ADDRESS</th>
        <th>REMOVE</th>
        <th>EDIT</th>
    </thead>

    
<?php
    while($row = mysqli_fetch_assoc($result)){
        echo "<tbody>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "<td>".$row['address']."</td>";
        echo "<td><a href=
        'delete.php?id=".$row['id'].
        "'
        onClick=
        'return confirm(".'"Sure?"'.");'

        >DELETE</a></td>";

        echo "<td><a href=
        'update.php?id=".$row['id']."'
        >UPDATE</a></td>";

        echo "/<tbody>";
    }

   ?>
    </table>
        
<?php
        }else{
            echo "<p>no result founds !</p>";
            exit();
        }
    }

?>