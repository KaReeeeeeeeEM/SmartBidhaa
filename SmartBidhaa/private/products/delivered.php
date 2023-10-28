<?php 
    include_once "connection.php";
        $id = $_GET['id'];

    if(isset($_GET['id'])){
        $query = "DELETE FROM orders WHERE id = '$id'";
        mysqli_query($connection,$query);
        
        echo "<script type='text/javascript'>
                    window.location.href = 'vieworders.php?success=Order delivered successfully';
              </script>";
        mysqli_close($connection);
    }

?>