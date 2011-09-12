<?php	
	// Basic page setup
	$title = '404 Error - Page not found';
	$description = '';
	$keywords = '';
	$link = '/404.html';
	
	// Include(s)
	require_once('../assets/inc/global.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include('../assets/tpl/head.php'); echo "\n"; ?>  
    <link rel="stylesheet" type="text/css" href="/templates/stylesheet.css" />
</head>
<body>
<?php include('../assets/tpl/header.php'); echo "\n"; ?>
<?php include('../assets/tpl/navigation.php'); echo "\n"; ?>
	<div id="container">
		<div class="padding">
<?php include('../assets/tpl/sidebar.php'); echo "\n"; ?>
			<div id="content">
            <h1>SORRY THIS PAGE DOES NOT EXIST! (404 ERROR)</h1>
            <p>You are on this page because the page you have tried to access cannot be found, the reason for this can be on the following:</p>
    <ul>
        <li>Doesn't exist anymore</li>
        <li>Has been moved</li>
        <li>The URL has been mistyped</li>
    </ul>
<p>We suggest going to the <a href="http://www.myrunelog.com">homepage</a> or <a href="http://myrunelog.com/contact.php">contact us</a> for help directly if this reoccurs.</p>
			</div>
			<?php leaderboardBottom(); ?>
		</div>
		<div class="clear"></div>
	</div>
<?php include('../assets/tpl/footer.php'); echo "\n"; ?>
</body>
</html>