<div id="sidebar">
	<div class="item-sidebar">
		<h3 class="sidebar-title">
			<span>RuneScape Tips</span>
		</h3>
		<div id="tips">
			<!-- use ajax to pass the result, then use jquery to load the results. the main difference between this rs tips module and others is that it loads a new one from thd db once the visitor casts a vote. -->
			<p>
				You don't even need to start the <a href="#" title="Temple of Ikov">Temple
					of Ikov</a> quest to get the <a href="#"
					title="Item: Boots of Lightness">Boots of Lightness</a>.
			</p>
			<form>
				<input type="submit" name="unknown" value="I didn't know that!"
					class="right" /> <input type="submit" name="known"
					value="I knew that!" />
			</form>
		</div>

	</div>
	<div class="item-sidebar">
		<h3 class="sidebar-title">
			<span>Most Recent Threads</span>
		</h3>
		<ol>
			
		<?php
		$query = $system->fetchLatestthread();
		while ($result = $query->fetch_assoc()) {
			echo '<li>"<a href="forums/topic/'.$result['tid'].'-'.$result['title_seo'].'/">'.ucwords($result['title']).'</a>" by <a href="forums/user/'.$result['starter_id'].'-'.$result['seo_first_name'].'/">'.$result['last_poster_name'].'</a></li>';
		}
		?>
		</ol>
	</div>
	<!-- <div class="item-sidebar">
					<h3 class="sidebar-title"><span>RuneScape News</span></h3>
					<ul>
					</ul>
				</div>-->
	<div id="advertisment-sidebar"></div>
	<div class="item-sidebar">
		<h3 class="sidebar-title">
			<span>Community Poll</span>
		</h3>
		<div id="poll">

			<p>Do you think Jagex should bring back free trade and the
				wilderness?</p>
			<form>
				<ol>
					<li><input type="radio" id="option-1" name="options" value="Yes" />
						<label for="option-1">Yes</label></li>
					<li><input type="radio" id="option-2" name="options" value="No" />
						<label for="option-2">No</label></li>
				</ol>
				<input type="submit" id="submit" name="submit" value="View Results" />
			</form>
		</div>
	</div>
	<div class="item-sidebar">
		<h3 class="sidebar-title">
			<span>This Page</span>
		</h3>
		<div class="center left">
			<iframe
				src="//www.facebook.com/plugins/like.php?app_id=119553784793675&amp;href&amp;send=false&amp;layout=box_count&amp;width=450&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=65"
				scrolling="no" frameborder="0"
				style="border: none; overflow: hidden; width: 50px; height: 65px; margin: 0px 0px 0px 5px;"
				allowTransparency="true"></iframe>
		</div>
		<div id="stats">
			<h5>
			<?php echo $system->getPageViews($page); ?></h5>
			<p>
				Unique views<br />for this page
			</p>
		</div>
		<div id="social">
			<a
				href="http://twitter.com/home?status=http://127.0.0.1/Projects/In-Progress/MyRuneLog/site.php"
				title="Twitter"><img src="assets/img/icons/twitter-24x24.png"
				alt="Twitter Icon" /> </a> <a
				href="http://digg.com/submit?phase=2&amp;url=http://127.0.0.1/Projects/In-Progress/MyRuneLog/site.php"
				title="Digg"><img src="assets/img/icons/digg-24x24.png"
				alt="Digg Icon" /> </a> <a
				href="http://reddit.com/submit?url=http://127.0.0.1/Projects/In-Progress/MyRuneLog/site.php"
				title="Reddit"><img src="assets/img/icons/reddit-24x24.png"
				alt="Reddit Icon" /> </a> <a href="http://www.delicious.com/save"
				onclick="window.open('http://www.delicious.com/save?v=5&noui&jump=close&url='+encodeURIComponent(location.href)+'&title='+encodeURIComponent(document.title), 'delicious','toolbar=no,width=550,height=550'); return false;"
				title="Delicious"><img src="assets/img/icons/delicious-24x24.png"
				alt="Delicious Icon" /> </a>
		</div>
		<div class="clear"></div>
	</div>
</div>
