<?php

// Include the mysql information
include ('../modules/functions.php');

// Grab the Javascript input
$page_num2	= $_GET['page_num'];
$category	= $_GET['category'];
$article_id	= $_GET['article_id'];

// Calculate the page number
$page_num = ($page_num2 * 5) - 5;

// Grab the comments for that page
$comments = mysql_query("SELECT ko_comments.*, ipb_profile_portal.*, ipb_members.* FROM ko_comments, ipb_profile_portal, ipb_members WHERE ko_comments.article_id = '$article_id' AND ko_comments.status = 'published' AND ipb_profile_portal.pp_member_id = ko_comments.user_id AND ipb_members.member_id = ko_comments.user_id AND ko_comments.article_category = '$category' ORDER BY ko_comments.id DESC LIMIT $page_num, ".$settings['max_page_comments']."");

// Count comments
$comments_c = mysql_query("SELECT ko_comments.*, ipb_profile_portal.*, ipb_members.* FROM ko_comments, ipb_profile_portal, ipb_members WHERE ko_comments.article_id = '$article_id' AND ko_comments.status = 'published' AND ipb_profile_portal.pp_member_id = ko_comments.user_id AND ipb_members.member_id = ko_comments.user_id AND ko_comments.article_category = '$category' ORDER BY ko_comments.id DESC");
$or_comments_count = mysql_num_rows($comments_c);
$comments_count = round(($or_comments_count / $settings['max_page_comments']) + 0.4);

$page_num_max = $page_num + $settings['max_page_comments'];
if ($page_num_max > $or_comments_count){
	$page_num_max = $or_comments_count;
	$max = true;
}
?>
<?php if ($page_num == '0'){ ?>
First |
<?php } else { ?>
<a href="#comments"
	onclick="comment_paging('1', '<?php echo $category; ?>', '<?php echo $article_id; ?>')">First</a>
|
<?php } ?>

<?php if ($page_num == '0'){ ?>
Previous |
<?php } else { ?>
<a href="#comments"
	onclick="comment_paging('<?php echo $page_num2-1; ?>', '<?php echo $category; ?>', '<?php echo $article_id; ?>')">Previous</a>
|
<?php } ?>

<?php echo $page_num+1; ?>
-
<?php echo $page_num_max; ?>
of
<?php echo $or_comments_count; ?>
|

<?php if ($max == TRUE){ ?>
Next |
<?php } else { ?>
<a href="#comments"
	onclick="comment_paging('<?php echo $page_num2+1; ?>', '<?php echo $category; ?>', '<?php echo $article_id; ?>')">Next</a>
|
<?php } ?>

<?php if ($max == TRUE){ ?>
Last
<?php } else { ?>
<a href="#comments"
	onclick="comment_paging('<?php echo $comments_count; ?>', '<?php echo $category; ?>', '<?php echo $article_id; ?>')">Last</a>
	<?php } ?>
<br />
<br />
<ul>


<?php while($comment = mysql_fetch_array( $comments )) { ?>
	<li>
	<?php if($comment['avatar_type'] == "") { ?> <img
		src="/forums/public/style_images/master/profile/default_thumb.png"
		alt="User Avatar" title="Avatar" class="left commenter-avatar" />
	
	
	
	
                        <?php } elseif($comment['avatar_type'] == "upload")  { ?>
							<img src="/forums/uploads/<?php echo $comment['avatar_location']; ?>" alt="User Avatar" title="Avatar" class="left commenter-avatar" height="50px" width="50px" />
                        <?php } else { ?>
							<img src="<?php echo $comment['avatar_location']; ?>" alt="User Avatar" title="Avatar" class="left commenter-avatar" height="50px" width="50px" />
                        <?php } ?>
							<h6 class="commenter-name"><span class="right commenter-date"><?php echo date("M jS, Y",$comment['timestamp']); ?></span><a href="/forums/index.php?/user/<?php echo $comment['user_id']; ?>-<?php echo $comment['members_display_name']; ?>"><?php echo $comment['members_display_name']; ?></a></h6>
							<p><?php echo $comment['content']; ?></p>
							<div class="commenter-options">
								<ul class="right">
                                
                                
<div id="display_likes_<?php echo $comment['id']; ?>" style="display:block;">
									<li><a title="Like Comment" class="commenter-upvote" onclick="update_likes('<?php echo $comment['id']; ?>', 'likes', <?php echo $comment['likes']; ?>, <?php echo $comment['dislikes']; ?>, '<?php echo $article['article_category']; ?>', '<?php echo $article['article_id']; ?>', '<?php echo $comment['id']; ?>');">Like (<?php echo $comment['likes']; ?>)</a></li>
									<li><a title="Dislike Comment" class="commenter-downvote" onclick="update_likes('<?php echo $comment['id']; ?>', 'dislikes', <?php echo $comment['likes']; ?>, <?php echo $comment['dislikes']; ?>, '<?php echo $article['article_category']; ?>', '<?php echo $article['article_id']; ?>', '<?php echo $comment['id']; ?>');">Dislike(<?php echo $comment['dislikes']; ?>)</a></li>
</div>
<div id="thank_you_<?php echo $comment['id']; ?>" style="display:none;">
									<li>Please turn Javascript on.</li>
</div>

								</ul>
                                <ul>
									<li>
								<?php if($comment['flagged'] != '-1') {?>
                                    <form method='post' action='<?php echo $article_title_seo.'-'.$view_id.'.html#message'; ?>'>
                                    <input type="hidden" name="flag_comment" value="<?php echo $comment['id']; ?>" />
                                    <a title="Report Comment" class="commenter-report" href="#" onclick="parentNode.submit()">Report</a>
                                    </form>
                                <?php } else { echo '&nbsp'; } ?>   
                                    </li>
								</ul>                          
							</div>
						</li>
	
	
	
	
                    <?php } ?>
					</ul>
