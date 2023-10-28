<?php 
if(isset($_POST['order'])){
    include_once "connection.php";
    $query = "INSERT INTO orders(clientName, productName,clientLocation,quantity,clientContact) VALUES(?,?,?,?,?);";
    $stmt = mysqli_prepare($connection,$query);
    $stmt->bind_param("sssss",$_POST['clientName'],$_POST['productName'],$_POST['clientLocation'],$_POST['quantity'],$_POST['clientContact']);
    $stmt->execute();
    $stmt->close();

        echo '
            <script>
                window.location.href = "../private/products/productspublic.php?success=Your order has been placed successfully!";
            </script>';
    }
?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
    <style>
        body{
            background-color: #FF730075;
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

        input,button {
            height: 46px;
            border: none;
            border-radius: 14px;
            background-color: #ddd;
            text-align: center;
            font-size: 16px;
            padding-left: 10px;
        }

        input[type=submit],button{
            background-color: #ff7300de;
            color: #fff;
            margin-top:30px;
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
<?php 
include_once "connection.php";
//retrieving data to the form
$id = $_GET["id"];
$query = "SELECT * FROM adminproducts where id = '$id' LIMIT 1";
$result = mysqli_query($connection,$query); ?>

    <form method="post">
        <img src="../assets/icons/price.png" alt="order">
        <h1>MAKE ORDER</h1>
        <input type="text" name="clientName" placeholder="Client Name"><br>

        <?php 
        if(mysqli_num_rows($result) > 0) { 
            while($row = mysqli_fetch_assoc($result)){
            echo '
        <input type="text" name="productName" placeholder="Product Name" value = "'.$row["productName"];}} ?>"><br>
        <input type="text" name="clientLocation" placeholder="Clients Location"><br>
        <input type="number" name="quantity" placeholder="Enter Quantity"><br>
        <input type="contact" name="clientContact" placeholder="Client Contact"><br>
        <input type="submit" value="PLACE ORDER" name="order"><br>
        <button style="width:100%;background-color:#FF3300E7;color:#fff;"><a href="../private/products/productspublic.php" style="text-decoration:none; color: #fff;">CANCEL</a></button>
    </form>
    
</body>
</html>
