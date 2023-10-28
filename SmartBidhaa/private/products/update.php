<?php 
include_once "connection.php";
//retrieving data to the form
$id = $_GET["id"];
$query = "SELECT * FROM adminproducts where id = '$id'";
$result = mysqli_query($connection,$query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>
    <style>
        body{
            background-color: #ddd;
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
    <form method="post">
        <img src="../../assets/icons/update.png" alt="">
        <h1>UPDATE PRODUCT</h1>

        <?php 
        if(mysqli_num_rows($result) > 0) { 
            while($row = mysqli_fetch_assoc($result)){
            echo '
        <input type="text" name="productName" placeholder="Product Name" value = '.$row["productName"].' ><br>
        <input type="text" name="productPrice" placeholder="Product Price" value = '.$row["productPrice"].'><br>
        <input type="text" name="productDescription" placeholder="Product Description" value = '.$row["productDescription"].'><br>
        <input type="file" name="productImage" placeholder="Product Image" value = '.$row["productImage"].'><br>
        <input type="submit" value="UPDATE" name="submit"><br>
        <button style="width:100%;background-color:#FF3300E7;color:#fff;"><a href="products.php" style="text-decoration:none; color: #fff;">CANCEL</a></button>
        </form>   
</body>
</html>';
        }
    }
?>

<?php
  //on updating
if(isset($_POST['submit'])){
    $id = $_GET["id"];
    $productName = $_POST['productName'];
    $productPrice = $_POST['productPrice'];
    $productDescription = $_POST['productDescription'];
    $productImage = "../../assets/images/".$_POST['productImage'];

    //request and execute the query
    $query = "UPDATE adminproducts SET productName = '$productName', productPrice ='$productPrice', productDescription ='$productDescription', productImage ='$productImage'  WHERE id = $id;";
    $result2 = mysqli_query($connection,$query);
    
    if($result2){
        echo "<script type='text/javascript'>
                    window.location.href = 'products.php?update=Product updated successfully';
              </script>";
        $connection->close();
    } else {
        echo "<script type='text/javascript'>
                    alert('Update Failed!');
                    window.location.href = 'products.php';
              </script>";
    }
    }

?>