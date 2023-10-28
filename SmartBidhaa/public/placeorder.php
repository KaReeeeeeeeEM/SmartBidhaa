<?php 
include_once "connection.php";

if(isset($_POST['submit'])){

$query = "INSERT INTO orders(clientName, productName,clientLocation,quantity,clientContact) VALUES(?,?,?,?,?);";
$stmt = mysqli_prepare($connection,$query);
$stmt->bind_param("sssss", $_POST['clientName'],$_POST['productName'],$_POST['clientLocation'],$_POST['quantity'],$_POST['clientContact']);
$stmt->execute();
$stmt->close();

echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delivered</title>
</head>
<style>
    .success{
        background-color: #FF73003F;
        font-family: Arial, Helvetica, sans-serif;
        width: 700px;
        margin: auto;
        display: flex;
        flex-direction: column;
        justify-content: center;
        border-radius: 10px;
    }

    .success-image img{
        margin: 14px 45% 0px;
    }

    .title h2{
        text-align: center;
    }

    .success-description p{
        text-align: center;
    }

    .success-button button{
        margin: 10px 40%;
        padding: 8px 48px;
        font-size: 18px;
        background-color: #ff7300a2;
        border: none;
        color: #fff;
        border-radius: 15px;
    }

</style>
<body>
    <div class="success"  id="ok">
        <div class="success-image">
            <img src="../assets/icons/tick.png" alt="check">
        </div>
        <div class="success-content">
            <div class="title">
                <h2>SUCCESS!</h2>
            </div>
            <div class="success-description">
                <p>Your order has been placed succesfully</p>
            </div>
        </div>

    </div>



    <script>
        var block = document.getElementById("ok");
        window.location.href = "../private/products/productspublic.php";
        function disappear(){
            ok.style= "position:absolute;top:-500px";
        }
    </script>
</body>
</html>';

$connection->close();

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Place Order</title>
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
    <form method="post">
        <img src="../assets/icons/price.png" alt="order">
        <h1>MAKE ORDER</h1>
        <input type="text" name="clientName" placeholder="Client Name"><br>
        <input type="text" name="productName" placeholder="Product Name"><br>
        <input type="text" name="clientLocation" placeholder="Clients Location"><br>
        <input type="number" name="quantity" placeholder="Enter Quantity"><br>
        <input type="contact" name="clientContact" placeholder="Client Contact"><br>
        <input type="submit" value="PLACE ORDER" name="submit"><br>
        <button style="width:100%;background-color:#FF3300E7;color:#fff;"><a href="index.html" style="text-decoration:none; color: #fff;">CANCEL</a></button>
    </form>
    
</body>
</html>
