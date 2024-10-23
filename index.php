<!DOCTYPE html>
<html lang="en">
<head>
<!--
New Event
http://www.templatemo.com/tm-486-new-event
-->
<title>E-Portal</title>
<meta name="description" content="">
<meta name="author" content="">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/owl.theme.css">
<link rel="stylesheet" href="css/owl.carousel.css">

<!-- Main css -->
<link rel="stylesheet" href="css/style.css">

<!-- Google Font -->
<link href='https://fonts.googleapis.com/css?family=Poppins:400,500,600' rel='stylesheet' type='text/css'>

<style type="text/css">
<!--
.style3 {color: #FFFFFF}
-->
</style>
</head>
<body data-spy="scroll" data-offset="50" data-target=".navbar-collapse">			
<!-- =========================
     PRE LOADER       
============================== -->
<div class="preloader">

	<div class="text-danger"></div>

</div>


<!-- =========================
     NAVIGATION LINKS     
============================== -->

<div class="navbar navbar-fixed-top custom-navbar" role="navigation">
	<div class="container">

		<!-- navbar header -->
		<div class="navbar-header">
		<?php
		$message="";
		if(isset($_GET['status']))
		{
			if($_GET['status']==1)
			    $message="Record saved successfully..";
			else
			     $message="Faild to  insert record..";
		}

		?>
		
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
			</button>
			<br><div>
			<a href="#"><font color="fa991c" size="6"><b>E</font><font color="fffff" size="6">-Portal</font></b></a>
			 <!--<a href="#"><h1><font color="fa991c">E</font><font color="fffff">-learning</font></h1></a-->
			</div>
		</div>
	
		<br>
		<div class="collapse navbar-collapse">
        
			<ul class="nav navbar-nav navbar-right">
				<td widht="80%"></td>
				<li><a href="#intro">Home</a></li>
				<li><a href="#overview">About us</a></li>
				<li><a href="#speakers">Team members</a></li>
				<li><a href="#program">Courses</a></li>
				<li><a href="#register">Register</a></li>
				<li><a href="#sponsors">Features</a></li>
				<li><a href="#Certify">Certify</a></li>
				<li><a href="#contact">Contact us</a></li>
				
			
			
		
			</ul>

		</div>
			

	</div>
</div>


<!-- =========================
    home SECTION   
============================== -->
<section id="intro" class="parallax-section">
	<div class="container">
		<div class="row">
		
			<div class="col-md-12 col-sm-12">
				<h1 class="wow bounceIn" data-wow-delay="0.9s"><span class="style3">Welcome to </span><font color="fbf3f2" size="50"><font color="fa991c">E</font>-</font><font size="50"><span class="style3">Portal</span></font></h1>
				<h1 class="wow fadeInUp" data-wow-delay="1.6s">We need to bring learning to people instead of people to learning</h1>
				<a href="#overview" class="btn btn-lg btn-danger smoothScroll wow fadeInUp" data-wow-delay="2.3s">LEARN MORE</a>
				<a href="#register" class="btn btn-lg btn-danger smoothScroll wow fadeInUp" data-wow-delay="2.3s">REGISTER NOW</a>
			</div>


		</div>
	</div>
</section>


<!-- =========================
    About us SECTION   
============================== -->
<section id="overview" class="parallax-section">
	<div class="container">
		<div class="row">

			<div class="wow fadeInUp col-md-6 col-sm-6" data-wow-delay="0.6s">
				<h3>A learning system based on formalised teaching but with the help of electronic resources is known as E-learning</h3>
				<p>Schools that digitally transform thrive. Create a technology environment that actively engages students and teachers, and delivers personalized digital learning experiences for student success.</p>
				<p>While teaching can be based in or out of the classrooms, the use of computers and the Internet forms the major component of E-learning.</p>
				<p> E-Learning is a leading publishing platform that delivers inspiring, industry-specific content to E-Learning professionals. As a top-tier E-Learning marketplace, we offer a plethora of sophisticated, online marketing solutions to corporate training companies to empower and help them grow.</p>

			</div>
					
			<div class="wow fadeInUp col-md-6 col-sm-6" data-wow-delay="0.9s">
				<img src="images/overview-img.jpg" class="img-responsive" alt="About us">			
			</div>

		</div>
	</div>
</section>


<!-- =========================
    Features SECTION   
============================== -->
<section id="detail" class="parallax-section">
	<div class="container">
		<div class="row">

			<div class="wow fadeInLeft col-md-4 col-sm-4" data-wow-delay="0.3s">
				<i class="fa fa-group"></i>
				<h3>500 Participants</h3>
				<p>There are interactive classes and courses on different topics or program or degree that are delivered completely in our web-site.</p>
			</div>

			<div class="wow fadeInUp col-md-4 col-sm-4" data-wow-delay="0.6s">
				<i class="fa fa-clock-o"></i>
				<h3>24 Programs</h3>
				<p> We are arranging different type of programs for our Participants. For developing their skilles and to get knowledge from them. </p>
			</div>

			<div class="wow fadeInRight col-md-4 col-sm-4" data-wow-delay="0.9s">
				<i class="fa fa-microphone"></i>
				<h3>4 Team Members</h3>
				<p>We have highely skilled and top educated team members in this field.</p>
			</div>

		</div>
	</div>
</section>


<!-- =========================
    Services SECTION   
============================ -->
<section id="video" class="parallax-section">
	<div class="container">
		<div class="row">

			<div class="wow fadeInUp col-md-6 col-sm-10" data-wow-delay="1.3s">
				<h2>Watch Video</h2>
				<h3>In this video we can try to understand the importance of E-learning.</h3>
				<p>E-learning is an way where we can get lot of knowledge that we want. This is an open source to all.</p>
			</div>
			<div class="wow fadeInUp col-md-6 col-sm-10" data-wow-delay="1.6s">
				<div class="embed-responsive embed-responsive-16by9">
					<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/gQ6_pEQZsVE" allowfullscreen></iframe>
				</div>
			</div>

		</div>
	</div>
</section>


<!-- =========================
    Team Members SECTION   
============================== -->
<section id="speakers" class="parallax-section">
	<div class="container">
		<div class="row">

			<div class="col-md-12 col-sm-12 wow bounceIn">
				<div class="section-title">
					<h2>Team Members</h2>
					<p><h4>"Talent wins games, but teamwork and intelligence win championships."</h4></p>
				</div>
			</div>

			<!-- Testimonial Owl Carousel section
			================================================== -->
			<div id="owl-speakers" class="owl-carousel">

			<div class="item wow fadeInUp col-md-3 col-sm-3" data-wow-delay="0.9s">
					<div class="speakers-wrapper">
						<img src="images/user1.jpg" class="img-responsive" alt="Features">
							<div class="speakers-thumb">
								<center><h3>Ms. Manasi Shirale</h3></center>
							</div>
					</div>
				</div>

				<div class="item wow fadeInUp col-md-3 col-sm-3" data-wow-delay="0.6s">
					<div class="speakers-wrapper">
						<img src="images/user1.jpg" class="img-responsive" alt="Features">
							<div class="speakers-thumb">
								<center><h3>Ms. Tanvi Patil</h3></center>
							</div>
					</div>
				</div>

				<div class="item wow fadeInUp col-md-3 col-sm-3" data-wow-delay="0.9s">
					<div class="speakers-wrapper">
						<img src="images/user1.jpg" class="img-responsive" alt="Features">
							<div class="speakers-thumb">
								<center><h3>Ms. Aarti Chavare</h3></center>
							</div>
					</div>
				</div>

				<div class="item wow fadeInUp col-md-3 col-sm-3" data-wow-delay="0.6s">
					<div class="speakers-wrapper">
						<img src="images/user1.jpg" class="img-responsive" alt="Features">
							<div class="speakers-thumb">
								<center><h3>Ms. Dipti Swami</h3></center>
							</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>


<!-- =========================
    PROGRAM SECTION   
============================== -->

<section id="program" class="parallax-section">
	<div class="container">
		<div class="row">

			<div class="wow fadeInUp col-md-12 col-sm-12" data-wow-delay="0.6s">
				<div class="section-title">
					<h2>Our Courses</h2>
					<p>In the below we display the information about our Courses.</p>
				</div>
			</div>

			<div class="wow fadeInUp col-md-10 col-sm-10" data-wow-delay="0.9s">
				
				<!-- tab panes -->
				<div class="tab-content">

					<div role="tabpanel" class="tab-pane active" id="fday">
						<!-- program speaker here -->
						<div class="col-md-2 col-sm-2">
							<img src="images/c1.jpg" class="img-responsive" alt="Courses">
						</div>
						<div class="col-md-10 col-sm-10">
							<h6>
								<span><i class="fa fa-clock-o"></i> 09.00 AM</span> 
								
							</h6>
							<h3>Introduction to PHP</h3>
							<h4>By Manasi Shirale</h4>
							<p align="justify">PHP is a server-side scripting language primarily used for web development. It's embedded within HTML, enabling dynamic content generation. PHP supports variables, control structures, functions, arrays, and database interaction. With its loose typing and extensive built-in functions, PHP offers flexibility and ease of use. Popular frameworks like Laravel and Symfony enhance PHP's capabilities for rapid development. PHP's broad adoption and active community contribute to its robust ecosystem. Security practices are crucial due to vulnerabilities like SQL injection and XSS. PHP powers millions of websites and web applications, ranging from simple blogs to complex e-commerce platforms. Its versatility and scalability make it a preferred choice for developers worldwide. As technology evolves, PHP continues to evolve, ensuring its relevance in modern web development.</p>
				</div>
											
						<!-- program speaker here -->
						<!--div class="col-md-2 col-sm-2">
							<img src="images/c5.jpg" class="img-responsive" alt="Courses">
						</div>
						<div class="col-md-10 col-sm-10">
							<h6>
								<span><i class="fa fa-clock-o"></i> 05.00 PM</span> 
								
							</h6>
							<h3>Introduction to Mobile App</h3>
							<h4>By Sujal Chougule</h4>
							<p>This Course teaches how to make mobile appication using X-code and Titanium.This corse requires no programming course.It is an ideal starting point for anyone interested in making mobile apps.</p>
							
						</div-->
						
					</div>

				</div>

		</div>
	</div>
				
</section>
<section id="faq" class="parallax-section">
	<div class="container">
		<div class="row">

			<!-- Section title
			================================================== -->
			<div class="wow bounceIn col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10 text-center">
				<div class="section-title">
					<h2>Watch Video's Here</h2>
			
				</div>
			</div>

			<div class="wow fadeInUp col-md-offset-1 col-md-10 col-sm-offset-1 col-sm-10" data-wow-delay="0.9s">
				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">



  					<div class="panel panel-default">
   						<div class="panel-heading" role="tab" id="headingOne">
      						<h4 class="panel-title">
							
							
        						<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
          							 XAMPP-Installation | Echo Function      						</a>      						</h4>
    					</div>
   						<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      						<div class="panel-body">
        						<div class="wow fadeInUp col-md-6 col-sm-10" data-wow-delay="1.6s">
				<div class="embed-responsive embed-responsive-16by9">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/mkGRlPhTXNw?si=oVSuHiDwD2msuogL" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
					
				</div>
      						</div>
							<div class="wow fadeInUp col-md-6 col-sm-10" data-wow-delay="1.6s">
							<div class="embed-responsive embed-responsive-16by9">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/z9x9LOQPPDI?si=SeyEL9lw68hUhJ8Z" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
				</div>
   				</div>	 
 					</div>
			</div>
			
<div class="panel panel-default">
   						<div class="panel-heading" role="tab" id="headingTwo">
      						<h4 class="panel-title">
        						<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          							Variables | Conditional Statements       						</a>      						</h4>
    					</div>
   						<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      						<div class="panel-body">
							<div class="wow fadeInUp col-md-6 col-sm-10" data-wow-delay="0s">
							<div class="embed-responsive embed-responsive-16by9">
                            	<iframe width="560" height="315" src="https://www.youtube.com/embed/osTDt4c3Nbo?si=8BHguEJew2VYd6NA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
								</div>
								</div>
								<div class="wow fadeInUp col-md-6 col-sm-10" data-wow-delay="0s">
							<div class="embed-responsive embed-responsive-16by9">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/DTavfbFnogA?si=pLMClEs_Nc7_TwQl" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
				</div>
   				</div>	 
				
				<div  style="margin-top: 20px;" class="wow fadeInUp col-md-6 col-sm-10" data-wow-delay="0s">
							<div class="embed-responsive embed-responsive-16by9">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/sUWmhmclP0Q?si=mhSBeJJt6hId_xsj" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
				</div>
   				</div>	 
				
      			</div>
   				</div>
				
				<div class="panel panel-default">
   						<div class="panel-heading" role="tab" id="headingThree">
      						<h4 class="panel-title">
        						<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          							Loops       						</a>      						</h4>
    					</div>
   						<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      						<div class="panel-body">
							<div class="wow fadeInUp col-md-6 col-sm-10" data-wow-delay="0s">
							<div class="embed-responsive embed-responsive-16by9">
                            	<iframe width="560" height="315" src="https://www.youtube.com/embed/NW66n17la3Y?si=Z_WF5o-C1LEDKHU8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
								</div>
								</div>
								<div class="wow fadeInUp col-md-6 col-sm-10" data-wow-delay="0s">
							<div class="embed-responsive embed-responsive-16by9"><br>
					<iframe width="560" height="315" src="https://www.youtube.com/embed/7x7arb9tqJE?si=b0i2OI9qmB17535W" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
				</div>
   				</div>	 
				
				<div style="margin-top: 20px;" class="wow fadeInUp col-md-6 col-sm-10" data-wow-delay="0s">
							<div class="embed-responsive embed-responsive-16by9">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/EWl-4xhnzSo?si=BgSqNnavjU4qIqh_" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
				</div>
   				</div>	 
				
				<div  style="margin-top: 20px;" class="wow fadeInUp col-md-6 col-sm-10" data-wow-delay="0s">
							<div class="embed-responsive embed-responsive-16by9">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/EyliLXLyj94?si=nxY1RZrhm4FCMUTz" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
				</div>
   				</div>	 
      			</div>
   				</div>
				
				<div class="panel panel-default">
   						<div class="panel-heading" role="tab" id="headingFour">
      						<h4 class="panel-title">
        						<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          							Arrays | Functions       						</a>      						</h4>
    					</div>
   						<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
      						<div class="panel-body">
							<div class="wow fadeInUp col-md-6 col-sm-10" data-wow-delay="0s">
							<div class="embed-responsive embed-responsive-16by9">
                            	<iframe width="560" height="315" src="https://www.youtube.com/embed/BCpD_X1SwUc?si=ar5OtMry48vSgaeR" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
								</div>
								</div>
								<div class="wow fadeInUp col-md-6 col-sm-10" data-wow-delay="0s">
							<div class="embed-responsive embed-responsive-16by9"><br>
					<iframe width="560" height="315" src="https://www.youtube.com/embed/qqhB_BhSNr4?si=UDbwh_ucREsKgKP8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
				</div>
   				</div>	 
      			</div>
   				</div>
				
				<div class="panel panel-default">
   						<div class="panel-heading" role="tab" id="headingFive">
      						<h4 class="panel-title">
        						<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
          							Cookies | Sessions       						</a>      						</h4>
    					</div>
   						<div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
      						<div class="panel-body">
							<div class="wow fadeInUp col-md-6 col-sm-10" data-wow-delay="0s">
							<div class="embed-responsive embed-responsive-16by9">
                            	<iframe width="560" height="315" src="https://www.youtube.com/embed/ZvRw_Pi3wXQ?si=SXBDU50zAc4EvkZR" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
								</div>
								</div>
								<div class="wow fadeInUp col-md-6 col-sm-10" data-wow-delay="0s">
							<div class="embed-responsive embed-responsive-16by9"><br>
					<iframe width="560" height="315" src="https://www.youtube.com/embed/FiBbM0J6BP0?si=FoIDVD5rnhCb0ARE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
				</div>
   				</div>	 
      			</div>
   				</div>
				
				
 		 </div>
		</div>
	</div>
</section>

<section id="program" class="parallax-section">
	<div class="container">
		<div class="row">

			

			<div class="wow fadeInUp col-md-10 col-sm-10" data-wow-delay="0.9s">
				
				<!-- tab panes -->
				<div class="tab-content">

					<div role="tabpanel" class="tab-pane active" id="fday">
						<!-- program speaker here -->
						<div class="col-md-2 col-sm-2">
							<img src="images/c2.jpg" class="img-responsive" alt="Courses">
						</div>
						<div class="col-md-10 col-sm-10">
							<h6>
								<span><i class="fa fa-clock-o"></i> 02.00 PM</span> 
								
							</h6>
							<h3>C Programming</h3>
							<h4>By Tanvi Patil</h4>
							<p align="justify">C is a robust, structured programming language renowned for its efficiency and versatility. Developed in the early 1970s by Dennis Ritchie, C has become a cornerstone of modern computing. Its concise syntax and rich feature set make it suitable for a wide range of applications, from system programming to high-level software development. C offers powerful control structures, including loops, conditionals, and functions, facilitating modular and maintainable code. With its emphasis on portability and low-level memory manipulation, C remains indispensable in fields like operating systems, embedded systems, and game development.</p><br>
				</div>
				
				<div class="col-md-2 col-sm-2">
							<img src="images/c1.jpg" class="img-responsive" alt="Courses">
						</div>
						<div class="col-md-10 col-sm-10">
							<h6>
								<span><i class="fa fa-clock-o"></i> 04.00 PM</span> 
								
							</h6>
							<h3>C++ Programming</h3>
							<h4>By Dipti Swami</h4>
							<p align="justify">C++ is a versatile, object-oriented programming language derived from C, adding features like classes and inheritance. Developed by Bjarne Stroustrup in the 1980s, C++ combines the efficiency of C with higher-level abstractions. It supports both procedural and object-oriented programming paradigms, offering encapsulation, polymorphism, and inheritance for building modular and reusable code. With its rich standard library and extensive community support, C++ is widely used in software development, game development, and systems programming. Known for its performance and flexibility, C++ is a preferred choice for building complex and performance-sensitive applications.</p><br>
				</div>
							
						<div class="col-md-2 col-sm-2">
							<img src="images/c2.jpg" class="img-responsive" alt="Courses">
						</div>
						<div class="col-md-10 col-sm-10">
							<h6>
								<span><i class="fa fa-clock-o"></i> 06.00 PM</span> 
								
							</h6>
							<h3>Python Programming</h3>
							<h4>By Aarti Chavare</h4>
							<p align="justify">Python is a high-level, interpreted programming language known for its simplicity and readability. Created by Guido van Rossum in the late 1980s, Python emphasizes code readability and productivity, with a clear and concise syntax. It supports multiple programming paradigms, including procedural, object-oriented, and functional programming. Python's extensive standard library and third-party packages make it suitable for a wide range of applications, from web development and data analysis to artificial intelligence and scientific computing. With its dynamic typing and automatic memory management, Python offers rapid development and easy integration with other languages and systems.
</p>
				</div>
						
					</div>

				</div>

		</div>
	</div>
				
</section>


<!-- =========================
   REGISTER SECTION   
============================== -->
<section id="register" class="parallax-section">
	<div class="container">
		<div class="row">

			<div class="wow fadeInUp col-md-7 col-sm-7" data-wow-delay="0.6s">
				
			<center>	<h1>Register Here</h1></center>
			<br>
						<img src="images/reg2.jpg" height="400" width="600">
				
				<h3></h3>
				<p></p>
			</div>
				
		
				<div class="wow fadeInUp col-md-5 col-sm-5" data-wow-delay="1s">
					<br>
					
					<form action="rscript.php" method="POST">
				
				<div class="form-group">
				<label for="exampleInputName">Full Name</label>
				<input type="text" class="form-control" id="name" name="fullname" placeholder="Enter Your FullName">
				<small id="emailHelp" class="form-text text-muted">Enter your full name (Spaces allowed).</small>
	</div>
	
	<div class="form-group">
				<label for="exampleInputdob">Birth Date</label>
				<input type="date" class="form-control" id="dob" name="dob" placeholder="Date of Birth">
				<small id="emailHelp" class="form-text text-muted">Enter your birth date.</small>
			</div>

			<div class="form-group">
				<label for="exampleInputEmail1">Email Address</label>
				<input type="email" class="form-control" id="email" name="email" placeholder="Enter Email">
				<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Password</label>
				<input type="password" name="password" id="password" class="form-control" placeholder="Password">
			</div><br>

					<!--label>FullName</label>
					<input name="fullname" type="text" class="form-control" id="fulltname" placeholder="Full Name">
					<small id="emailHelp" class="form-text text-muted">Enter your full name (Spaces allowed).</small>
					<input name="username" type="text" class="form-control" id="username" placeholder="Username">
					<!--input name="address" type="text" class="form-control" id="address" placeholder="Address">
					<input name="country" type="text" class="form-control" id="country" placeholder="Country">
					<input name="pincode" type="text" class="form-control" id="pincode" placeholder="Pincode">
					<input name="qualification" type="text" class="form-control" id="qualification" placeholder="Qualification">
					<input name="phone" type="telephone" class="form-control" id="phone" placeholder="Phone Number">
					<input name="email" type="email" class="form-control" id="email" placeholder="Email Address">
					<input name="password" type="password" class="form-control" id="password" placeholder="Password">
					</center-->
					<div class="col-md-offset-6 col-md-6 col-sm-offset-1 col-sm-10">
					<div>
						<input name="submit" type="submit" class="form-control" id="submit" value="REGISTER">
						<font color="#00ff00"><?php echo $message;?></font>	
                        
						<input name="Reset"  type="Reset" class="form-control" value="Reset">
                        
					</div>
					</div>
				
				</form>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="login.php"><input name="submit" id="login" type="submit" class="form-control_1" id="submit" value="           LOGIN           "></a>

			</div>
			
			
		</div>
	</div>
</section>


<!-- =========================
    FAQ SECTION   
============================== -->
<!--section id="faq" class="parallax-section">
	<div class="container">
		<div class="row">

			<!-- Section title
			================================================== -->
			<!--div class="wow bounceIn col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10 text-center">
				<div class="section-title">
					<h2>Do you have Questions?</h2>
					<p>Ask your queries here.</p>
				</div>
			</div-->

			<!--div class="wow fadeInUp col-md-offset-1 col-md-10 col-sm-offset-1 col-sm-10" data-wow-delay="0.9s">
				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

  					<div class="panel panel-default">
   						<div class="panel-heading" role="tab" id="headingOne">
      						<h4 class="panel-title">
        						<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
          							 What is Responsive Design?        						</a>      						</h4>
    					</div-->
   						<!--div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      						<div class="panel-body">
        						<p>Responsive design is an approach to web page creation that makes use of flexible layouts, flexible images and cascading style sheet media queries. The goal of responsive design is to build web pages that detect the visitor's screen size and orientation and change the layout accordingly.</p>
								
      						</div>
   						 </div>
 					</div-->

    				<!--div class="panel panel-default">
   						<div class="panel-heading" role="tab" id="headingTwo">
      						<h4 class="panel-title">
        						<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          							What are latest UX Developments?        						</a>      						</h4>
    					</div>
   						<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      						<div class="panel-body">
                            	<p>UX design is the pursuit of making things work, for everyone involved. UX design improves the experience for the user, making it smoother, seamless and positive. With new artificial and virtual realities shifting the way we work and socialize, there has been an increase in internet and technological device usage over the past two years. </p>
      						</div>
   						 </div>
 					</div-->

 					<!--div class="panel panel-default">
   						<div class="panel-heading" role="tab" id="headingThree">
      						<h4 class="panel-title">
        						<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          							What things about Social Media will be discussed?        						</a>      						</h4>
    					</div>
   						<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      						<div class="panel-body">
                            	<p>Social media is a collective term for websites and applications that focus on communication, community-based input, interaction, content-sharing and collaboration. People use social media to stay in touch and interact with friends, family and various communities.</p>
      						</div>
   						 </div>
 					 </div>

 				 </div>
			</div-->

		<!--/div>
	</div>
</section-->


<!-- =========================
    VENUE SECTION   
============================== 
<section id="venue" class="parallax-section">
	<div class="container">
		<div class="row">

			<div class="wow fadeInLeft col-md-offset-1 col-md-5 col-sm-8" data-wow-delay="0.9s">
				<h2>Venue</h2>
				<br>
				<h4>Micronet Services, 2nd floor</h4>
  				<h4> K.K.Sankpal Commercial Complex, Main Road</h4>
  				<h4> Unchgaon, Pin 416005</h4>
				<h4>Tel: 010-020-0120</h4>		
			</div>

		</div>
	</div>
</section>-->


<!-- =========================
    Features SECTION   
============================== -->
<section id="sponsors" class="parallax-section">
	<div class="container">
		<div class="row">

			<div class="wow bounceIn col-md-12 col-sm-12">
				<div class="section-title">
					<h2><b> Features and facilities</b></h2>
					
				</div>
			</div>

			<div class="wow fadeInUp col-md-3 col-sm-6 col-xs-6" data-wow-delay="0.3s">
				<img src="images/1.jpg" class="img-responsive" alt="Team members">	
			</div>

			<div class="wow fadeInUp col-md-3 col-sm-6 col-xs-6" data-wow-delay="0.6s">
				<img src="images/f2.jpg" class="img-responsive" alt="Team members">	
			</div>

			<div class="wow fadeInUp col-md-3 col-sm-6 col-xs-6" data-wow-delay="0.9s">
				<img src="images/4.JFIF" class="img-responsive" alt="Team members">	
			</div>

			<div class="wow fadeInUp col-md-3 col-sm-6 col-xs-6" data-wow-delay="1s">
				<img src="images/3.jpg" class="img-responsive" alt="Team members">	
			</div>
			
		</div>
	</div>
</section>

<!--================
	certificate
	==============-->
<section id="Certify" class="parallax-section">
	<div class="container">

			<center><div><font size="5"><b>Courses Certificate</b></font></div></center>
							<br>
						<div class="wow fadeInLeft col-md-offset-1 col-md-5 col-sm-8" data-wow-delay="0.9s">

			<center><img src="images/cert1.png" height="500" width="800"></img></center>
		<div class="row">
		<br>
		
</div>
	</div>
	</div>
</section>


<!-- =========================
    CONTACT SECTION   
============================== -->
<section id="contact" class="parallax-section">

			<div class="wow fadeInUp col-md-5 col-sm-6" data-wow-delay="0.9s">
				<div class="contact_detail">
					<div class="section-title">
						<h2>Keep in touch</h2>
					</div>
					
					<form action="cscript.php" method="POST">
						<input name="name" type="text" class="form-control" id="name" placeholder="Name">
					  	<input name="email" type="email" class="form-control" id="email" placeholder="Email">
					  	<textarea name="message" rows="5" class="form-control" id="message" placeholder="Message"></textarea>
						<div class="col-md-6 col-sm-10">
							<input name="submit" type="submit" class="form-control" id="submit" value="SEND">
						</div>
					</form>
				</div>
			</div>
	<div class="container" align="left">
	      <div class="col-md-7 col-sm-12" >
		<div class="row">
		     <div class="contact-map">			    
			  <iframe src="https://www.google.com/maps/d/embed?mid=1Y2IRFLpDAfGMrexqncr9d98Q8jQ&hl=en&ehbc=2E312F" width="640" height="480"></iframe></div></div>
			<div class="wow fadeInUp col-md-offset-1 col-md-5 col-sm-6" data-wow-delay="0.6s">
				<div class="contact_des">
				
				</div>
			</div>
			</div>

		</div>
	</div>
</section>


<!-- =========================
    FOOTER SECTION   
============================== -->

			
				<?php
				include('footer.php');
				?>

			
			
		

<!-- Back top -->
<a href="#back-top" class="go-top"><i class="fa fa-angle-up"></i></a>


<!-- =========================
     SCRIPTS   
============================== -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.parallax.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>
<div class="form-group">
                                        
</body>
</html>