<?php
// Basic page setup
$title = 'Donate';
$description = '';
$keywords = '';
$link = 'donate.php';

// Include(s)
require_once('assets/inc/global.php');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>


<?php include('assets/tpl/head.php'); echo "\n"; ?>
</head>
<body>

<?php include('assets/tpl/header.php'); echo "\n"; ?>

	<div id="container">
		<div class="padding">
			
		
			<div id="content">

<form action="donate-redirect.php" method="post">

<table>
	<tr>
		<td><input type="submit" name="submit" value="$5" /></td>
		<td><input type="submit" name="submit" value="$10" /></td>
	</tr>
</table>

</form>


<?php include('assets/tpl/footer.php'); echo "\n"; ?>
</body>
</html>