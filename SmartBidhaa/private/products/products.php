<?php  

 if(isset($_GET['update'])){
    echo '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Success message</title>
    </head>
    
            <style>
                   body{
                    background-color: rgba(0,0,0,0.5);
                    font-family: Arial, Helvetica, sans-serif;
                   } 
    
                   .success-message{
                        position: absolute;
                        border-radius:20px;
                        max-width: 600px;
                        width:500px;
                        margin:0 34%;
                        top: 0;
                        background-color: #fff;
                        z-index:100000000000;
                   }
    
                   .success-message h1{
                    text-align: center;
                    margin-bottom: 12px;
                    color:#ff7200;
                   }
    
                   .success-content p{
                    text-align: center;
                    margin:4px 10px; 
                   }
    
                   .success-button button{
                    margin:3px 43%;
                    padding:5px 22px;
                    border: none;
                    border-radius: 10px;
                    background-color:#ff7200;
                    color: #fff;
                    margin-bottom:12px;
                    cursor:pointer;
                    transition: .4s ease-in-out;
                   }
    
                   .success-button button:hover{
                    background-color: #333;
    
                   }

                   
                   @media (max-width:576px){
                   
                    .success-message{
                        width:300px;
                        margin:0 9%;
                    }

                    .success-message h1{
                        font-size:12px;
                    }
                    
                    .success-message p{
                        font-size:8px;
                    }

                    .success-button button{
                        font-size:8px;
                       }


                }
            </style>
    <body>
        <div class="success-message" id="success">
                <div class="success-heading">
                    <h1>SUCCESS!</h1>
                </div> 
    
                <div class="success-content">
                    <p>'.$_GET['update'].'</p>
                </div>
    
                <div class="success-button">
                    <button onclick="disappear()">Ok</button>
                </div>
        </div>
    
        <script>
            var cont = document.getElementById("success");
    
            function disappear(){
                cont.style = "top:-200px;";
                window.location.href = "products.php";
            }
            
        </script>
    </body>
    </html>
    ';
 }


?>
<?php
if(isset($_GET['new'])){
    echo '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Success message</title>
    </head>
    
            <style>
                   body{
                    background-color: rgba(0,0,0,0.5);
                    font-family: Arial, Helvetica, sans-serif;
                   } 
    
                   .success-message{
                        position: absolute;
                        border-radius:20px;
                        max-width: 600px;
                        width:500px;
                        margin:0 34%;
                        top: 0;
                        background-color: #fff;
                        z-index:100000000;
                   }
    
                   .success-message h1{
                    text-align: center;
                    margin-bottom: 12px;
                    color:#ff7200;
                   }
    
                   .success-content p{
                    text-align: center;
                    margin:4px 10px; 
                   }
    
                   .success-button button{
                    margin:3px 43%;
                    padding:5px 22px;
                    border: none;
                    border-radius: 10px;
                    background-color: #ff7200;
                    color: #fff;
                    margin-bottom:12px;
                    cursor:pointer;
                    transition: .4s ease-in-out;
                   }
    
                   .success-button button:hover{
                    background-color: #333;
    
                   }

                   
                   @media (max-width:576px){
                   
                    .success-message{
                        width:300px;
                        margin:0 9%;
                    }

                    .success-message h1{
                        font-size:12px;
                    }
                    
                    .success-message p{
                        font-size:8px;
                    }

                    .success-button button{
                        font-size:8px;
                       }


                }
            </style>
    <body>
        <div class="success-message" id="success">
                <div class="success-heading">
                    <h1>SUCCESS</h1>
                </div> 
    
                <div class="success-content">
                    <p>'.$_GET['new'].'</p>
                </div>
    
                <div class="success-button">
                    <button onclick="disappear()">Ok</button>
                </div>
        </div>
    
        <script>
            var cont = document.getElementById("success");
    
            function disappear(){
                cont.style = "top:-200px;";
                window.location.href = "products.php";
            }
            
        </script>
    </body>
    </html>
    ';
 }


?>

<?php
if(isset($_GET['delete'])){
    echo '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Success message</title>
    </head>
    
            <style>
                   body{
                    background-color: rgba(0,0,0,0.5);
                    font-family: Arial, Helvetica, sans-serif;
                   } 
    
                   .success-message{
                        position: absolute;
                        border-radius:20px;
                        max-width: 600px;
                        width:500px;
                        margin:0 34%;
                        top: 0;
                        background-color: #fff;
                        z-index:100000000;
                   }
    
                   .success-message h1{
                    text-align: center;
                    margin-bottom: 12px;
                    color:#ff7200;
                   }
    
                   .success-content p{
                    text-align: center;
                    margin:4px 10px; 
                   }
    
                   .success-button button{
                    margin:3px 43%;
                    padding:5px 22px;
                    border: none;
                    border-radius: 10px;
                    background-color: #ff7200;
                    color: #fff;
                    margin-bottom:12px;
                    cursor:pointer;
                    transition: .4s ease-in-out;
                   }
    
                   .success-button button:hover{
                    background-color: #333;
    
                   }

                   
                   @media (max-width:576px){
                   
                    .success-message{
                        width:300px;
                        margin:0 9%;
                    }

                    .success-message h1{
                        font-size:12px;
                    }
                    
                    .success-message p{
                        font-size:8px;
                    }

                    .success-button button{
                        font-size:8px;
                       }


                }
            </style>
    <body>
        <div class="success-message" id="success">
                <div class="success-heading">
                    <h1>SUCCESS</h1>
                </div> 
    
                <div class="success-content">
                    <p>'.$_GET['delete'].'</p>
                </div>
    
                <div class="success-button">
                    <button onclick="disappear()">Ok</button>
                </div>
        </div>
    
        <script>
            var cont = document.getElementById("success");
    
            function disappear(){
                cont.style = "top:-200px;";
                window.location.href = "products.php";
            }
            
        </script>
    </body>
    </html>
    ';
 }


?>

<?php  

 if(isset($_GET['login'])){
    echo '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Success message</title>
    </head>
    
            <style>
                   body{
                    background-color: rgba(0,0,0,0.5);
                    font-family: Arial, Helvetica, sans-serif;
                   } 
    
                   .success-message{
                        position: absolute;
                        border-radius:20px;
                        max-width: 600px;
                        width:500px;
                        margin:0 34%;
                        top: 0;
                        background-color: #fff;
                        z-index:100000000;
                   }
    
                   .success-message h1{
                    text-align: center;
                    margin-bottom: 12px;
                    color:#ff7200;
                   }
    
                   .success-content p{
                    text-align: center;
                    margin:4px 10px; 
                   }
    
                   .success-button button{
                    margin:3px 43%;
                    padding:5px 22px;
                    border: none;
                    border-radius: 10px;
                    background-color:#ff7200;
                    color: #fff;
                    margin-bottom:12px;
                    cursor:pointer;
                    transition: .4s ease-in-out;
                   }
    
                   .success-button button:hover{
                    background-color: #333;
    
                   }


                   @media (max-width:576px){
                   
                    .success-message{
                        width:300px;
                        margin:0 9%;
                    }

                    .success-message h1{
                        font-size:12px;
                    }
                    
                    .success-message p{
                        font-size:8px;
                    }

                    .success-button button{
                        font-size:8px;
                       }


                }
            </style>
    <body>
        <div class="success-message" id="success">
                <div class="success-heading">
                    <h1>SUCCESS</h1>
                </div> 
    
                <div class="success-content">
                    <p>'.$_GET['login'].'</p>
                </div>
    
                <div class="success-button">
                    <button onclick="disappear()">Ok</button>
                </div>
        </div>
    
        <script>
            var cont = document.getElementById("success");
    
            function disappear(){
                cont.style = "top:-200px;";
                window.location.href = "products.php";
            }
            
        </script>
    </body>
    </html>
    ';
 }


?>

<?php  

 if(isset($_GET['error'])){
    echo '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Success message</title>
    </head>
    
            <style>
                   body{
                    background-color: rgba(0,0,0,0.5);
                    font-family: Arial, Helvetica, sans-serif;
                   } 
    
                   .success-message{
                        position: absolute;
                        border-radius:20px;
                        max-width: 600px;
                        width:500px;
                        margin:0 34%;
                        top: 0;
                        background-color: #fff;
                        z-index:100000000;
                   }
    
                   .success-message h1{
                    text-align: center;
                    margin-bottom: 12px;
                    color:red;
                   }
    
                   .success-content p{
                    text-align: center;
                    margin:4px 10px; 
                   }
    
                   .success-button button{
                    margin:3px 43%;
                    padding:5px 22px;
                    border: none;
                    border-radius: 10px;
                    background-color:red;
                    color: #fff;
                    margin-bottom:12px;
                    cursor:pointer;
                    transition: .4s ease-in-out;
                   }
    
                   .success-button button:hover{
                    background-color: #333;
    
                   }


                   @media (max-width:576px){
                   
                    .success-message{
                        width:300px;
                        margin:0 9%;
                    }

                    .success-message h1{
                        font-size:12px;
                    }
                    
                    .success-message p{
                        font-size:8px;
                    }

                    .success-button button{
                        font-size:8px;
                       }


                }
            </style>
    <body>
        <div class="success-message" id="success">
                <div class="success-heading">
                    <h1>ERROR!</h1>
                </div> 
    
                <div class="success-content">
                    <p>'.$_GET['error'].'</p>
                </div>
    
                <div class="success-button">
                    <button onclick="disappear()">Ok</button>
                </div>
        </div>
    
        <script>
            var cont = document.getElementById("success");
    
            function disappear(){
                cont.style = "top:-200px;";
                window.location.href = "products.php";
            }
            
        </script>
    </body>
    </html>
    ';
 }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Products</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-color: bisque;
        }

        /*for the navbar*/
        .navbar{
            display: flex;
            justify-content: space-between;
            margin-bottom:30px;
            border-bottom: 2px solid #FF73007A;
            background-color:#FF730093;
            position: fixed;
            width:100%;
            top:0;
            left:0;
            z-index: 1000;

        }

        .logo{
            padding-left: 12px;
        }

        .logo h1{
            color:#fff;
        }

        .navlinks{
            width: 700px;
            margin-top: 8px;
            float:right;
        }

        .navlinks ul{
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            list-style: none;
        }

        .navlinks ul li {
            text-align: right;
        }

        .navlinks ul li img{
            height: 20px;
            width:20px;
            float: left;
            padding-right:3px;
        }

        .navlinks ul li a, .navlinks ul li a:visited{
            text-decoration: none;
            font-size: 18px;
            transition: .4s ease-in-out;
            color: #fff;
        }

        .navlinks ul li a.logout{
           color: #333;
           padding-left: 5px;
        }

        .navlinks ul li a.logout:hover{
            color:#fff;
        }

        .navlinks ul li a:hover{
            color:#333;
        }

        /* for the entire contents */
        .columns{
            display: flex;
            flex-direction: column;
        }

        .column {
            display: flex;
            width: 90%;
            height: 300px;
            background-color: #FF73003B;
            border: none;
            border-radius:20px;
            margin: 10px auto;
            padding: 12px;
        }

        .column:hover{
                box-shadow:2px 2px 2px 2px #FF730027;
                cursor:pointer;
            }

        .product-name h1{
            text-align: center;
            margin-bottom: 34px;
            font-size: 38px;
            font-weight: 700;
        }

        .product-image{
            height: 300px;
            width: 300px;
            margin-left:20px;
            margin-right: 20px;
            margin-top: 7px;
        }

        .product-content{
            width:80%;
            padding: 12px 18px;
        }

        .actions{
            display: flex;
            width: 300px;
            justify-content: space-around;
        }

        .price-action .price{
            padding-top: 14px;
        }

        .actions a:link{
            margin-top: 18px;
            text-decoration: none;
            border-radius: 12px;
            font-size: 24px;
        }

        .actions .update{
            background-color: #73FF00;
            text-align: center;
            color: #fff;
            height:32px;
            padding: 12px 18px;
        }

        .actions .delete{
            background-color: #F35A1D;
            text-align: center;
            color: #fff;
            height:32px;
            padding: 12px 18px;
        }

        img{
            width: 300px;
            height:290px;
            border-radius: 20px;   
        }

        .price-action{
            display: flex;
            justify-content: space-evenly;
        }

        
      
       /*for literally small-devices*/
       @media (max-width:532px){

  
        .navlinks{
                width: 400px;
            }

            .logo{
                margin-top: 19px;
                font-size: 5px;
            }

            .navlinks ul li img{
                height: 1px;
                width:1px;
                float: left;
                padding-right:3px;
                visibility: hidden;
            }

            .navlinks ul li a, .navlinks ul li a:visited{
                font-size: 6px;
                transition: .4s ease-in-out;
                color:#333;
            }

            .navlinks ul li a.login{
                color: #ff7300;
                padding-left: 1px;
            }

            .navlinks ul li a:hover,.logo{
                color:#ff7300b0;
            }
            /* for the entire contents of literally small devices */
            .columns{
                display: flex;
                flex-direction: column;
            }

            .column {
                display: flex;
                width: 90%;
                height: 100px;
                background-color: #FF73003B;
                border: none;
                border-radius:20px;
                margin: 10px auto;
                padding: 12px;
            }


            .product-name{
                display:flex;
                flex-direction:column;
                height:80px;
            }

            .product-name h1{
                text-align: center;
                margin-bottom: 5px;
                font-size: 16px;
                font-weight: 700;
                margin-top:-15px;
            }

            .product-name p{
                font-size:8px;
                margin-left:18px;
            }

            .product-image{
                height: 50px;
                width: 50px;
                margin-left:20px;
                margin-right: 28px;
                margin-top: 7px;
            }

            .product-content{
                width:70%;
                padding: 5px 8px;
            }

            .actions{
                display: flex;
                width: 60px;
                justify-content: space-around;
            }

            .price-action{
                display: flex;
                justify-content: space-evenly;
                font-size:12px;
                margin-top:-26px;
            }

            .price-action .price{
                padding-top: 14px;
                font-size:7px;
            }

            .actions a:link{
                margin-top: 18px;
                text-decoration: none;
                border-radius: 12px;
                font-size: 12px;
                height:12px;
            }

            .actions .update{
                background-color: #73FF00;
                text-align: center;
                color: #fff;
                padding: 3px 5px;
            }

            .actions .delete{
            background-color: #F35A1D;
            text-align: center;
            color: #fff;
            padding: 3px 5px;
            margin-left:4px;
        }


            img{
                width: 96px;
                height:96px;
                border-radius: 20px;   
            }

            .heading{
                margin-top:-40px;
                font-size:14px;
            }

            .username {
                font-size:8px;
                margin-left:13px;
                margin-top:16px;
            }

        }

        @media (min-width:520px) and (max-width:719.9999px){
                
                
                .navlinks ul li img{
                    height: 1px;
                    width:1px;
                    float: left;
                    padding-right:3px;
                    visibility: hidden;
                }
                
                .navlinks{
                width: 400px;
            }

            .logo{
                margin-top: 19px;
                font-size: 5px;
            }

            .navlinks ul li img{
                height: 1px;
                width:1px;
                float: left;
                padding-right:3px;
                visibility: hidden;
            }

            .navlinks ul li a, .navlinks ul li a:visited{
                font-size: 9px;
                transition: .4s ease-in-out;
                color:#333;
            }

            .navlinks ul li a.login{
                color: #ff7300;
                padding-left: 1px;
            }

            .navlinks ul li a:hover,.logo{
                color:#ff7300b0;
            }
                
                img {
                    width:100px;
                    height:100px;
                    margin-left:-10px;
                    margin-top:-7px;
                }

                .heading{
                    margin-top:-40px;
                    font-size:14px;
                }


                /* for the entire contents of literally small devices */
                .columns{
                    display: flex;
                    flex-direction: column;
                }

                .column {
                    display: flex;
                    width: 90%;
                    height: 100px;
                    background-color: #FF73003B;
                    border: none;
                    border-radius:20px;
                    margin: 10px auto;
                    padding: 12px;
                }

                .product-name{
                    display:flex;
                    flex-direction:column;
                    height:80px;
                }

                .product-name h1{
                    text-align: center;
                    margin-bottom: 5px;
                    font-size: 16px;
                    font-weight: 700;
                    margin-top:-15px;
                }

                .product-name p{
                    font-size:8px;
                    margin-left:18px;
                }

                .product-image{
                    height: 50px;
                    width: 50px;
                    margin-left:20px;
                    margin-right: 28px;
                    margin-top: 7px;
                }

                .product-content{
                    width:70%;
                    padding: 5px 8px;
                }

                .actions{
                    display: flex;
                    width: 60px;
                    justify-content: space-around;
                }
                
                .price-action{
                    display: flex;
                    justify-content: space-evenly;
                    font-size:12px;
                    margin-top:-26px;
                }

                .price-action .price{
                    padding-top: 14px;
                    font-size:10px;
                }

                .actions a:link{
                    margin-top: 18px;
                    text-decoration: none;
                    border-radius: 12px;
                    font-size: 12px;
                    height:12px;
                }

                .actions .update{
                    background-color: #73FF00;
                    text-align: center;
                    color: #fff;
                    padding: 8px 10px;
                }

                .actions .delete{
                    background-color: #FF5E00;
                    text-align: center;
                    color: #fff;
                    margin-left:3px;
                    padding: 8px 10px;
                }

                .username{
                    margin-left:12px;
                    font-size:12px;
                }
            }

            @media (min-width:720px) and (max-width:809.9999px){
                
                .navlinks ul li img{
                    height: 1px;
                    width:1px;
                    float: left;
                    padding-right:3px;
                    visibility: hidden;
                }
                
                
                img {
                    width:160px;
                }

                .navlinks ul li a, .navlinks ul li a:visited{
                    font-size: 14px;
                    transition: .4s ease-in-out;
                    color:#333;
            }

                .username{
                    margin-left:18px;
                    font-size:12px;
                    margin-top:20px;
                }
            }

            @media (min-width:810px) and (max-width:1280px) {
                img{
                    width:200px;
                    height:200px;
                    margin-top:32px;
                }

                .navlinks ul li img{
                    height: 1px;
                    width:1px;
                    float: left;
                    padding-right:3px;
                    visibility: hidden;
            }

                .navlinks ul li a, .navlinks ul li a:visited{
                    font-size: 14px;
                    transition: .4s ease-in-out;
                    color:#333;
            }

                .username{
                    margin-left:18px;
                    font-size:12px;
                    margin-top:20px;
                }
        }
    


    

    </style>
</head>
<body>

    <div class="navbar">
        <div class="logo">
            <h1>SmartBidhaa</h1>
        </div>
        <?php include_once'connection.php'; 
                    $query = 'SELECT * FROM adminaccount';
                    $result = mysqli_query($connection,$query); 
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                    echo '
                        <h2 style="font-family:cursive" class="username">Welcome again, '.$row["username"].' !</h2>
                        <div class="navlinks">
                            <ul>
                <li><img src="../../assets/icons/add-small.png" alt="add"><a href="addproduct.php">Add Product</a></li>
                <li><img src="../../assets/icons/file-small.png" alt="view"><a href="vieworders.php">View Orders</a></li>
                
                         <li><img src="../../assets/icons/password.png" alt="change"><a href="../login/changepassword.php?id='.$row["id"];
                          }
                        }
                          ?> ">Change Password</a></li>
                <li><img src="../../assets/icons/logout.png" alt="exit"><a href="../../public/index.html" class="logout">Log Out</a></li>
            </ul>
        </div>
    </div>

    <h1 style="text-align:center;margin-top:150px;" class="heading">Available Products</h1>

<?php
    include_once "connection.php";

    $query = "SELECT * FROM adminproducts";
    $result = mysqli_query($connection, $query);

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)) {
        echo '<div class="container">
        <div class="columns">
            <div class="column">
                <div class="product-image">
                    <img src="'.$row['productImage'].'" alt="productImage">
                </div>
                <div class="product-content">
                    <div class="top-part">
                        <div class="product-name">
                            <h1 style="font-family:cursive;">'.$row['productName'].'</h1>
                            <p>'.$row['productDescription'].'</p>
                        </div>
                        <div class="price-action">
                            <div class="price">
                                <h2>Price:'.$row['productPrice'].'</h2>
                            </div>
                            <div class="actions">
                                <a href="update.php?id='.$row['id'].'" class="update">Update</a>
                                <a href="delete.php?id='.$row['id'].'" class="delete">Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>';
 }
    } else {
        echo "No products available";
    }

?>

</body>
</html>