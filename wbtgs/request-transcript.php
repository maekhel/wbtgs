<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Transcript Generation System</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="libs/html5shiv.min.js"></script>
      <script src="libs/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	<div class="container">
		<header id="site-header" class="row">
			<div id="logo" class="col-md-3">
				<img src="img/laspotech.png" alt="logo">
			</div>
			<div id="site-name" class="col-md-9">
				<h2>LAGOS STATE POLYTECHNIC</h2>
				<h4>School Of Part-Time Studies Evening (SPTSE)</h4>
				<h5>Student Transcript Generation System</h5>
			</div>
		</header>
		<div id="content" class="row">
			<div id="main" class="col-md-12">
				<div id="breadcrumb" class="row">
					<div class="col-md-12">
						<ul class="breadcrumb">
							<li><a href='index.php'>Home</a></li>
                                                        <li><a href='profile.php'>Profile</a></li>
                                                        <li>Request Transcript</li>
						</ul>
					</div>
				</div>
				<div id="main-content">
					<section id='menu' class="col-md-3">
                                            <ul>
                                                <li><a href="view-transcript.php">View Transcript</a></li>
                                                <li><a href="request-transcript.php">Request Transcript</a></li>
                                                <li><a href="logout.php">Log Out</a></li>
                                            </ul>
					</section>
					<section class="col-md-9 well">
                                             <?php
					 if(isset($_SESSION['loggedIn']) && isset($_SESSION['matric'])){
                                            echo '<p>' . 'Welcome ' . '<b>' .$_SESSION['matric'] . '</b>' . '</p>';
                                        }  else {
                                            header("location: index.php");
                                        }
                                    ?>
					</section>
				</div>
			</div>
		</div>
<footer id="site-footer" class="row">
			<section class="col-md-12">
				<p>&copy;2013 LASPOTECH SPTSE</p>
			</section>
		</footer>
	</div>
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="libs/jquery-1.10.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>