<?php
$page = 'index';
$title = 'Home';
require_once 'system/config.php';
require_once 'system/Classes/Autoloader.Class.php';
$autoLoad = new Autoloader("system/Classes/", "system/Interfaces/");
$autoLoad->setClassSuffix(".Class");
$autoLoad->setInterfaceSuffix(".Interface");
function _autoLoad($class_name){
	$autoLoad->autoLoad($class_name);
}
$system = new System($INFO['sql_host'], $INFO['sql_user'], $INFO['sql_pass'], $INFO['sql_database'], $INFO['sql_site_tnl_prefix']);
$news = new News($INFO['sql_host'], $INFO['sql_user'], $INFO['sql_pass'], $INFO['sql_database'], $INFO['sql_site_tnl_prefix']);
$system->pageViews($page, $_SERVER['REMOTE_ADDR']);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $title; ?> &raquo; My Rune Log</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="distribution" content="global" />
<meta name="robots" content="follow, all" />
<link type="image/x-icon" rel="shortcut icon" href="favicon.ico" />

<link type="text/css" rel="stylesheet" href="assets/css/main.css" />
<script type="text/javascript"
	src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
<script type="text/javascript"
	src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.uniform.min.js"></script>
<script type="text/javascript" src="assets/js/global.js"></script>
<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-4498947-28']);
		_gaq.push(['_trackPageview']);
		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
</script>

</head>
<body>
	<a name="top"></a>
	<div id="bar">
		<div class="padding">
			<ul>
				<li><a
					href="http://127.0.0.1/Projects/In-Progress/MyRuneLog/account.php"
					title="My Account">My Account</a></li>
				<li><a
					href="http://127.0.0.1/Projects/In-Progress/MyRuneLog/support.php"
					title="Help">Help</a></li>
				<li><a
					href="http://127.0.0.1/Projects/In-Progress/MyRuneLog/logout.php"
					title="Log Out">Log Out</a></li>
			</ul>
		</div>
	</div>
	<div id="header" class="barbarian">
		<div class="padding">
			<div id="user" class="right">
				<img src="http://myrunelog.com/assets/img/avatar_default.jpg"
					title="Ability44" alt="Your Avatar" class="right" />
				<h5>Ability44</h5>
				<ul>
					<li>344 credits</li>
					<li>97 karma</li>
				</ul>
			</div>
			<div id="logo">
				<a href="http://127.0.0.1/Projects/In-Progress/MyRuneLog/index.php"
					title="My Rune Log - Home" class="fill"></a>
			</div>

		</div>
	</div>
	<div class="separator"></div>
	
	
	
	
	<?php require_once 'assets/tpl/navigation.php'; ?>
	<div id="container">
		<div class="padding">
			<?php require_once 'assets/tpl/sidebar.php'; ?>
			<div id="content">
			<?php
			$query = $news->fetchNews();
			while ($result = $query->fetch_assoc()) {
				?>
				<div class="item-news">

					<div class="post-title">
						<h2><?php echo $result['title']; ?></h2>
						<p class="post-meta">
							by <strong><a href="forums/users/<?php echo $result['news_poster']; ?>"><?php echo $result['news_poster']; ?></a></strong> on <strong><?php echo date("m/d/y", strtotime($result['date_added'])); ?></strong>
						</p>
					</div>
					<p class="post-category">
						<a href="news.php?cat=<?php echo $news->getCategorynamebyid($result['category_id']); ?>" title="Category: <?php echo $news->getCategorynamebyid($result['category_id']); ?>"><?php echo $news->getCategorynamebyid($result['category_id']); ?></a>
					</p>

					<img src="<?php echo $result['header_link']; ?>"
						alt="Inside the New Quest" class="post-image" />
					<div class="post-content">
						<?php echo $result['text']; ?>
					</div>
					<div class="post-bottom">

						<ul>
							<!-- Link and text, in this case # and Read Guide, customizable in ACP when making a new post. -->
							<li><a href="#" title="Read Guide">Read Guide</a></li>
							<!-- When making a new post, you can select a post from the News forum to use as content. Of course, it needs to be posted there fist. -->
							<li><a href="#" title="Comments">44 Comments</a></li>
						</ul>
					</div>
				</div>
				
				
				
				
				<?php 
			}
				?>
				<div class="item-news">
					<div class="post-title">
						<h2>The New Update</h2>
						<p class="post-meta">
							by <strong>Ability44's Friend</strong> on <strong>Dec 29, 2010</strong>
						</p>
					</div>
					<p class="post-category">
						<a href="news.php?cat=RuneScape%20Leaks"
							title="Category: RuneScape Leaks">RuneScape Leaks</a>
					</p>

					<img src="assets/img/posts/new_quest.jpg"
						alt="Inside the New Quest" class="post-image" />
					<div class="post-content">
						<p>
							Pellentesque habitant morbi tristique senectus et netus et
							malesuada fames ac turpis egestas. Vestibulum tortor quam,
							feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu
							libero sit amet quam egestas semper. Aenean ultricies mi vitae
							est. Mauris placerat eleifend leo. Quisque sit amet est et sapien
							<strong>ullamcorper pharetra</strong>. Vestibulum erat wisi,
							condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean
							fermentum, elit eget tincidunt condimentum, eros ipsum rutrum
							orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis
							pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus
							faucibus, tortor neque egestas augue, eu vulputate magna eros eu
							erat. Aliquam <a href="#">erat volutpat</a>. Nam dui mi,
							tincidunt quis, accumsan porttitor, facilisis luctus, metus
						</p>
					</div>
					<div class="post-bottom">
						<ul>

							<li><a href="#" title="Read Guide">Discuss</a></li>
							<li><a href="#" title="Comments">65 Comments</a></li>
						</ul>
					</div>
				</div>
				<div class="item-news">
					<div class="post-title">
						<h2>Bringing Back Free Trade?</h2>

						<p class="post-meta">
							by <strong>Ability44</strong> on <strong>Dec 21, 2010</strong>
						</p>
					</div>
					<p class="post-category">
						<a href="news.php?cat=RuneScape" title="Category: RuneScape">RuneScape</a>
					</p>
					<img src="assets/img/posts/new_quest.jpg"
						alt="Bringing Back Free Trade?" class="post-image" />
					<div class="post-content">
						<p>Pellentesque habitant morbi tristique senectus et netus et
							malesuada fames ac turpis egestas. Vestibulum tortor quam,
							feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu
							libero sit amet quam egestas semper. Aenean ultricies mi vitae
							est. Mauris placerat eleifend leo.</p>

					</div>
					<div class="post-bottom">
						<ul>
							<li><a href="#" title="Read Guide">View Topic</a></li>
							<li><a href="#" title="Comments">298 Comments</a></li>
						</ul>
					</div>
				</div>

			</div>
			<div id="advertisment-bottom"></div>
		</div>
		<div class="clear"></div>
	</div>
	<div id="footer">
		<div class="padding">
			<table cellpadding="0" cellspacing="0">
				<tr>

					<td>
						<div id="footer-logo">
							<a href="#top" title="Going up?" class="fill"></a>
						</div>
					</td>
					<td>
						<p>Content copyright &copy; 2011 MyRuneLog</p>

						<p>RuneScape is a registered trademark of Jagex, Limited</p>
						<p>We are in no way affiliated with Jagex, Limited</p> <br />
						<p>
							<a href="http://127.0.0.1/Projects/In-Progress/MyRuneLog/contact.php" title="Contact Us">Contact</a>
							|
							<a href="http://127.0.0.1/Projects/In-Progress/MyRuneLog/faq.php" title="Frequently Asked Questions">FAQ</a>
							|
							<a href="http://127.0.0.1/Projects/In-Progress/MyRuneLog/account.php" title="Your Account">Your Account</a>
							|
							<a href="http://127.0.0.1/Projects/In-Progress/MyRuneLog/terms.php" title="Terms of Service">Terms of Service</a>
							|
							<a href="http://127.0.0.1/Projects/In-Progress/MyRuneLog/privacy.php" title="Privacy Policy">Privacy Policy</a>
						</p>

						<p id="curated">
							Curated by <a href="http://www.youtube.com/user/WhatsUpWithRS" target="_blank" title="Ability44's YouTube Channel">Ability44</a>
						</p>
					</td>
				</tr>
			</table>
		</div>
	</div>
</body>
</html>
