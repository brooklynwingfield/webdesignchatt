<?php
	
	// Constants
	define("TITLE", "Logical Operators");
	
	// Custom Variables
	$my_name = "Brooklyn";
	$lesson_num = 15;

	$username = "johnnyboy";
	$password = "qwerty";

	$cart_total = 19.99;
	$coupon_code = "DiscountPlease";
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
			
			<h1>Tutorial <?php echo $lesson_num; ?>: <small><?php echo TITLE; ?></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
				
				<h3>And <code>and</code></h3>
				<?php
					if ($username == "johnnyboy" and $password == "qwerty") {
						echo "<p>Login info is correct!</p>";
					}
				?>
				
				<h3>Or <code>or</code></h3>
				<?php
					if ($cart_total > 15 or $coupon_code == "DiscountPlease") {
						echo "<p>You get a discount!</p>";
					} else {
						echo "<p>You don't get a discount</p>";
					}
				?>
				
				<h3>Not <code>!</code></h3>
				<?php
					$own_dog = true;
					if (!$own_dog) {
						echo "<p>You do not own a dog.</p>";
					} else {
						echo "<p>You own a dog.</p>";
					}
				?>
				
				<h3>And <code>&amp;&amp;</code></h3>
				<?php
					if ($username == "johnnyboy" && $password == "qwerty") {
						echo "<p>Login info is correct!</p>";
					} else {
						echo "<p>Wrong Login Info.</p>";
					}
				?>
				
				<h3>Or <code>||</code></h3>
				<?php
					if ($cart_total > 15 || $coupon_code == "DiscountPlease") {
						echo "<p>You get a discount!</p>";
					} else {
						echo "<p>You don't get a discount!</p>";
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
