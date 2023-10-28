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
                window.location.href = "vieworders.php";
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
    <title>Placed Orders</title>
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
        }

        .logo{
            padding-left: 12px;
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
            color: #333;
        }

        .navlinks ul li a.logout{
           color: #ff7300;
           padding-left: 5px;
        }

        .navlinks ul li a:hover,.logo{
            color:#ff7300b0;
        }

        /* for the table */
        table {
            width:90%;
            margin: 20px auto;
        }

        tr:nth-child(n){
            background-color: #FF73009A;
        }
        
        tr{
            height:50px;
        }

        th,td{
            text-align:center;
        }
        
        td a{
            text-decoration:none;
            background-color: green;
            color:#fff;
            padding:8px 12px;
            border:none;
            border-radius: 8px;
        }

        /*for literally small-devices*/
       @media (max-width:532px){

            /*navigation bar*/
            .navlinks{
                width: 400px;
            }

            .logo{
                margin-top: 12px;
                font-size: 7px;
            }

            .navlinks ul li img{
                height: 2px;
                width:2px;
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
                padding-left: 5px;
            }

            .navlinks ul li a:hover,.logo{
                color:#ff7300b0;
            }

            .heading{
                font-size:14px;
            }

            .paragraph{
                font-size:10px;
            }

            /*for literally small screen table */
             /* for the table */
            table {
                width:95%;
                margin: 20px auto;
                font-size:12px;
            }

            tr:nth-child(n){
                background-color: #FF73009A;
            }
            
            tr{
                height:50px;
            }

            th,td{
                text-align:center;
            }
            
            td a{
                text-decoration:none;
                background-color: green;
                color:#fff;
                padding:4px 6px;
                border:none;
                font-size:10px;
                border-radius: 8px;
                margin:3px 4px;
            }
       }

    </style>
</head>
<body>

    <div class="navbar">
        <div class="logo">
            <h1><a href="products.php" style="text-decoration:none;color:#ff7200">SmartBidhaa</a></h1>
        </div>
        <div class="navlinks">
            <ul>
                <li><img src="../../assets/icons/add-small.png" alt="add"><a href="addproduct.php">Add Product</a></li>
                <li><img src="../../assets/icons/file-small.png" alt="view"><a href="#">View Orders</a></li>
                <?php include_once'connection.php'; 
                    $query = 'SELECT * FROM adminaccount';
                    $result = mysqli_query($connection,$query); 
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                    echo '
                         <li><img src="../../assets/icons/password.png" alt="change"><a href="../login/changepassword.php?id='.$row["id"];
                          }
                        }
                          ?> ">Change Password</a></li>
                <li><img src="../../assets/icons/user.png" alt="exit"><a href="../../public/index.html" class="logout">Log Out</a></li>
            </ul>
        </div>
    </div>

    <h1 style="text-align:center" class="heading">View Orders</h1>
    <p style="text-align:center;" class="paragraph">Click "Delivered" if the product has been delivered succesfully. Be sure to cross-check before clicking as the order delivered will not be restored</p>

<?php
    include_once "connection.php";

    $query = "SELECT * FROM orders";
    $result = mysqli_query($connection, $query);

    if(mysqli_num_rows($result) > 0){
        echo '<table>
        <tr>
            <th>id</th>
            <th>Client Name</th>
            <th>Product Name</th>
            <th>Client Location</th>
            <th>Quantity</th>
            <th>Client Contacts</th>
            <th>Actions</th>
        </tr>';

        while($row = mysqli_fetch_assoc($result)) {
        echo ' 
                <tr>
                        <td>'.$row['id'].'</td>
                        <td>'.$row['clientName'].'</td>
                        <td>'.$row['productName'].'</td>
                        <td>'.$row['clientLocation'].'</td>
                        <td>'.$row['quantity'].'</td>
                        <td>'.$row['clientContact'].'
                        <td>
                            <a href="delivered.php?id='.$row['id'].'" class="delete">Delivered</a> 
                        </td>
                </tr>';
        }

        echo '</table>
            </body>
         </html>';

    } else {
        echo "<p style='text-align:center;margin-top:20%;font-size:24px;color:#ff7200;'>No orders placed yet!</p>";
    }

?>