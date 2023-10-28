

<?php 
    include_once "connection.php";
    $id = $_GET['id'];
    //retrieving data to the form
    $query = "SELECT * FROM adminaccount WHERE id = '$id' LIMIT 1;";
    $result = mysqli_query($connection,$query);

    if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo '
                <!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Change Password</title>
                    <style>
                        body{
                            background-color: #ff7300a4;
                        }
                
                        form{
                            width:500px;
                            max-width: 600px;
                            background-color: #fff;
                            display: flex;
                            flex-direction: column;
                            border: none;
                            border-radius: 30px;
                            padding: 14px;
                            margin: 20% auto;
                            font-family: Arial, Helvetica, sans-serif;
                        }
                
                        form img{
                            height: 100px;
                            width: 100px;
                            margin: 5px auto;
                        }
                
                        form h1{
                            text-align: center;
                            padding: 10px 0 25px;
                            font-family: cursive;
                            font-weight: 900;
                        }
                
                        input {
                            height: 46px;
                            border: none;
                            border-radius: 14px;
                            background-color: #ddd;
                            text-align: center;
                            font-size: 16px;
                            padding-left: 10px;
                        }
                
                        input[type=submit]{
                            background-color: #ff7300de;
                            color: #fff;
                            font-size: 18px;
                            font-weight: 900;
                            transition: .4s ease-in-out;
                        }
                
                        input[type=submit]:hover{
                            background-color: #ff7300bb;
                            cursor: pointer;
                        }
                
                        input:focus{
                            border: 2px solid #ff7300a4;
                        }
                                    
                    /*for literally small-devices*/
                    @media (max-width:532px){
                        form{
                            width:300px;
                        }

                        form img{
                        height: 50px;
                        width: 50px;
                        margin: 5px auto;
                    }

                    form h1{
                        text-align: center;
                        font-size:18px;
                        padding: 10px 0 25px;
                        font-family: cursive;
                        font-weight: 900;
                    }

                    input,button {
                        height: 32px;
                        border: none;
                        border-radius: 8px;
                        background-color: #ddd;
                        text-align: center;
                        font-size: 16px;
                        padding-left: 10px;
                    }

                    input[type=submit]{
                        background-color: #ff7300de;
                        color: #fff;
                        margin-top:30px;
                        font-size: 15px;
                        font-weight: 900;
                        transition: .4s ease-in-out;
                    }

                    button{
                        background-color: #ff7300de;
                        color: #fff;
                        margin-top:1px;
                        font-size: 15px;
                        font-weight: 900;
                        transition: .4s ease-in-out;
                    }

                    input[type=submit]:hover{
                        background-color: #ff7300bb;
                        cursor: pointer;
                    }

                    input:focus{
                        border: 2px solid #ff7300a4;
                    }
                    }
                    </style>
                </head>
                <body>
                    <form method="post">
                        <img src="../../assets/icons/password.png" alt="password">
                        <h1>CHANGE PASSWORD</h1>
                            <input type="text" name="username" placeholder="Username" autocomplete="off" value="'.$row["username"].'"><br>
                            <input type="text" name="password" placeholder="Old Password" autocomplete="off" value="'.$row["passkey"].'"><br>
                            <input type="text" name="newPassword" placeholder="Enter New Password" autocomplete="off"><br>
                            <input type="submit" value="UPDATE PASSWORD" name="submit">
                    </form>
                    
                </body>
                </html>
                ';
            }
    } else {
        echo "<script type='text/javascript'>
                    window.location.href = '../products/products.php?error=Error changing the credentials of the admin account';
                </script>";
    }
 ?>

<?php 
    include_once "connection.php";
    if(isset($_POST['submit'])){
        $id = $_GET['id'];
        $username = $_POST["username"];
        $newPassword = $_POST["newPassword"];

    $query = "UPDATE adminaccount SET username ='$username', passkey ='$newPassword' WHERE id='$id'";
    $result = mysqli_query($connection,$query);

    if($result){
        echo "<script type='text/javascript'>
                    window.location.href = '../products/products.php?update=You have successfully changed the credentials of the admin account';
              </script>";            
        mysqli_close($connection);
    } else {
        echo "<script type='text/javascript'>
                    window.location.href = '../products/products.php?error=Error changing credentials the account!';
              </script>";
    }
 }
?>


 
                
                