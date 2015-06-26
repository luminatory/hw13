<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title><?php echo $_SERVER['PHP_SELF'] ?></title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet"
	href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<style>
html, body {
	height: 100%;
}

#footer {
	background-color: black;
	bottom: 0;
	width: 100%;
	color: white;
	clear: both;
	text-align: center;
	padding: 5px;
}
</style>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="index" data-toggle="tooltip"
					title="Return Home"><p class="text-danger">Home</p></a>

					<?php 
					echo '<ul class="nav navbar-nav">';
	               foreach ( $categories as $row) {
			       echo '<li>';
			      echo $row['name'];
			       echo '<li>' ."<a href='categories?id=".$row['id']=$row['name']."'> ";
			       echo "<br />";
			       echo '</li>';
		}
		echo '</ul>';
					?>
			</div>
    <?php
		
				
				?>
     <a data-toggle="modal" href="login"
				class="btn btn pull-right btn-link btn-lg">Login</a>
		</div>
		</div>
	</nav>
	<br />
	<br />
	<div class="container" id="content">
		<!--login modal-->
		<br />

	</div>
	</div>
	</div>
	</div>

	<div class="container">
		<h2>5 lastest posts</h2>
		<img
			src="http://img2.wikia.nocookie.net/__cb20120912061448/oldschool/ru/images/9/94/Yoba.png"
			alt="This is blog" width="250" height="280" />

   <?php
		
		foreach($articles as $item){
			echo "<div>";
				echo " <h2> <a href='single_posts?id=" . $item ['id'] . "'>" . $item ['title'] . "</a> </h2>";
				echo "<p>" . $item ['description'] . "</p>";
				echo "</div>";
				echo "<br />";
			}
			?>
		
    </div>
	</div>

	<div id="footer">Copyright © Sergey Grigorov</div>
</body>
</html>