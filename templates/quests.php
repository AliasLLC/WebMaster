<?php
require_once('../modules/quest.php');
require_once('../modules/comments.php');

// Guide Sspecific stuff
$guideTitle = $article['title'];
$guideCategory = 'Quest';

// Basic page setup
$title = $guideTitle . ' &raquo; ' . $guideCategory . ' Guide';
$description = '';
$keywords = '';
$link = '/'.$article_category.'/'.$article['title_seo'].'-'.$article['article_id'].'.html';

// Include(s)
require_once('../assets/inc/global.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>


<?php include('../assets/tpl/head.php'); echo "\n"; ?>
<script type="text/javascript" src="/admin/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="/admin/js/ckeditor.js"></script>
<script type="text/javascript" src="/modules/ckeditor.js"></script>
<script type="text/javascript"
	src="http://jqueryjs.googlecode.com/files/jquery-1.2.6.min.js"></script>
<script type="text/javascript" src="/modules/js_comments.js"></script>
<link rel="stylesheet" type="text/css" href="/templates/stylesheet.css" />
</head>
<body>


<?php include('../assets/tpl/header.php'); echo "\n"; ?>


<?php include('../assets/tpl/navigation.php'); echo "\n"; ?>
	<div id="container">
		<div class="padding">
			
			
		<?php include('../assets/tpl/sidebar.php'); echo "\n"; ?>
			<div id="content">
				<!-- the toggle button only appears on a guide page. note how .jump-to also has .hide -->
				
				
<?php include('../assets/tpl/guide-selection.php'); echo "\n"; ?>
				<h1 class="heading"><a href="javascript:null(0);" title="Show or hide the guide selection panel" class="jump-to-toggle toggle right">Show/hide selection ▼</a><?php echo $guideTitle; ?></h1>                
				<div id="guide-heading">
					<img src="../assets/img/posts/new_quest.jpg" title="" alt="" class="post-image" id="guide-banner" />
				</div>
				<div id="guide-facts">
					<table cellpadding="0" cellspacing="0" border="0">
						<tr>
							<td valign="top">
								<h4>Reward</h4>
								<?php echo $article['reward']; ?>
							</td>
							<td valign="top">
								<h4>Requirements</h4>
								<?php if($article['requirements'] == '') { echo 'None'; } else { echo $article['requirements']; } ?>
							</td>
							<td valign="top">
								<h4>Items Needed</h4>
								<?php if($article['items_needed'] == '') { echo 'None'; } else { echo $article['items_needed']; } ?>
							</td>
							<td valign="top">
								<h4>Reccomendations</h4>
								<?php if($article['recommendations'] == '') { echo 'None'; } else { echo $article['recommendations']; } ?>
							</td>
						</tr>
					</table>
				</div>
				<div id="information">
					<p id="guide-description"><?php echo $article['description']; ?></p>
				</div>
				<div id="guide">
                <h1><font size="5">Start Point</font></h1>
                <p><?php echo $article['start_point']; ?></p>
					<?php echo $article['content']; ?>
				</div>
				<div class="divider"></div>
				<div id="credits">
					<?php if($article['edit_username'] != ''){ ?>
                    <p class="right">Last modified on <?php echo date("d/m/Y",$article['edit_timestamp']); ?> by <a href="/community/index.php?/user/<?php echo $article['edit_userid']; ?>-<?php echo $article['edit_username']; ?>/" title="Author" class="guide-author"><?php echo $article['edit_username']; ?></a></p>
                    <?php } ?>
					<p><strong>Contributers:</strong> <?php echo $article['credits']; ?></p>
				</div>
	<?php require_once('comments.php'); ?>
			</div>
			
			
			
			
			<?php leaderboardBottom(); ?>
		</div>
		<div class="clear"></div>
	</div>
	
	
	
	
<?php include('../assets/tpl/footer.php'); echo "\n"; ?>
</body>
</html>
