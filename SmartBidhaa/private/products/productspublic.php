<?php  

 if(isset($_GET['success'])){
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
                    <p>'.$_GET['success'].'</p>
                </div>
    
                <div class="success-button">
                    <button onclick="disappear()">Ok</button>
                </div>
        </div>
    
        <script>
            var cont = document.getElementById("success");
    
            function disappear(){
                cont.style = "top:-200px;";
                window.location.href = "productspublic.php";
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
    <title>Our Products</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
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
            padding: 16px 24px;
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

                img{
                    width: 96px;
                    height:96px;
                    border-radius: 20px;   
                }

                .heading{
                    margin-top:-40px;
                    font-size:14px;
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
            }
    

    </style>
</head>
<body>

    <div class="navbar">
        <div class="logo">
            <h1>SmartBidhaa</h1>
        </div>
        <div class="navlinks">
            <ul>
            <li><img src="../../assets/icons/home.png" alt="home"><a href="../../public/index.html">Home</a></li>
                <li><img src="../../assets/icons/about.png" alt="about"><a href="../../public/index.html#about-section">About Us</a></li>
                <li><img src="../../assets/icons/file-small.png" alt="order"><a href="../../public/placeorder.php">Place Order</a></li>
                <li><img src="../../assets/icons/contacts.png" alt="contacts"><a href="../../public/index.html#footer">Contacts</a></li>
                <li><img src="../../assets/icons/user.png" alt="login"><a href="../../private/login/index.php" class="login">Login as Admin</a></li>
            </ul>
        </div>
    </div>

    <h1 style="text-align:center;margin-top:150px;" class="heading">Our Products</h1>

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
                    <img src="'.$row['productImage'].'" alt="product1">
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
                                <a href="../../public/order.php?id='.$row['id'].'" class="update">Order</a>
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