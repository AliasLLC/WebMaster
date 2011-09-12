<?php
	require_once('../modules/items.php');
	require_once('../modules/comments.php');

	// Guide Sspecific stuff
	$guideTitle = $article['title'];
	$guideCategory = 'Items';
	
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
            
<div class="article_title"><h2><?php echo $article['title']; ?></h2></div>

<div class="article_box">
    <div class="article_box_inner">
    <table width="100%" border="0">
  <tr>
    <td width="200px"><?php if($article['image'] != '') { ?><img src="/images/items/<?php echo $article['image']; ?>" alt="" /><?php } elseif($no_item !== TRUE) { ?><img src="http://services.runescape.com/m=itemdb_rs/3387_obj_big.gif?id=<?php echo $runescape_id; ?>" alt="" /><br /><a href="#">Submit an image</a><?php } else { ?><img src="/images/default.png" alt="" /><br /><a href="#">Submit an image</a><?php } ?></td>
    <td width="470px">
	<?php if ($article['equips'] == 1) { ?>
    <table width="100%">
    <tr>
    <td colspan="3" align="center"><b>Bonuses</b><br /></td>
    </tr>
  <tr>
    <td width="33%" style="border: 1px solid #0f0f0c;padding: 5px;"><b>Attack</b><br />
	<?php if($article['equip_stab_att'] != '0') { if($article['equip_stab_att'] != '') { ?>Stab Attack: <?php echo $article['equip_stab_att'].'<br />'; }} ?>
	<?php if($article['equip_slash_att'] != '0') { if($article['equip_slash_att'] != '') { ?>Slash Attack: <?php echo $article['equip_slash_att'].'<br />'; }} ?>
	<?php if($article['equip_crush_att'] != '0') { if($article['equip_crush_att'] != '') { ?>Crush Attack: <?php echo $article['equip_crush_att'].'<br />'; }} ?>
	<?php if($article['equip_magic_att'] != '0') { if($article['equip_magic_att'] != '') { ?>Magic Attack: <?php echo $article['equip_magic_att'].'<br />'; }} ?>
	<?php if($article['equip_range_att'] != '0') { if($article['equip_range_att'] != '') { ?>Range Attack: <?php echo $article['equip_range_att'].'<br />'; }} ?></td>
    <td width="33%" style="border: 1px solid #0f0f0c;padding: 5px;"><b>Defence</b><br />
	<?php if($article['equip_stab_def'] != '0') { if($article['equip_stab_def'] != '') { ?>Stab Defence: <?php echo $article['equip_stab_def'].'<br />'; }} ?>
	<?php if($article['equip_slash_def'] != '0') { if($article['equip_slash_def'] != '') { ?>Slash Defence: <?php echo $article['equip_slash_def'].'<br />'; }} ?>
	<?php if($article['equip_crush_def'] != '0') { if($article['equip_crush_def'] != '') { ?>Crush Defence: <?php echo $article['equip_crush_def'].'<br />'; }} ?>
	<?php if($article['equip_magic_def'] != '0') { if($article['equip_magic_def'] != '') { ?>Magic Defence: <?php echo $article['equip_magic_def'].'<br />'; }} ?>
	<?php if($article['equip_range_def'] != '0') { if($article['equip_range_def'] != '') { ?>Range Defence: <?php echo $article['equip_range_def'].'<br />'; }} ?></td>
  	<td width="33%" style="border: 1px solid #0f0f0c;padding: 5px;"><b>Other</b><br />
	<?php if($article['equip_stength'] != '0') { if($article['equip_stength'] != '') { ?>Strength: <?php echo $article['equip_stength'].'<br />'; }} ?>
	<?php if($article['equip_range_str'] != '0') { if($article['equip_range_str'] != '') { ?>Range Strength: <?php echo $article['equip_range_str'].'<br />'; }} ?>
	<?php if($article['equip_magic_damage'] != '0') { if($article['equip_magic_damage'] != '') { ?>Magic Damage: <?php echo $article['equip_magic_damage'].'<br />'; }} ?>
	<?php if($article['equip_prayer'] != '0') { if($article['equip_prayer'] != '') { ?>Prayer: <?php echo $article['equip_prayer'].'<br />'; }} ?>
	<?php if($article['equip_summoning'] != '0') { if($article['equip_summoning'] != '') { ?>Summoning: <?php echo $article['equip_summoning'].'<br />'; }} ?>
    <?php if($article['equip_absorb_melee'] != '0') { if($article['equip_absorb_melee'] != '') { ?>Absorb Melee: <?php echo $article['equip_absorb_melee'].'<br />'; }} ?>
	<?php if($article['equip_absorb_damage'] != '0') { if($article['equip_absorb_damage'] != '') { ?>Absorb Damage: <?php echo $article['equip_absorb_damage'].'<br />'; }} ?>
	<?php if($article['equip_absorb_ranged'] != '0') { if($article['equip_absorb_ranged'] != '') { ?>Absorb Ranged: <?php echo $article['equip_absorb_ranged'].'<br />'; }} ?>
<?php } ?></td>
  </tr>
  <tr>
  <td width="100%" colspan="3"  style="border: 1px solid #0f0f0c;padding: 5px;">
      <table width="100%"><tr><td width="33%"><?php if($article['weight'] != '') { ?><b>Weight:</b> <?php echo $article['weight'].'kg<br /><br />'; } ?></td>
	<td colspan="2" width="66%"><?php if($article['equip_attack_speed'] != '0') { ?><center>Attack Speed<br />
	<?php echo '<img src="/images/item_speed/'.$article['equip_attack_speed'].'.png" alt="" />'; ?><br /></center><?php } ?>
    </td></tr></table>
  </td>
  </tr>
</table>
	<br />Equipment Slot: <?php echo $article['equip_slot']; ?></td>
  </tr>
</table>
    </div>
</div>
         
<div class="article_box" style="margin-top: 20px;">
    <div class="article_box_inner">
<center><h2>Information</h2></center>
    <center><?php yes_no($article['stackable']) ?> Stackable | 
    <?php yes_no($article['tradeable']) ?> Tradeable | 
    <?php yes_no($article['equips']) ?> Equipable | 
    <?php yes_no($article['members']) ?> Members<br /><br /></center>
    <?php if($article['examine'] != '') { ?><b>Examine:</b> <?php echo $article['examine'].'<br /><br />'; } ?>
    <?php if($article['obtained'] != '') { ?><b>Obtained:</b> <?php echo $article['obtained'].'<br /><br />'; } ?>
    <?php if($article['uses'] != '') { ?><b>Uses:</b> <?php echo $article['uses'].'<br /><br />'; } ?>
    <!--  <?php if($article['options'] != '') { ?><b>Options</b>: <?php echo $article['options'].'<br /><br />'; } ?>-->
    <?php if($article['quests'] != '') { ?><b>Quests:</b> <?php echo $article['quests'].'<br /><br />'; } ?>
    <?php if($article['shops_sell'] != '') { ?>Shops That Sell: <?php echo $article['shops_sell'].'<br /><br />'; } ?>
    <?php if($article['requirements'] != '') { ?><b>Requirements to Use:</b> <?php echo $article['requirements'].'<br /><br />'; } ?>
    <?php if($article['respawn'] != '') { ?><b>Respawn:</b> <?php echo $article['respawn'].'<br /><br />'; } ?>
    <?php if($article['content'] != '') { ?><b>Notes:</b> <?php echo $article['content'].'<br /><br />'; } ?>
    <?php if($article['high_alchemy'] != '') { ?><b>High Alchemy:</b> <?php echo $article['high_alchemy'].'gp<br />'; } ?>
    <?php if($article['low_alchemy'] != '') { ?><b>Low Alchemy:</b> <?php echo $article['low_alchemy'].'gp<br />'; } ?>
</div></div>  
       
<?php if($no_item !== TRUE) { ?>
<div class="article_box" style="margin-top: 20px;">
    <div class="article_box_inner">
<b>Current Guide Price</b> <?php echo $runescape_price; ?><br /><br />
<b>Grand Exchange History for the Last 30 Days</b><br />
<span class="runescape_graph">
<img src="http://services.runescape.com/m=itemdb_rs/3393h_scaleimg3.gif?id=<?php echo $runescape_id; ?>&scale=0&axis=0" alt="" style="border-top: solid 1px #0f0f0c;border-left: solid 1px #0f0f0c;" /><img src="http://services.runescape.com/m=itemdb_rs/3393h_graphimg3.gif?id=<?php echo $runescape_id; ?>&scale=0" alt="" style="border-top: solid 1px #0f0f0c;border-right: solid 1px #0f0f0c;" /><br />
<img src="http://services.runescape.com/m=itemdb_rs/3393h_scaleimg3.gif?id=<?php echo $runescape_id; ?>&scale=0&axis=2" alt="" style="border-bottom: solid 1px #0f0f0c;border-right: solid 1px #0f0f0c;border-left: solid 1px #0f0f0c;" />
</span>
</div></div>
<?php } ?>
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