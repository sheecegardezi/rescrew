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
$sql = "SELECT * FROM rescrewdb.Worker WHERE user_name='".$_POST["user_name"]."' AND password='".$_POST["password"]."';";
echo $sql;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $first_name=$row["first_name"];
        $last_name=$row["last_name"];
        
        $profession=$row["profession"];
    }
} else {
    
    header( 'Location: retry_login_rescuer.html' ,  true,  301 );  exit;
}

$conn->close();
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


    <body>

        <header>

            <div class="container">

                <div id="logo">

                    <img src="drawer.png"></img>


                </div>

                <h2><a href="Heimwerker.html">ReScrew</a></h2>

                <nav style="margin-left:570px !important;">

                    <ul>
                        <li style="display:inline-block;margin-right:12px;border-color:#1F62A2;"><a href="contact.html"> PROFILE </a></li>

                        <!-- <li style="display:inline-block;margin-right:12px;border-color:#1F62A2;"><a href="signin.html"> </a></li> -->

                        <li style="display:inline-block;margin-right:12px;border-color:#1F62A2;"><a href="help.html"> HELP </a></li>

                    </ul>
                </nav>



        </header>


        <section id="image_showcase">


            <div class="container_imageview_worker">



                <img class="image_circle" src="plum.jpg" style="margin-top:60px;padding-bottom:15px; margin-left:550px; border-radius: 50%; width:200px;height:200px;" />

                <h2> <?php echo $first_name." ".$last_name;?></h2>
                <h2 style="margin-top:-20px !important; font-size:16px !important; font-weight:300 !important; color:#0becbc !important;"> <?php echo $profession;?></h2>


            </div>


            <div class="arrow-down">




                <p> -&nbsp;edit profile&nbsp;-</p>


            </div>






        </section>


        <section id="worker_info">



            <div class="box3">

                <img src="activejob.png" style="margin-top:30px;padding-bottom:15px; margin-left:100px; width:100px;height:100px;" />


                <h3 class="styleheading1"> Active Jobs </h3>


                <p class="stylepara"> Know about your current jobs. Improves your job tracebility. Set Timer, know the time it took to finish the work </p>
                <br>

                <button class="btn" id="check_activejobs_btn" style="margin-left:100px !important; width:80px !important;"> <a href="signin_installer.html">Check</a></button>



            </div>

            <div class="box4">


                <img src="newjob.png" style="margin-top:30px;padding-bottom:15px; margin-left:100px; width:100px;height:100px;" />

                <h3 class="styleheading1"> New Jobs </h3>

                <p class="stylepara"> Book handy man in no time, Get solution to your problems in easy steps, Be insured, Check the work done and then pay......</p>
                <br>

                <button class="btn" id="check_newjob_btn" style="margin-left:100px !important; width:80px !important;"> <a href="sigin_customer.html">Check</a></button>






            </div>


            <div class="box5">


                <img src="schedule.png" style="margin-top:30px;padding-bottom:15px; margin-left:90px; width:100px;height:100px;" />

                <h3 class="styleheading1" style="padding-left:90px !imporatnt;"> Schedule </h3>

                <p class="stylepara"> Book handy man in no time, Get solution to your problems in easy steps, Be insured, Check the work done and then pay......</p>
                <br>

                <button class="btn" id="check_schedule_btn" style="margin-left:100px !important; width:80px !important;"> <a href="sigin_customer.html">Check</a></button>






            </div>










            </div>










        </section>
