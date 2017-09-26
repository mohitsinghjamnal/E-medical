

/*	Smooth scroll for anchor links    
----------------------------------------*/
	$(document).ready(function() {
		$("#totoplink").find("a").attr("href", document.URL + '#top');
	  function filterPath(string) {
	  return string
		.replace(/^\//,'')
		.replace(/(index|default).[a-zA-Z]{3,4}$/,'')
		.replace(/\/$/,'');
	  }
	  var locationPath = filterPath(location.pathname);
	  var scrollElem = scrollableElement('html', 'body');
	
	  $('a[href*=#]').each(function() {
		var thisPath = filterPath(this.pathname) || locationPath;
		if (  locationPath == thisPath
		&& (location.hostname == this.hostname || !this.hostname)
		&& this.hash.replace(/#/,'') ) {
		  var $target = $(this.hash);//\, target = this.hash;
		  if ($target && $target.offset() != null) {
			var targetOffset = $target.offset().top;
			$(this).click(function(event) {
			  event.preventDefault();
			  $(scrollElem).animate({scrollTop: targetOffset}, 1600, function() {
				location.hash = target;
			  });
			});
		  }
		}
	  });
	
	  function scrollableElement(els) {
		for (var i = 0, argLength = arguments.length; i <argLength; i++) {
		  var el = arguments[i],
			  $scrollElement = $(el);
		  if ($scrollElement.scrollTop()> 0) {
			return el;
		  } else {
			$scrollElement.scrollTop(1);
			var isScrollable = $scrollElement.scrollTop()> 0;
			$scrollElement.scrollTop(0);
			if (isScrollable) {
			  return el;
			}
		  }
		}
		return [];
	  }
	});
	
	
	$(function () {
		var scroll_timer;
		var displayed = false;
		var $totoplink = $('#totoplink a');
		var $window = $(window);
		var top = $(document.body).children(0).position().top;
	
		/* react to scroll event on window */
		$window.scroll(function () {
			window.clearTimeout(scroll_timer);
			scroll_timer = window.setTimeout(function () {
				if($window.scrollTop() <= top)
				{
					displayed = false;
					$totoplink.fadeOut(500);
				}
				else if(displayed == false)
				{
					displayed = true;
					$totoplink.stop(true, true).fadeIn(300).click(function () { $totoplink.fadeOut(300); });
				}
			}, 100);
		});
	});