<?php
if(isset($_POST['username'])){
    $server="localhost";
    $username="root";
    $password="";
    $database="omnifood";

    $con=mysqli_connect($server,$username,$password,$database);
    if(!$con)
    {
        echo "not connected";
        die(mysqli_connect_error());
    }
    else{
    $name=$_POST["username"];
    $Password=$_POST["password"];
    $Email=$_POST["Email"];
    $sql="INSERT INTO `omnifood`.`signup`(`username`, `password`, `Email`) VALUES('$name','$Password','$Email);";  
    $result=mysqli_query($con,$sql);
    if($result==true){
        echo "true";
      }
    if($con->query($sql)==true){
              
        // header("Location: Signup.php");
       
        echo 'working'  ; 
          
      }
      else{
        die(mysqli_connect_error());
      }
    }
    //   $con->close();
    }
    
// $con->close();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Omnifood is a premium food delivery service with the mission to bring affordable and healty meals to as many people as possible.">
        
        <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/grid.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/animate.css">
        <link rel="stylesheet" type="text/css" href="resources/css/style.css">
        <link rel="stylesheet" type="text/css" href="resources/css/queries.css">
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,300italic' rel='stylesheet' type='text/css'>
        <title>Signup || OmniFood</title>
        
        <link rel="apple-touch-icon" sizes="57x57" href="/resources/favicons/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/resources/favicons/apple-touch-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/resources/favicons/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/resources/favicons/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/resources/favicons/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/resources/favicons/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/resources/favicons/apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/resources/favicons/apple-touch-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/resources/favicons/apple-touch-icon-180x180.png">
        <link rel="icon" type="image/png" href="/resources/favicons/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="/resources/favicons/favicon-194x194.png" sizes="194x194">
        <link rel="icon" type="image/png" href="/resources/favicons/favicon-96x96.png" sizes="96x96">
        <link rel="icon" type="image/png" href="/resources/favicons/android-chrome-192x192.png" sizes="192x192">
        <link rel="icon" type="image/png" href="/resources/favicons/favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="/resources/favicons/manifest.json">
        <link rel="shortcut icon" href="/resources/favicons/favicon.ico">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="msapplication-TileImage" content="/resources/favicons/mstile-144x144.png">
        <meta name="msapplication-config" content="/resources/favicons/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">
        <style>
            #parent_form{
                text-align: center;
                margin-left: auto;
                width:300px;
                margin-top: 150px;
                margin-right: 30px;

            }
            #btn{
                padding:10px;
                background-color: rgb(243, 243, 245);
                color: rgb(0, 0, 0);

            }
            #btn:hover{
                font-size:22px;
                background-color: black;
                color:white;
            }
        </style>
    </head>
<body>
    <header>
        <nav>
            <div class="row">
                <img src="resources/img/logo-white.png" alt="Omnifood logo" class="logo">
                <img src="resources/img/logo.png" alt="Omnifood logo" class="logo-black">
                <ul class="main-nav js--main-nav">
                    <li><a href="#features">Food delivery</a></li>
                    <li><a href="#works">How it works</a></li>
                    <li><a href="#cities">Our cities</a></li>
                    <li><a href="Signup.html">Sign up</a></li>
                </ul>
                <a class="mobile-nav-icon js--nav-icon"><i class="ion-navicon-round"></i></a>
            </div>
        </nav>
        <div class="hero-text-box">
            <h1>Goodbye junk food.<br>Hello super healthy meals.</h1>
            <a class="btn btn-full js--scroll-to-plans" href="#">I'm hungry</a>
            <a class="btn btn-ghost js--scroll-to-start" href="#">Show me more</a>
        </div>
        <div id="parent_form">
            <!-- parent -->
            <form action="Signup.php" method="post">
                <input type="text" name="username" placeholder="Username">
                &nbsp;
                <input type="text" name="password" placeholder="Password">
                &nbsp;
                <input type="email" name="Email" placeholder="Enter our Email">
                &nbsp;
                <br>
                <button type="submit" id="btn">Sign Up</button>
            </form>
        </div>
    </header>
    <br>

</body>
</html>