<?php 

session_start();

if (isset($_SESSION['uname'])) {
	echo "<h1> Welcome ".$_SESSION['uname']."</h1>";
	echo "<h2>Welcome to Home Page</h2>";
	echo "<br><a href='welcome.php'>back to previous page</a>";
}

else{
	header("location:login.php");
}

 ?>

 <html>
<head>
	<meta charset="utf-8">
	<title>eLearning - Free Educational Responsive Web Template </title>
	<link rel="favicon" href="assets/images/favicon.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen">
	<link rel="stylesheet" type="text/css" href="assets/css/da-slider.css" />
	<link rel="stylesheet" href="assets/css/style.css">
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	
	<?php
		include "navbar.php";
	?>
	<header id="head" class="secondary">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<h1>CSS</h1>
				</div>
			</div>
		</div>
	</header>
		<div class="container-fluid" style="margin-top:10px;margin-left:82px;margin-right:450px;">
			<h1>CSS Fundamentals,PHP,PYTHON,HTML</h1><br><label>Our learning tutorial is a learning game that will give you how to set and control the style and layout of a website.Read our carefully selected chapters, take the interactive quizzes, complete entertaining exam to upgrade your rank, and give your student to practice filling out actual CSS templates,PHP Website,Python Game and HTML Webpage. Whether your student want to gain a new skill to further your career, or just want to learn something new, we guarantee that your student will enjoy learning while playing and playing while learning with our tutorial!</label><button onclick="location.href='../css/chapter1.php'" class="btn btn-block">Start Teaching </button>
		</div>
		<div class="container-fluid" style="margin-left:82px;margin-right:450px;">
			<h1>Chapters :</h1><ol>
			<li>Chapter 1: CSS</li>
			<li>Chapter 2: PHP</li>
			<li>Chapter 3: PYTHON</li>
			<li>Chapter 4: HTML</li>
			</ol>
			<button onclick="location.href='purchase.php'" class="btn btn-block">Purchase Now To Unlock More Teaching Tool </button><br>
			<button onclick="location.href='../download/index.php'" class="btn btn-block">Download free E-Books</button><br>

		</div>
	
</body>
</html>