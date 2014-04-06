<?php
$loader = new Loader();

try{
$loader->service('Template.php');
$loader->service('CurrentPage.php');
}
catch(Exception $e){
 echo 'Message: '. $e->getMessage();
}


$template = new Template();

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title><?php //echo user name ?></title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
 <?php
	  
	    $cssFiles = array("bootstrap.min.css","bootstrap-theme.css","style.css","main.css");
	    
	    foreach($cssFiles as $file){
	    echo '<link rel="stylesheet" type="text/css" href="../public/css/'.$file.'" />';	    }
	    
	    ?>
             
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine" />
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Gafata" />
</head> <!-- end of header -->
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

	</div>
	<!-- end of header-->
		

	<div class="container">
	 <div class="row u_row">
		<div class="col-lg-6">
		  <div class="row ">
			 
			 <div class="col-lg-3">
				<img class="img img-thumbnail" src="../public/img/profile_photo.jpg" />
			 <a href="<?php echo URL; ?>home/userProfile" title="Checkout Profile" >Samweli Twesa</a>
			 </div>
			 <div class="col-lg-6 col-md-offset-3">
				<form action="../controller/search.php" method="get">
				       <div class="input-group">
				       <input type="text" class="form-control-min" size="40" placeholder="Search a colleague"  />
				       <span class="input-group-btn">
				       <input type="submit" class="btn btn-primary" value="Search" />
				       </span>
				       </div>
				</form>
			 </div>
			 <!-- end of the search bar -->

			
			 <div class="container">
		       <div class="col-lg-3 pull-right recent">
				<div class="recent_activity">
				 <h3>Enrolled projects</h3> 
				</div>
				<ul class="nav">
				       <li class="activity_li">Today: <a>UICT Database design</a></li>
				       <li class="activity_li">Yesterday: <a>T shirt logo design</a></li>
				       <li class="activity_li">Yesterday: <a>Swiming ROBOT</a></li>
				       <li class="activity_li">Last Week: <a>Radio frequence transmission</a></li>
				       
				</ul>
			 </div>
		       </div> 
		       
		  </div> 
		  <!-- begin of personal infomations -->
		  
		  	<div class = "container_info">
               <h3>Personal info</h3> 
               <ul class="nav">
				       <li class="activity_li">Registration Number: <a>2012-04-02392</a></li>
				       <li class="activity_li">Degree program: <a>Computer Science</a></li>
				       <li class="activity_li">Email: <a>kimollomick17@gmail.com</a></li>
				       <li class="activity_li">Phone Number: <a>0712-509309</a></li>
				       
				</ul>
				<div class="edit_button">
				<a href="<?php echo URL; ?>home/registration" class="u_button">edit</a>
				</div>

		  	</div>
		  

		  
		  <div class="row u_row lower_row">
		      <!-- <div class="col-lg-6">
			 <ul class="nav navigation-menu" >
				<li  class="active-menu list-menu"><a><i class="diff glyphicon glyphicon-pushpin"></i> Enrolled Projects</a></li>
				<li  class="list-menu"><a><i class="diff glyphicon glyphicon-book"></i> OnGoing Projects</a></li>
				<li  class="list-menu"><a><i class="diff glyphicon glyphicon-map-marker"></i> Enrolled Projects</a></li>
				<li  class="list-menu"><a><i class="diff glyphicon glyphicon-bookmark"></i> Enrolled Projects</a></li>
			 </ul>
		       </div> -->
		       <div class="col-md-offset-6">
			 <div class="main_content">
				<div class="a_content">
				   
				  <h3><span><img src="../public/img/leader.jpg" class="img col-sm-2" title="Project Leader"/></span>Project heading</h3>
				  <p>As a response to the inherent need for plore technological challenges embedded with innovation opportunities, UICT Community serves as a pla, University Information and Communication Technologies Community.The community engages in various
				  </p>
				  <ul class="nav navbar-nav">
				       <li class="links_project"><a href="../controller/information.php" ><i class=" diff glyphicon glyphicon-envelope"> </i>  Inform a friend</a></li>
				       <li class="links_project"><a ><i class="diff glyphicon glyphicon-trash"></i>  Leave Project</a></li>
				       <li class="links_project pull-right"><a> Read More</a></li>
				  </ul>
				 
				</div>
			 
				<div class="a_content">
				   
				  <h3><span><img src="../public/img/jack.jpg" class="img col-sm-2" title="Project Leader"/></span>Project heading</h3>
				  <p>As a response to the inherent need for plore technological challenges embedded with innovation opportunities, UICT Community serves as a pla, University Information and Communication Technologies Community.The community engages in various
				  </p>
				  <ul class="nav navbar-nav">
				       <li class="links_project"><a href="../controller/information.php" ><i class=" diff glyphicon glyphicon-envelope"> </i>  Inform a friend</a></li>
				       <li class="links_project"><a ><i class="diff glyphicon glyphicon-trash"></i>  Leave Project</a></li>
				       <li class="links_project pull-right"><a> Read More</a></li>
				  </ul>
				 
				</div>
			 
				<div class="a_content">
				   
				  <h3><span><img src="../public/img/leader.jpg" class="img col-sm-2" title="Project Leader"/></span>Project heading</h3>
				  <p>As a response to the inherent need for plore technological challenges embedded with innovation opportunities, UICT Community serves as a pla, University Information and Communication Technologies Community.The community engages in various
				  </p>
				  <ul class="nav navbar-nav">
				       <li class="links_project"><a href="../controller/information.php" ><i class=" diff glyphicon glyphicon-envelope"> </i>  Inform a friend</a></li>
				       <li class="links_project"><a ><i class="diff glyphicon glyphicon-trash"></i>  Leave Project</a></li>
				       <li class="links_project pull-right"><a> Read More</a></li>
				  </ul>
				 
				</div>
			 
				<div class="a_content">
				   
				  <h3><span><img src="../public/img/jack.jpg" class="img col-sm-2" title="Project Leader"/></span>Project heading</h3>
				  <p>As a response to the inherent need for plore technological challenges embedded with innovation opportunities, UICT Community serves as a pla, University Information and Communication Technologies Community.The community engages in various
				  </p>
				  <ul class="nav navbar-nav">
				       <li class="links_project"><a href="../controller/information.php" ><i class=" diff glyphicon glyphicon-envelope"> </i>  Inform a friend</a></li>
				       <li class="links_project"><a ><i class="diff glyphicon glyphicon-trash"></i>  Leave Project</a></li>
				       <li class="links_project pull-right"><a> Read More</a></li>
				  </ul>
				 
				</div>
		       
				<div class="a_content">
				   
				  <h3><span><img src="../public/img/leader.jpg" class="img col-sm-2" title="Project Leader"/></span>Project heading</h3>
				  <p>As a response to the inherent need for plore technological challenges embedded with innovation opportunities, UICT Community serves as a pla, University Information and Communication Technologies Community.The community engages in various
				  </p>
				  <ul class="nav navbar-nav">
				       <li class="links_project"><a href="../controller/information.php" ><i class=" diff glyphicon glyphicon-envelope"> </i>  Inform a friend</a></li>
				       <li class="links_project"><a ><i class="diff glyphicon glyphicon-trash"></i>  Leave Project</a></li>
				       <li class="links_project pull-right"><a> Read More</a></li>
				  </ul>
				 
				</div>
			 </div>
			 </div> 
			      <!-- end u_main_content -->
			    </div>
		       </div>
		</div>
	       </div>

	       	<div class = "event_container">
               <h3>Events attended</h3> 
               <ul class="nav">
				       <li class="activity_li">3rd July 2014: <a>Orhanage visit</a></li>
				       <li class="activity_li">1st May 2014: <a>Friendly match</a></li>
				       <li class="activity_li">22nd April 2013: <a>Muhimbili Hospital Visit</a></li>
				       <li class="activity_li">More than year ago: <a>Football match</a></li>
				       
				</ul>
				<div class="edit_button">
				
				</div>

		  	</div>
		  
	</div>
	




	<!-- start of a footer-->
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

</body>
</html>
