<?php
	
	// Constants
	define ("TITLE", "Comparison Operators");
	
	// Custom Variables
	$my_name = "Brooklyn";
	$lesson_num = 14;

	$years_on_earth = 25.32;
	$favorite_string_num = "1";
	$birth_country = "Canada";
?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP <?php echo TITLE; ?></title>
		<link href="../assets/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="../assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Tutorial <?php echo $lesson_num; ?> : <small><?php echo TITLE; ?></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
				
				<h3>Equal <code>==</code></h3>
				<?php
					if ($years_on_earth == 25.32) {
						echo "<p>Your age is equal to $years_on_earth</p>";
					}
				?>
				
				<h3>Identical <code>===</code></h3>
				<?php
					if ($favorite_string_num === 1) {
						echo "<p>Your favorite number is an integer.</p>";
					} elseif ($favorite_string_num === "1") {
						echo "<p>Your favorite number is a string called 1!</p>";
					} else {
						echo "<p>You must have a different favorite number than 1 the integer or string.</p>";
					}
				?>
				
				<h3>Not Equal <code>!=</code></h3>
				<?php
					if ($birth_country != "Mexico") {
						echo "<p>Excuse me, senor. You must not be from around here.</p>";
					}
				?>
				
				<h3>Not Identical <code>!==</code></h3>
				<?php
					if ($years_on_earth != "25.32") {
						echo "<p>You are not exactly the string '$years_on_earth'.</p>";
					} else {
						echo "<p>You are exactly the string '$years_on_earth'.</p>";
					}
				?>
				
				<h3>Less Than <code>&lt;</code></h3>
				<?php
					if ($lesson_num < 15) {
						echo "<p>You haven't quite made it to lesson 15 yet.</p>";
					}
				?>
				
				<h3>Greater Than <code>&gt;</code></h3>
				<?php
					if ($lesson_num > 10) {
						echo "<p>You've made it past lesson 10.</p>";
					}
				?>
				
				<h3>Less Than or Equal To <code>&lt;=</code></h3>
				<?php
					if ($lesson_num <= 14) {
						echo "<p>$lesson_num is less than or equal to 14.</p>";
					}
				?>
				
				<h3>Greater Than or Equal To <code>&gt;=</code></h3>
				<?php
					if ($lesson_num >= 4) {
						echo "<p>$lesson_num is greater than or equal to 4.</p>";
					}
				?>
				
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the lecture</a>
			
			<hr>
			
			<small>&copy;<?php echo date('Y'); ?> - <?php echo $my_name; ?></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
