<?php

 include('../../includes/services/Template.php');
 

$template = new Template();

// variable to detect the index page

?>

<!DOCTYPE html>
    <html lang='en'>
        <head>
            <meta charset="utf-8" />
            <title>UICT COMMUNITY</title>
            <link href="../css/bootstrap.min.css" type="text/css" rel="stylesheet"> 
            <link href="../css/bootstrap-theme.css" type="text/css" rel="stylesheet"> 

            <link rel="stylesheet" type="text/css" href="../css/style.css" />
            <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine" />
            <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Gafata" />
            <link rel="stylesheet" type="text/css" href="../css/main.css"/>
            
        </head>
        <body>
            <div id="page">
                    <div id="header">
		    <?php
		      try{
			$template->render('header.php');
		      }
		      catch(Exception $e){
			echo 'Message: '. $e->getMessage();
		      }
		    
		    ?>
		    </div>
                
                      <div id="banner">
                            <div class="container">
                            <div class="message pull-left">
                                <span>Exploring Technologies </span>
                            </div>
                            </div>
                            <div class="container">
                            <div class="content" >
                            <div class="signup_button">
                                <a href="registrationForm.php" class="u_button" >Sign Up, It is fast</a>
                            </div>
                            </div>
                            </div>
                        </div>
                        <!-- banner -->
                      <!-- header -->
                      </div>
                <!-- container -->
                      <div class="container">
                      <div class="content">
                        <div class="description" >
                            <div class="u_heading">
                            <h2>Become Innovative While Studying</h2>
                            </div>
                            <p>
                              University and college students have vital
                              role to play for driving innovation through intellectual curiosity and
                              discovery leading to creative innovative ideas in the context of
                              fast growing economy and rapid changing technology, Recognizing students
                              unexplored potential, UICT Community encourages project based learning to
                              seek ICT solutions to local problems starting with the scope of the
                              University Of Dar es Salaam.  
                            </p>
                            
                            <div id="u_link">
                                <a href="#more_on_uict">Read More</a>
                            </div>
                            
                           
                         </div>
                        </div>
                        <!-- description -->
                        <div class="container">
                        
                        <div class="u_row" >
                            <div class="col-md-3">
                              <div class="u_heading">
                            <h4>Project Based Learning</h4>
                            </div>
                              <img  src="../img/projects.jpg" alt="project image"  width="225" height="150"/> 
                              <p>Share and develop your skills with us by joining project execution teams </p>
                              <a href="#more_on_uict">Read More</a>
                            </div>
                        
                           <div class="col-md-3">
                              <div class="u_heading">
                            <h4>Sport and Socialization</h4>
                            </div>
                              <img  src="../img/sports.jpg" alt="sports image"  width="225" height="150"/>
                              <p>Have fun and grow your network outside class by joining in our sports bonanza </p>
                              <a href="#more_on_uict">Read More</a>
                            </div>
                        <div class="col-md-3">
                              <div class="u_heading">
                            <h4>Charity</h4>
                            </div>
                              <img  src="../img/charity.png" alt="charity image"  width="225" height="150"/>
                              <p>Become part of others solution by joining hands with us to serve the outside society </p>
                              <a href="#more_on_uict">Read More</a>
                            </div>
                        
                         <div class="col-md-3">
                              <div class="u_heading">
                            <h4>Sport and Socialization</h4>
                            </div>
                              <img  src="../img/sports.jpg" alt="sports image"  width="225" height="150"/>
                              <p>Have fun and grow your network outside class by joining in our sports bonanza </p>
                              <a href="#more_on_uict">Read More</a>
                            </div>
                      </div>
                        <!-- u_row -->
                      
                      </div>
                        <!-- container -->
                      </div>
                      <!-- content -->
                      <div class="content">
                      <?php
		      try{
			$template->render('footer.php');
		      }
		      catch(Exception $e){
			echo 'Message: '. $e->getMessage();
		      }
		    
		    ?>
                    </div>
                
            </div>
        </body>
    </html>
    

