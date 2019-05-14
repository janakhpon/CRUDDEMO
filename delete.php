<?php
    include "connection.php";
    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $sql = "DELETE FROM `info` WHERE id='$id'";

        if(mysqli_query($conn, $sql)){
            /**header() RENDER BACK TO DISPLAY, display.php */
            header("Location:display.php?REMOVED");
        }
    }
?>