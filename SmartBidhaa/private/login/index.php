
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
                    <h1>ERROR</h1>
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
                window.location.href = "index.php";
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
    <title>Admin Login</title>
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

        /*for literally small screens*/
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
    <form action="login.php" method="post">
        <img src="../../assets/icons/admin-small.png" alt="">
        <h1>ADMIN</h1>
            <input type="text" name="username" autocomplete="off" placeholder="Enter Username"><br>
            <input type="password" name="password" autocomplete="off" placeholder="Enter Password"><br>
        <input type="submit" value="LOGIN" name="submit">
    </form>
    
</body>
</html>