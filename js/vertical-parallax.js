/*
JavaScript for the demo: jQuery Vertical Parallax Background
Demo: jQuery Vertical Parallax Background
Author: Ian Lunn
Author URL: http://www.ianlunn.co.uk/
Demo URL: http://www.ianlunn.co.uk/demos/jquery-vertical-parallax-background/
Tutorial URL: http://www.ianlunn.co.uk/blog/code-tutorials/jquery-vertical-parallax-background/

License: http://creativecommons.org/licenses/by-sa/3.0/ (Attribution Share Alike). Please attribute work to Ian Lunn simply by leaving these comments in the source code or if you'd prefer, place a link on your website to http://www.ianlunn.co.uk/.

Dual licensed under the MIT and GPL licenses:
http://www.opensource.org/licenses/mit-license.php
http://www.gnu.org/licenses/gpl.html
*/

$(document).ready(function() { //when the document is ready
				
		windowHeight = $(window).height(); //get the height of the window
		move_var = 30; //create a variable that contains the starting position for bg-move_var.png

		//change the css of the <html> element to give it multiple backgrounds using CSS3. This contains the variables we just worked out for each individual background
		$('#hero').css({"background-position" : "50% " + move_var + "px"});
		
		
		function Move(){ //set up a function to be called whenever the window is scrolled or resized
			windowHeight = $(window).height(); //get the height of the window
			pos = $(window).scrollTop(); //get the position of the scrollbar
			move_var = 30  - pos * 0.4; //create a variable that contains the starting position for bg-move_var.png

			//change the css of the <html> element to give it multiple backgrounds using CSS3. The variables contained will change for every pixel the window is resized or scrolled
			$('#hero').css({"background-position" : "50% " + move_var + "px"});
		}
		
	$(window).resize(function(){ //when the window is resized...
		Move(); //call the Move() function
	});		
	
	$(window).bind('scroll', function(){ //when the user is scrolling...
		Move(); //call the Move() function
	});
	
});