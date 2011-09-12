<?php
	require_once('../modules/npcs.php');
	require_once('../modules/comments.php');

	// Guide Sspecific stuff
	$guideTitle = $article['name'];
	$guideCategory = 'NPCs';
	
	// Basic page setup
	$title = $guideTitle . ' &raquo; ' . $guideCategory . ' Guide';
	$description = '';
	$keywords = '';
	$link = '/'.$article_category.'/'.$article['name_seo'].'-'.$article['article_id'].'.html';
	
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
	<script type="text/javascript" src="http://jqueryjs.googlecode.com/files/jquery-1.2.6.min.js"></script>
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
            
<div class="article_title"><h2><?php echo $article['name']; ?></h2></div>

<div class="article_box">
    <div class="article_box_inner">
    <table width="100%" border="0">
  <tr>
    <td width="200px"><?php if($article['image'] != '') { ?><img src="/images/npcs/<?php echo $article['image']; ?>" alt="" /><?php } else { ?><img src="/images/default.png" alt="" /><br /><a href="#">Submit an image</a><?php } ?></td>
    <td width="470px"><b>Notes:</b> <?php echo $article['content']; ?><br /><br />
<center><h2>Information</h2></center>
    <center><?php yes_no($article['members']) ?> Members | 
    <?php yes_no($article['attackable']) ?> Attackable<br /><br /></center>
    <?php if($article['race'] != '') { ?><b>Race:</b> <?php echo $article['race'].'<br /><br />'; } ?>
    <?php if($article['location'] != '') { ?><b>Location:</b> <?php echo $article['location'].'<br /><br />'; } ?>
    <?php if($article['quests_related'] != '') { ?><b>Quests Related:</b> <?php echo $article['quests_related'].'<br /><br />'; } ?>
    
	<?php if($article['attackable'] == '1') { ?>
    	<?php if($article['combat_aggresive'] == '1') { ?><b>Aggresive:</b> <?php yes_no($article['combat_aggresive']) ?><br /><?php } ?>
    	<b>Level:</b> <?php echo $article['combat_level']; ?><br />
    	<b>Health Points:</b> <?php echo $article['combat_hp']; ?><br />
    	<?php if($article['combat_attack_style_melee'] == '1') { ?><b>Attack Style Melee:</b> <?php yes_no($article['combat_attack_style_melee']) ?><br /><?php } ?>
    	<?php if($article['combat_attack_style_magic'] == '1') { ?><b>Attack Style Magic:</b> <?php yes_no($article['combat_attack_style_magic']) ?><br /><?php } ?>
    	<?php if($article['combat_attack_style_range'] == '1') { ?><b>Attack Style Range:</b> <?php yes_no($article['combat_attack_style_range']) ?><br /><?php } ?>
    	<?php if($article['combat_retreats'] == '1') { ?><b>Retreats:</b> <?php yes_no($article['combat_retreats']) ?><br /><?php } ?>
    	<?php if($article['combat_poisonous'] == '1') { ?><b>Poisonous:</b> <?php yes_no($article['combat_poisonous']) ?><br /><?php } ?>
    	<b>Drops:</b> <?php echo $article['combat_drops']; ?><br />
	<?php } ?>
</td>
  </tr>
</table>
    </div>
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