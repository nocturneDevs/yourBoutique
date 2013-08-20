$(document).ready(function(){
  var fullSize = $(".magnify").attr("href");
  var imgList = $("#featured-image").children();
  var mainImage = imgList[0];
  var imgHeight = mainImage.width;
  var imgWidth = mainImage.height;

  // Since this was on mainImage.onload, it never gets called!
  // mainImage.onload = function(){
  //   imgWidth = mainImage.width;
  //   imgHeight = mainImage.height;
  // };

  var divRadius = $(".loupe").height()/2;
  $(".magnify").mouseenter(function(){
    $(".loupe").fadeIn("fast");
  });

  $(".magnify").mouseleave(function(){
    $(".loupe").fadeOut("fast");
  });
  $(".magnify").mousemove(function(e){
    var xVal = e.pageX;
    var yVal = e.pageY;
    var imgOffset = $("#featured-image").offset();
    var percentWidth = 100*(xVal-imgOffset.left)/imgWidth;
    var percentHeight = 100*(yVal-imgOffset.top)/imgHeight;
    $(".loupe").css("top",yVal-divRadius);
    $(".loupe").css("left",xVal-divRadius);
    $(".loupe").css("background-image","url("+fullSize+")");
    $(".loupe").css("background-position-x",percentWidth+"%");
    $(".loupe").css("background-position-y",percentHeight+"%");
    console.log((xVal-imgOffset.left)+" "+(yVal-imgOffset.top));
  });
});

// /**
//  * loupe - an image magnifier for jQuery
//  * (C) 2010 jdbartlett, MIT license
//  * http://github.com/jdbartlett/loupe
//  */
// (function ($) {
// 	$.fn.loupe = function (arg) {
// 		console.log("Made it");
// 		var options = $.extend({
// 			loupe: 'loupe',
// 			width: 200,
// 			height: 150
// 		}, arg || {});

// 		return this.length ? this.each(function () {
// 			var $this = $(this), $big, $loupe,
// 				$small = $this.is('img') ? $this : $this.find('img:first'),
// 				move, hide = function () { $loupe.hide(); },
// 				time;

// 			if ($this.data('loupe') != null) {
// 				$('div').remove('.loupe-js');
// 				$this.data('loupe',false);
// 			}

// 			move = function (e) {
// 				var os = $small.offset(),
// 					sW = $small.outerWidth(),
// 					sH = $small.outerHeight(),
// 					oW = options.width / 2,
// 					oH = options.height / 2;

// 				if (!$this.data('loupe') ||
// 					e.pageX > sW + os.left + 10 || e.pageX < os.left - 10 ||
// 					e.pageY > sH + os.top + 10 || e.pageY < os.top - 10) {
// 					return hide();
// 				}

// 				time = time ? clearTimeout(time) : 0;

// 				$loupe.show().css({
// 					left: e.pageX - oW,
// 					top: e.pageY - oH
// 				});
// 				$big.css({
// 					left: -(((e.pageX - os.left) / sW) * $big.width() - oW)|0,
// 					top: -(((e.pageY - os.top) / sH) * $big.height() - oH)|0
// 				});
// 			};

// 			$loupe = $('<div />')
// 				.addClass(options.loupe)
// 				.css({
// 					width: options.width,
// 					height: options.height,
// 					position: 'absolute',
// 					overflow: 'hidden'
// 				})
// 				.append($big = $('<img />').attr('src', $this.attr($this.is('img') ? 'src' : 'href')).css('position', 'absolute'))
// 				.mousemove(move)
// 				.hide()
// 				.appendTo('body');

// 			$this.data('loupe', true)
// 				.mouseenter(move)
// 				.mouseout(function () {
// 					time = setTimeout(hide, 10);
// 				});
// 		}) : this;
// 	};
// }(jQuery));