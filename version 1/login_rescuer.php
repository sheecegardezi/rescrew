<?php
error_reporting ( E_ALL );
ini_set ( "display_errors", "On" );
?>

    <?php
$servername = "localhost:3306";
$username = "root";
$password = "sprite3G";
$dbname = "rescrewdb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


//check if all values are passed
	if (
!empty($_POST["first_name"])
&& !empty($_POST["last_name"])
&& !empty($_POST["photo_url"])
&& !empty($_POST["date_of_birth"])                                                                              
&& !empty($_POST["phone"])
&& !empty($_POST["email"])
&& !empty($_POST["licenece_number"])
&& !empty($_POST["profession"])
&& !empty($_POST["qualification"])
&& !empty($_POST["abn"])
&& !empty($_POST["bank_account_name"])
&& !empty($_POST["bank_account_number"])
&& !empty($_POST["bank_account_bsb"])
&& !empty($_POST["user_name"])                                                                                                                       
&& !empty($_POST["password"]) ){
        

        
        
        $sql = "INSERT INTO rescrewdb.Worker (first_name,last_name,photo_url,date_of_birth,phone,email,licenece_number,profession,qualification,abn,bank_account_name,bank_account_number,bank_account_bsb,user_name,password) VALUES ('".$_POST["first_name"]."','".$_POST["last_name"]."','".$_POST["photo_url"]."','".$_POST["date_of_birth"]."','".$_POST["phone"]."','".$_POST["email"]."','".$_POST["licenece_number"]."','".$_POST["profession"]."','".$_POST["qualification"]."','".$_POST["abn"]."','".$_POST["bank_account_name"]."','".$_POST["bank_account_number"]."','".$_POST["bank_account_bsb"]."','".$_POST["user_name"]."','".$_POST["password"]."')";
        
        
        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
}



mysqli_close($conn);
?>

        <!DOCTYPE html>
        <html>

        <head>

            <meta charset="utf-8">

            <meta name="viewport" content="width=device-width">

            <title> ResCrew | Welcome </title>
            <!--CSS FILE-->
            <!--<link rel="stylesheet" href="./main.css"></head>-->
            <link rel="stylesheet" href="./werkerstyle.css">
        </head>

        <body style="background-color:#FFFFFF;">
            <div id="img_rescrew">
                <img src="rescrew.png" style="width:175px;height:175px; margin-top:60px; margin-left:550px;">
            </div>

             <form id='worker_signup' action='rescuer_homepage.php' method='post' accept-charset='UTF-8'>
            <div class="form_fourth">
                <input type="text" placeholder="USERNAME" name="user_name" value="">
            </div>
            <div class="form_fourth">
                <input type="text" placeholder="PASSWORD" name="password" value="">
            </div>
            <button type="submit" class="button_next">NEXT</button>
        </form>
                 
<!--
            <section id="sign_firstshowcase_installer">
                <div class="container_sign">
                    <form id='login' action='rescuer_homepage.php' method='post' accept-charset='UTF-8'>
                        <h1> Sign In </h1>
                        <div class="sign_first">
                            <input type="text" placeholder="USERNAME" name="user_name" value="">
                        </div>
                        <div class="sign_second">
                            <input type="text" placeholder="PASSWORD" name="password" value="">
                        </div>
                        <button type="submit" class="button_next">NEXT</button>
                    </form>
                </div>
-->
            </section>
        </body>

        </html>
