<?php
// Basic page setup
$title = 'Home';
$description = '';
$keywords = '';
$link = 'index.php';

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


<?php include('assets/tpl/navigation.php'); echo "\n"; ?>
	<div id="container">
		<div class="padding">
			
			
		<?php include('assets/tpl/sidebar.php'); echo "\n"; ?>
			<div id="content">
				<div class="item-news">
					<div class="post-title">
						<h2>Inside the New Quest</h2>
						<p class="post-meta">
							by <strong>Ability44</strong> on <strong>Dec 29, 2010</strong>
						</p>
					</div>
					<p class="post-category">
						<a href="news.php?cat=RuneScape" title="Category: RuneScape">RuneScape</a>
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
						<p>Pellentesque habitant morbi tristique senectus et netus et
							malesuada fames ac turpis egestas. Vestibulum tortor quam,
							feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu
							libero sit amet quam egestas semper. Aenean ultricies mi vitae
							est. Mauris placerat eleifend leo.</p>
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
			
			
			
			
			<?php leaderboardBottom(); ?>
		</div>
		<div class="clear"></div>
	</div>
	
	
	
	
<?php include('assets/tpl/footer.php'); echo "\n"; ?>
</body>
</html>
