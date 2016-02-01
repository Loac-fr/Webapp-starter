// ********** init **********

console.log('hello !');
var wWidth = $(window).width(),
		mobile = 768 ;

// ********** events **********



// ********** functions **********



// ********** jQuery **********

$(document).ready(function(){

	console.log('jQuery doc ready');

	// ********** Mobile Navs interaction **********

	// var caching
	var $header				= $('.main-header'),
			$toggle 			= $header.find('.mobile-nav-toggle').add('.mobile-nav-toggle--close'),
			$mainNav			= $header.find('.main-nav'),
			$sideNav			= $('#content').find('.sidenav-wrapper');

	// events

	$toggle.on('click', function(e){

		$toggle.toggleClass('on');
		$mainNav.toggleClass('is-open');
		$('body').toggleClass('no-scroll nav-open');

		if($sideNav.length > 0){
			$sideNav.toggleClass('is-open') ;
		} 
		
	});

});

// ********** utilities **********

// *** Debounce function by David Walsh ***

// @link http://davidwalsh.name/javascript-debounce-function
// Returns a function, that, as long as it continues to be invoked, will not
// be triggered. The function will be called after it stops being called for
// N milliseconds. If `immediate` is passed, trigger the function on the
// leading edge, instead of the trailing.
function debounce(func, wait, immediate) {
	var timeout;
	return function() {
		var context = this, args = arguments;
		var later = function() {
			timeout = null;
			if (!immediate) func.apply(context, args);
		};
		var callNow = immediate && !timeout;
		clearTimeout(timeout);
		timeout = setTimeout(later, wait);
		if (callNow) func.apply(context, args);
	};
};

var myResize = debounce(function() {
	// All the taxing stuff you do
}, 250);

window.addEventListener('resize', myResize);
// *** End Debounce function ***
