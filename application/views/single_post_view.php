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

</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="index">Home</a>
			</div>
			<div>
        <?php
		
								?>
  
    </div>
		</div>
	</nav>

	<div class="container" id="content">
	<?php
foreach ($posts as $item){
		echo "<div>";
			echo " <h2>" . $item ['title'] . "</h2>";
			echo "<p>" . $item ['text'] . "</p>";
			echo  "published: " . $item ['create_at'];
			echo "</div>";
}
	?>
	</div>
	<script
		src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>