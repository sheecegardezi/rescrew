<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title> Become Rescuer</title>
    <!--CSS FILE-->
    <!--<link rel="stylesheet" href="./main.css"></head>-->
    <link rel="stylesheet" href="./werkerstyle.css">
</head>

<body>
    <section id="page_top">
        <div class="contextual">
            <h1> ReScrew </h1>
        </div>
    </section>

    <section id="text">
        <div class="text_context">
            <h2 class="styleheading"> Sign up to Call</h2>
            <p class="stylepara"> Welcome to ReScrew</p>
            <p class="stylepara"> Create an account and get going</p>
        </div>
    </section>


    <section id="rescuer_details">
        <form id='worker_signup' action='login_rescuer.php' method='post' accept-charset='UTF-8'>
            <div class="form_first">
                <input type="text" placeholder="First Name" name="first_name" value="">
                <input type="text" placeholder="Last Name" name="last_name" value="">
            </div>

            <div class="form_second">
                <input type="text" placeholder="Photo Url" name="photo_url" value="">
            </div>

            <div class="form_second">
                <input type="text" placeholder="Date of Birth" name="date_of_birth" value="">
            </div>

            <div class="form_third">
                <input type="text" placeholder="Phone" name="phone" value="">
            </div>



            <div class="form_second">
                <input type="text" placeholder="Email" name="email" value="">
            </div>


            <div class="form_second">
                <input type="text" placeholder="License Number" name="licenece_number" value="">
            </div>

            <div class="form_second">
                <input type="text" placeholder="Profession" name="profession" value="">
            </div>

            <div class="form_second">
                <input type="text" placeholder="Qualification" name="qualification" value="">
            </div>
            
            <div class="form_second">
                <input type="text" placeholder="ABN" name="abn" value="">
            </div>

            <div class="form_second">
                <input type="text" placeholder="Bank Account Name" name="bank_account_name" value="">
            </div>

            <div class="form_second">
                <input type="text" placeholder="Bank Account Number" name="bank_account_number" value="">
            </div>


            <div class="form_second">
                <input type="text" placeholder="BSB" name="bank_account_bsb" value="">
            </div>
            <div class="form_fourth">
                <input type="text" placeholder="USERNAME" name="user_name" value="">
            </div>
            <div class="form_fourth">
                <input type="text" placeholder="PASSWORD" name="password" value="">
            </div>
            <button type="submit" class="button_next">NEXT</button>
        </form>
    </section>


</body>

</html>
