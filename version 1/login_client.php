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
!empty($_POST["user_name"])
&& !empty($_POST["password"])
&& !empty($_POST["first_name"])
&& !empty($_POST["last_name"])                                                                              
&& !empty($_POST["unit"])
&& !empty($_POST["road"])
&& !empty($_POST["suburb"])
&& !empty($_POST["postalcode"])
&& !empty($_POST["state"])
&& !empty($_POST["phone"])
&& !empty($_POST["email"])
&& !empty($_POST["creditcard_name"])
&& !empty($_POST["creditcard_number"])
&& !empty($_POST["creditcard_cvv"])                                                                                       
&& !empty($_POST["creditcard_expire_month"])                                                                             
&& !empty($_POST["creditcard_expire_year"]) ){
        

        $sql = "INSERT INTO rescrewdb.Client (user_name,password,first_name,last_name,unit,road,suburb,postalcode,state,phone,email,creditcard_name,creditcard_number,creditcard_cvv,creditcard_expire_month,creditcard_expire_year) VALUES ('".$_POST["user_name"]."','".$_POST["password"]."','".$_POST["first_name"]."','".$_POST["last_name"]."','".$_POST["unit"]."','".$_POST["road"]."','".$_POST["suburb"]."','".$_POST["postalcode"]."','".$_POST["state"]."','".$_POST["phone"]."','".$_POST["email"]."','".$_POST["creditcard_name"]."','".$_POST["creditcard_number"]."','".$_POST["creditcard_cvv"]."','".$_POST["creditcard_expire_month"]."','".$_POST["creditcard_expire_year"]."')";
        
        
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

    <title> Heinwerker | Welcome </title>

    <!--CSS FILE-->

    <!--<link rel="stylesheet" href="./main.css"></head>-->
    <link rel="stylesheet" href="./werkerstyle.css">
</head>


<body style="background-color:#FFFFFF;">





    <div id="img_rescrew">
        <img src="rescrew.png" style="width:175px;height:175px; margin-top:60px; margin-left:550px;">
    </div>

    <section id="sign_firstshowcase_installer">
        <div class="container_sign">
            <form id='login' action='client_homepage.php' method='post' accept-charset='UTF-8'>
                <h1> Sign In </h1>
                <div class="sign_first">
                    <input type="text" placeholder="USERNAME" name="user_name" value="">
                </div>
                <div class="sign_second">
                    <input type="password" placeholder="PASSWORD" name="password" value="">
                </div>
                <button type="submit" class="button_next">NEXT</button>
            </form>
        </div>
    </section>
    <section id="abc">
    </section>

</body>
</html>
