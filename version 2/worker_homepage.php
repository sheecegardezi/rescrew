
<!DOCTYPE html>
<html>

<head>


	<meta charset= "utf-8">

	<meta name="viewport" content="width=device-width">

    <title> Heinwerker | Welcome </title>

    <!--CSS FILE-->

   <!--<link rel="stylesheet" href="./main.css"></head>-->
     <link rel="stylesheet" href="./werkerstyle.css"></head>


<body>

	<header>

		<div class="container">

			<div id="logo">

				<img src="drawer.png"></img>


			</div>

				<h2><a href="Heimwerker.html">ReScrew</a></h2>

				<nav>

					<ul>
						<li style="display:inline-block;margin-right:12px;border-color:#1F62A2;"><a href="contact.html"> CALL </a></li>

					<li style="display:inline-block;margin-right:12px;border-color:#1F62A2;"><a href="signin.html"> SIGN IN</a></li>
					
					<li style="display:inline-block;margin-right:12px;border-color:#1F62A2;"><a href="help.html"> HELP </a></li>
					<li style="display:inline-block;margin-right:12px;border-color:#1F62A2;"><a class= "btn" href="becomeone.html"> BECOME RESCUER </a></li>


            <li style="margin-left:40px;border-color:#1F62A2;"><a class= "btn_join" href="becomeone.html" style="font-weight:400;">JOIN US </a></li>

					</ul>
        
					
</nav>



</nav>






		</div>


	</header>

	<section id="first_container" style="padding-top:44px;padding-bottom:44px;">

	   	<h1 class = "styleheading1"> Don't worry, </h1>
	   	<p class="stylepara"> We are here to your rescue </p>


	   </section>

	

		<section id="topshowcase">




			<div class="container">





			</div>




</section>

<section id="contact_us">



 	  <div class="form">


<h1 class="stylepara_body"> Call For Rescue </h1>


  <div class="dropdown">
  <button onclick="myFunction()" class="dropbtn">Find Rescuer </button>
  <div id="myDropdown" class="dropdown-content">
    <a href="plumber.html">Plumber</a>
    <a href="#electrician">Electrician</a>
    
  </div>
</div>

<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>



<hr>




  	<h1 class="stylepara_body"> Sign Up For Rescuer </h1>

  <form id="feedback_form">
  	<div class="form_first">
  	
  	<input type="text" placeholder="First Name">
  	<input type="text" placeholder="Last Name">

  </div>


  	<div class="form_second">
  	
  	<input type="text" placeholder="Email">
  	

  </div>

  	<div class="form_third">
  	
  	<input type="text" placeholder="Phone">

  </div>

  <div class="form_fourth">
  	
  	<input type="text" placeholder="Password">

  </div>

  <div class="form_fifth">
  	
  	<input type="text" placeholder="City">

  </div>

  	

  <button type="submit" class="button_sign_up">Sign Up<img src="arrow.png" style="margin-top:-100px;padding-bottom:15px; margin-left:250px;"></button>
  </form>

  
         
        </div>



  </div>
  </section>

<section id="showcase2">

	<div class="container"></div>



</section>