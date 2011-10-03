<?php
// Basic page setup
$page = 'account';
$title = 'Your Profile';
$description = '';
$keywords = '';
$link = 'account.php';

// Grab passthroughs
$accountPage = $_GET['page'];

// Set up specific page
if($accountPage == NULL) {
	$accountPage = 'profile';
} elseif($accountPage == 'profile') {

} elseif($accountPage == 'settings') {
	$title = 'Your Account Settings';
} elseif($accountPage == 'transactions') {
	$title = 'Your Account Transactions';
}

// Include(s)
require_once('assets/inc/global.php');
require_once 'system/config.php';
require_once 'system/modules/System.class.php';
$system = new System($INFO['sql_host'], $INFO['sql_user'], $INFO['sql_pass'], $INFO['sql_database'], $INFO['sql_site_tnl_prefix']);
$system->pageViews($page, $_SERVER['REMOTE_ADDR']);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>


<?php include('assets/tpl/head.php'); echo "\n"; ?>
</head>
<body>


<?php include('assets/tpl/header.php'); echo "\n"; ?>


<?php include('assets/tpl/navigation.php'); echo "\n"; ?>
	<div id="container">
		<div class="padding">
			
			
		<?php include('assets/tpl/sidebar.php'); echo "\n"; ?>
			<div id="content">
				<div id="account">
					<ul class="tabs">
						<li   <?php if($accountPage == 'profile') { ?> class="active"
							
						<?php } ?>><a href="?page=profile" title="Your Profile">Your
								Profile</a></li>
						<li   <?php if($accountPage == 'settings') { ?> class="active"
							
						<?php } ?>><a href="?page=settings" title="Settings">Settings</a>
						</li>
						<li   <?php if($accountPage == 'transactions') { ?> class="active"
							
						<?php } ?>><a href="?page=transactions" title="Transactions">Transactions</a>
						</li>
					</ul>
					<img
						src="http://services.runescape.com/m=avatar-rs/avatar.png?id=7872978"
						class="character-face" width="26" height="26"
						alt="RuneScape Avatar" />
					<h1>
						Yost <span class="karma positive" title="Karma score">125</span>
					</h1>
					
					
					
					
					<?php if($accountPage == 'profile') { ?>
					<div class="info-box">
						<div class="close">Hide</div>
						<h2>This is your public profile page</h2>
						<p>What you see here is what others will see when they view your profile!</p>
					</div>
					<table cellpadding="0" cellspacing="0" border="0" width="100%">
						<tr>
							<td width="50%" valign="top">
								<h3>MRL Accolades</h3>
								<h4>Contributions</h4>
								<h4>Comments</h4>
							</td>
							<td width="50%" valign="top">
								<h3>RuneScape</h3>
								<img src="http://services.runescape.com/m=avatar-rs/avatar.png?id=7891853" class="right" alt="RuneScape Avatar Body" />
								<h4>Latest Achievement</h4>
								<?php
									// broken atm, feeds only work if they end in .rss
									$runescapeLog = new SimplePie('http://services.runescape.com/m=adventurers-log/rssfeed?searchName=Yost', $cache, $duration);
									
									foreach ($runescapeLog->get_items() as $item) {
										$runescapeLogDescription = $item->get_title();
										
										if($z != 1) {
								?>
								<p><?php echo $runescapeLogDescription; ?></p>
								<?php
											$z++;
										}
									}
								?>
							</td>
						</tr>
					</table>
					<?php } elseif($accountPage == 'settings') { ?>
					<form>
						<h3>RuneScape Settings</h3>
						<label for="runescapeName">RuneScape Name</label>
						<input type="text" id="runescapeName" name="runescapeName" value="Yost" disabled="disabled" />
						<label for="runescapeNameAlt">RuneScape Name (alt. account)</label>
						<input type="text" id="runescapeNameAlt" name="runescapeNameAlt" value="YostIsHot" />
						<label for="runescapeMembership">Main Account Membership Status</label>
						<select name="runescapeMembership" id="runescapeMembership">
							<option value="member">Member</option>
							<option value="non-member">Non-Member</option>
						</select>
						<h3>Website Settings</h3>
						<h3>Forum Settings</h3>
						<input type="submit" id="submit" value="Save Changes" />
					</form>
					<?php } elseif($accountPage == 'transactions') { ?>
					<h3>Website Transactions</h3>
					<table class="background" cellpadding="0" cellspacing="0" border="0" width="100%">
						<thead>
							<tr>
								<td>No.</td>
								<td>Name</td>
								<td>Charge</td>
								<td>Date</td>
							</tr>
						</thead>
						<tr>
							<td>1</td>
							<td>Membership - 12 months</td>
							<td>$32.00 USD</td>
							<td>03/18/10</td>
						</tr>
						<tr>
							<td>2</td>
							<td>Membership - 6 months</td>
							<td>$16.00 USD</td>
							<td>04/18/11</td>
						</tr>
						<tr>
							<td>3</td>
							<td>MRL Shirt - Men Med.</td>
							<td>$32.00 USD</td>
							<td>04/18/11</td>
						</tr>
						<tr>
							<td>4</td>
							<td>Membership - 12 months</td>
							<td>$32.00 USD</td>
							<td>04/18/11</td>
						</tr>
					</table>
					<?php } ?>
				</div>
			</div>
			
			
			
			
			<?php leaderboardBottom(); ?>
		</div>
		<div class="clear"></div>
	</div>
	
	
	
	
<?php include('assets/tpl/footer.php'); echo "\n"; ?>
</body>
</html>
