				<h1 class="heading" id="comments-heading">
					<div class="right">
                    <?php if($or_comments_count != 0){ ?>
						<form>
							<select onchange="comment_order(this.value, '<?php echo $article['article_category']; ?>', '<?php echo $view_id; ?>');">
								<option value="comment_paging" selected="selected">Most Recent</option>
								<option value="comment_paging_rating">Most Popular</option>
							</select>
						</form>
                      <?php } ?>
					</div>
					Comments
				</h1>
				<div id="comments">
<div id="comments_container">
<div id="comment_container">
<?php if($or_comments_count == 0){
	echo "<p><i>There are currently no comments posted on this page!</i></p><br />";
} else { ?>
First | Previous | 1 - <?php echo $page_num_max; ?> of <?php echo $or_comments_count; ?> | 
<?php if ($max == TRUE){ ?>Next | <?php } else { ?>
<a href="#comments" onclick="comment_paging('2', '<?php echo $article['article_category']; ?>', '<?php echo $view_id; ?>')">Next</a> | 
<?php } ?>
<?php if ($max == TRUE){ ?>Last<?php } else { ?>
<a href="#comments" onclick="comment_paging('<?php echo $comments_count; ?>', '<?php echo $article['article_category']; ?>', '<?php echo $view_id; ?>')">Last</a>
<?php } ?>
<br /><br />
					<ul>
                    <?php while($comment = mysql_fetch_array( $comments )) { ?>
						<li>
                        <?php if($comment['avatar_type'] == "") { ?>
							<img src="/forums/public/style_images/master/profile/default_thumb.png" alt="User Avatar" title="Avatar" class="left commenter-avatar" />
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
<?php } ?>
</div>
</div>
                    
<!-- Comment form -->
<?php if($settings['members_comment'] == '1'){ ?>
<a name="message"></a>
<?php if ($error == TRUE){ ?>
<fieldset class="form_box">
	<legend><h1><font size="5">Error</font></h1></legend>
<?php if($failed_user_comment == TRUE) { echo '<p align="center">'.$error_user_comment.'</p>'; } ?>
<?php if($failed_guest == TRUE) { echo '<p align="center">'.$error_guest.'</p>'; } ?>
<?php if($failed_permission == TRUE) { echo '<p align="center">'.$error_permission.'</p>'; } ?>
<?php if($failed_captcha == TRUE) { echo '<p align="center">'.$error_captcha.'</p>'; } ?>
<?php if($flag_message == TRUE) { echo '<p align="center">'.$message.'</p>'; } ?>
</fieldset>
<?php } ?>

<form method='post' action='<?php echo $article_title_seo.'-'.$view_id.'.html#message'; ?>' class='editor'>
<fieldset class="form_box">
	<legend><h1><font size="5">Post a Comment</font></h1></legend>
		<p><textarea id="user_comment" name="user_comment" rows="7" cols="30"><?php echo $content; ?></textarea></p>
			<script type="text/javascript">
			CKEDITOR.replace( 'user_comment',
				{
					extraPlugins : 'bbcode',
					removePlugins : 'bidi,button,dialogadvtab,div,filebrowser,flash,format,forms,horizontalrule,iframe,indent,justify,liststyle,pagebreak,showborders,stylescombo,table,tabletools,templates',
					height: "100",
					disableObjectResizing: true,
					toolbar:
					[
						['Source', '-', 'Undo','Redo'],
						['Bold', 'Italic', 'Underline'],
						['Blockquote', '-', 'Smiley'],
						['Link', 'Unlink' ],
					],
					smiley_images:
					[
						'regular_smile.gif','sad_smile.gif','wink_smile.gif','teeth_smile.gif','tounge_smile.gif',
						'embaressed_smile.gif','omg_smile.gif','whatchutalkingabout_smile.gif','angel_smile.gif','shades_smile.gif',
						'cry_smile.gif','kiss.gif'
					],
					smiley_descriptions:
					[
						'smiley', 'sad', 'wink', 'laugh', 'cheeky', 'blush', 'surprise',
						'indecision', 'angel', 'cool', 'crying', 'kiss'
					]
			} );
			</script>
		<input type='hidden' name='submit_form' /><br />
        <?php if($is_guest == true && $settings['guests_captcha_code'] == '1'){ ?>
        <?php echo recaptcha_get_html($publickey, $failed_message); ?>
        <?php } elseif($is_guest != true && $settings['members_captcha_code'] == '1'){ ?>
        <?php echo recaptcha_get_html($publickey, $failed_message); ?>
        <?php } ?>
        <p align="center"><input type="submit" value="Add Comment!" /></p>
</fieldset>
</form>
<?php } ?>
				</div>