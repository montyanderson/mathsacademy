
<html>
    <head>
        <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
        <title>maths academy.</title>
        
        <div id="fb-root"></div>
        
        <?php include("inc/css.php"); ?>
        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="//login.persona.org/include.js"></script>
        <script src="login/persona.js"></script>
        <script src="js/alex.js"></script>
        <script src="js/animate.js" type="text/javascipt"></script>
        <script src="js/homepage.js"></script>
        
        
        
        <script src="js/modernizr.custom.js"></script>
        

        
    </head>
    <body>
        <nav id="nav1">
        <header>
            <a href="index.php" id="logo"><h1>maths academy.</h1></a>
        </header>
            <ul>
        	 <li><a id="home-nav" href="#">Home</a></li>
        	 <li><a id="courses-nav" href='#'>Courses</a></li>
        	</ul>
        <button class="login-button" id="login">Login</button>
           <?php
            if($user) {
                echo "Logged in! - $user";
            } else {
                echo "<a href='$loginUrl'>Login</a>";
            }
            ?>
        </nav>
    <!-- END OF NAV --->
    
    
    <!-- Start of aside --->
    <aside id="left">
   
   <!--<div id="progressbar">
          <div></div>
        </div>  --->
    </aside>
<!-- START OF FACEBOOK LOGIN SCREEN -->

    	<div class="md-modal md-effect-7" id="modal-7">
			<div class="md-content" id="login">
				<h3>Login With Facebook</h3>
				<div>
                
           <?php
            if($user) {
                echo "Logged in! - $user";
            } else {
                echo "<a href='$loginUrl'>Login</a>";
            }
            ?>
                
				<button class="md-close">Close me!</button>
				</div>
			</div>
		</div>
<div class="md-overlay"></div>



        <script src="js/cssParser.js"></script>
        <script src="js/classie.js"></script>
        <script src="js/modalEffects.js"></script>



