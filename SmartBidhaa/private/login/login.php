<?php 

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
} 

//establish a connection to the database

$connection = mysqli_connect("localhost", "root", "", "smartbidhaa");

//test if the connection is not succesful
if(!$connection){
    echo "Connection not succesful due to the following errors <br>".mysqli_conn_error();
}

//establish a query to select a value from the database
$query = "SELECT * FROM adminaccount WHERE username = '$username' AND passkey = '$password';";

//send the query to the database
$result = mysqli_query($connection, $query);

if(mysqli_num_rows($result) > 0){
    echo '
    <script type="text/javascript">
        window.location.href = "../products/products.php?login=You have logged into the admin account succesfully";
    </script>
    ';     
} else {
    echo '
    <script type="text/javascript">
        window.location.href = "index.php?error=User not found!";
    </script>
    ';
}
?>