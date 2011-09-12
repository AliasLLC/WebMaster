// jQuery
$(document).ready(function(){
	// Uniform
	$("input:checkbox, input:radio, input:file").uniform();
	
	// Donate Button
	$('#donate .left').addClass('hide');
	$('#donate a').hover(function () {
		$('#donate .left').show({ direction: 'right' }).addClass('display');
	})
	
	// Content Lists
	$('#list-skills').addClass('active-panel');
	$('#view-skills').click(function() {
		$('.active-panel').slideUp('slow').removeClass('active-panel');
		$('#list-skills').slideDown('slow').addClass('active-panel');
		$('.jump-to .active').removeClass('active');
		$('#view-skills').addClass('active');
	});
	$('#view-quests').click(function() {
		$('.active-panel').slideUp('slow').removeClass('active-panel');
		$('#list-quests').slideDown('slow').addClass('active-panel');
		$('.jump-to .active').removeClass('active');
		$('#view-quests').addClass('active');
	});
	$('#view-gameplay').click(function() {
		$('.active-panel').slideUp('slow').removeClass('active-panel');
		$('#list-gameplay').slideDown('slow').addClass('active-panel');
		$('.jump-to .active').removeClass('active');
		$('#view-gameplay').addClass('active');
	});
	$('#view-cities').click(function() {
		$('.active-panel').slideUp('slow').removeClass('active-panel');
		$('#list-cities').slideDown('slow').addClass('active-panel');
		$('.jump-to .active').removeClass('active');
		$('#view-cities').addClass('active');
	});
	
	// Close button
	$('.close').click(function() {
		$(this).parent().slideUp();
	});
	
	// Togles
	$(".jump-to-toggle").click(function () {
		$(".jump-to").slideToggle();
	});
	
	// Media Page
	$('#media li').click(function() {
		$('#media li .hide').slideUp('fast').removeClass('current');
		$(this).children('.hide').slideDown('fast').addClass('current');
	});
});

// Smooth Scroll
$(function(){
	$("a[href*=#]").click(function() {
		if(location.pathname.replace(/^\//,"") == this.pathname.replace(/^\//,"") && location.hostname == this.hostname) {
			var $target = $(this.hash);
			$target = $target.length && $target || $("[name=" + this.hash.slice(1) +"]");
			if ($target.length) {
				var targetOffset = $target.offset().top;
				$("html,body").animate({scrollTop: targetOffset}, 1000);
				return false;
			}
		}
	});
});