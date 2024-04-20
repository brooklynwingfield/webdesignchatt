<?php
    $companyName = "Night School Studio || Oxenfree";
    include('arrays.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo TITLE; ?></title>
    <link href="/CSS/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body id="final-example">
    <div class="wrapper">
        <div id="banner">
            <a href="/" title="Return to Home">
                <img src="images/banner.png" alt="Oxenfree">
            </a>
        </div>
        <div id="nav">
            <?php include('nav.php'); ?>
        </div>