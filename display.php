<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


    <form action="search.php">
    <input type="text" name="s">
    <input type="submit" name="submit">
    </form>

    
    <?php
    include "connection.php";
    $sql = "SELECT * FROM `info`";
    $result = mysqli_query($conn,$sql);
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
</body>
</html>