<?php
    include "connection.php";

    /** HEAD PART ONE */
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "SELECT * FROM `info` WHERE id='$id'";
        $result = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_assoc($result)){


?>


<form method="post">
    
    <div>
    <label for="name">Name</label>
    <input type="text" name="name" id="name" value="
    <?php
    echo $row['name']; 
    ?>  
    " required>
    </div>

    <div>
    <label for="email">Email</label>
    <input type="email" name="email" id="email" value="
    <?php
    echo $row['email']; 
    ?>  
    " required>
    </div>

    <div>
    <label for="address">Address</label>
    <input type="text" name="address" id="address" value="
    <?php
    echo $row['address']; 
    ?>  
    " required>
    </div>

    <div>
    <input type="submit" name="submit">
    </div>

</form>

<?php
/** PROCESSING DATA UPDATE */
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    $sqlupdate = "UPDATE `info` SET `name`='$name', `email`='$email', `address`='$address' WHERE id = '$id'";

    if(mysqli_query($conn, $sqlupdate)){
        header("Location:display.php?updated");
    }
}



/** HEAD PART TWO */
        }
    }else{
        header("Location:display.php");
    }

?>