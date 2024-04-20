<?php
	
	// Define a Constant
	define("TITLE", "Variables and Constants");

	// Your Variables
	$my_name = 'Brooklyn';
	$fav_color = 'Yellow';
	$birth_year = '2004';
	
	date_default_timezone_set('America/New_York');
	$today = date('F j, Y');
	$this_year = date('Y');

	/*
	Use PHP to calculate the difference
	between your birth year and this year
	to show your age dynamically
	*/
	$my_age = ($this_year - $birth_year);
	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Get Your Hands Dirty: <?php echo TITLE; ?></title>
		<link href="../assets/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="../assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Get Your Hands Dirty: <small><?php echo TITLE; ?></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
				<h3>Today's Date:</h3>
				<?php echo $today; ?>
				
				<h3>My Name:</h3>
				<?php echo $my_name; ?>
				
				<h3>My Favourite Colour:</h3>
				<?php echo $fav_color; ?>
				
				<h3>My Age:</h3>
				<?php echo $my_age; ?>
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the final example</a>
			
			<hr>
			
			<small>&copy; <?php echo $this_year ?> - <?php echo $my_name ?></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>