<?php 
include_once "connection.php";

if(isset($_POST['submit'])){
          //move the uploaded image
          $target_dir = 'uploads/';
          $target_file = $target_dir . basename($_FILES['productImage']['name']);

          $fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
          
          $check = getimagesize($_FILES['productImage']['tmp_name']);

          if($check !== false){
                $upload_ok = 1;
            if($fileType == 'jpg' OR $fileType == 'jpeg' OR $fileType == 'png'){
                $upload_ok = 1;
                $query = "INSERT INTO adminproducts(productName,productPrice,productDescription,productImage) VALUES(?,?,?,?);";
                $stmt = mysqli_prepare($connection,$query);
                $stmt->bind_param("ssss", $_POST['productName'],$_POST['productPrice'],$_POST['productDescription'],$target_file);
                $stmt->execute();
                $stmt->close();
                    $connection->close();
            } else {
                    echo "<script type='text/javascript'>
                             window.location.href = 'products.php?error=Image format is not supported';
                         </script>";
                         $upload_ok = 0;
            }
          } else {
            echo "<script type='text/javascript'>
                        window.location.href = 'products.php?error=File is not an image';
                  </script>";
                  $upload_ok = 0;
          }
          if($upload_ok == 1){
          if(move_uploaded_file($_FILES['productImage']['tmp_name'], $target_file)){
            echo "<script type='text/javascript'>
                window.location.href = 'products.php?new=Product has been added successfully';
          </script>";
        }
    }
} 

        
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <style>
        body{
            background-color: #FF730065;
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
    <form method="post" enctype="multipart/form-data">
        <img src="../../assets/icons/add-large.png" alt="">
        <h1>ADD PRODUCT</h1>
        <input type="text" name="productName" placeholder="Product Name" autofocus required><br>
        <input type="text" name="productPrice" placeholder="Product Price" required><br>
        <input type="text" name="productDescription" placeholder="Product Description" required><br>
        <input type="file" name="productImage" placeholder="Product Image" required><br>
        <input type="submit" value="ADD" name="submit"><br>
        <button style="width:100%;background-color:#FF3300E7;color:#fff;"><a href="products.php" style="text-decoration:none; color: #fff;">CANCEL</a></button>
    </form>
    
</body>
</html>
