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
$sql = "SELECT * FROM rescrewdb.Client WHERE user_name='".$_POST["user_name"]."' AND password='".$_POST["password"]."';";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $first_name=$row["first_name"];
        $last_name=$row["last_name"];        
    }
} else {
    
    header( 'Location: retry_login_client.html' ,  true,  301 );  exit;
}

$conn->close();
?>
$conn->close();
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


    <body>

        <header>

            <div class="container">
                <div id="logo">
                    <img src="drawer.png"></img>
                </div>

                <h2><a href="index.html">ReScrew</a></h2>
                <nav style="margin-left:380px !important;">
                    <ul>
                        <li style="display:inline-block;margin-right:12px;border-color:#1F62A2;"><a href="profile.html"> PROFILE </a></li>
                        <li style="display:inline-block;margin-right:12px;border-color:#1F62A2;"><a href="payments.html"> PAYMENTS </a></li>
                        <li style="display:inline-block;margin-right:5px;border-color:#1F62A2;"><a href="help.html"> HELP </a></li>
                    </ul>
                </nav>
        </header>


        <section id="image_showcase">
            <div class="container_imageview_worker">
                <img class="image_circle" src="prof.jpg" style="margin-top:60px;padding-bottom:15px; margin-left:550px; border-radius: 50%; width:200px;height:200px;" />
                <h2>
                    <?php echo $first_name." ".$last_name;?>
                </h2>
                <h2 style="margin-top:-20px !important; font-size:16px !important; font-weight:300 !important; color:#0becbc !important;"> Customer </h2>
            </div>

            <div class="arrow-down">
                <p> -&nbsp;edit profile&nbsp;-</p>
            </div>
        </section>


        <section id="worker_info">
            <div class="box3" style="width:22% !important; ">
                <img src="activejob.png" style="margin-top:30px;padding-bottom:15px; margin-left:70px; width:100px;height:100px;" />
                <h3 class="styleheading1" style="margin-left: -50px !important;"> Active Repairs </h3>
                <p class="stylepara"> Know about your current jobs. Improves your job tracebility. Set Timer, know the time it took to finish the work </p>
                <br>
                <button class="btn" id="check_activejobs_btn" style="margin-left:100px !important; width:80px !important;"> <a href="signin_installer.html">Check</a></button>
            </div>

            <div class="box4" style="width:22% !important; margin-left:270px !important;">
                <img src="newrepair.png" style="margin-top:30px;padding-bottom:15px; margin-left:70px; width:100px;height:100px;" />
                <h3 class="styleheading1" style="margin-left: -30px !important;"> New Repair </h3>
                <p class="stylepara"> Book handy man in no time, Get solution to your problems in easy steps, Be insured, Check the work done and then pay......</p>
                <br>
                <button class="btn" id="check_newjob_btn" style="margin-left:100px !important; width:80px !important;"> <a href="hire.html">Check</a></button>
            </div>


            <div class="box5" style="width:22% !important; margin-left:540px !important;">
                <img src="schedule.png" style="margin-top:30px;padding-bottom:15px; margin-left:70px; width:100px;height:100px;" />
                <h3 class="styleheading1" style="margin-left: -45px !important;"> Appointments </h3>
                <p class="stylepara"> Book handy man in no time, Get solution to your problems in easy steps, Be insured, Check the work done and then pay......</p>
                <br>
                <button class="btn" id="check_schedule_btn" style="margin-left:100px !important; width:80px !important;"> <a href="sigin_customer.html">Check</a></button>
            </div>


            <div class="box6" style="width:22% !important; margin-left:810px !important;">
                <img src="schedule.png" style="margin-top:30px;padding-bottom:15px; margin-left:70px; width:100px;height:100px;" />
                <h3 class="styleheading1" style="margin-left: -65px !important;"> Previous Repairs </h3>
                <p class="stylepara"> Book handy man in no time, Get solution to your problems in easy steps, Be insured, Check the work done and then pay......</p>
                <br>
                <button class="btn" id="check_schedule_btn" style="margin-left:100px !important; width:80px !important;"> <a href="sigin_customer.html">Check</a></button>
            </div>
        </section>
    </body>

    </html>
