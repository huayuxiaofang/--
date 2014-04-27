$(document).ready(function(){   
  
    $("ul.sub-menu").parent().append("<span></span>"); //Only shows drop down trigger when js is enabled (Adds empty span tag after ul.sub-menu*)   
  
    $("ul.menu li a").mouseenter(function() { //When trigger is clicked...   
  
        //Following events are applied to the sub-menu itself (moving sub-menu up and down)   
        $(this).parent().find("ul.sub-menu").slideDown('fast').show(); //Drop down the sub-menu on click   
  
        $(this).parent().hover(function() {   
        }, function(){   
            $(this).parent().find("ul.sub-menu").slideUp('slow'); //When the mouse hovers out of the sub-menu, move it back up   
        });   
  
        //Following events are applied to the trigger (Hover events for the trigger)   
        }).hover(function() {   
            $(this).addClass("subhover"); //On hover over, add class "subhover"   
        }, function(){  //On Hover Out   
            $(this).removeClass("subhover"); //On hover out, remove class "subhover"   
    });   
  
});  


$(document).ready(function(){
  $("#imgPlay").mouseenter(function(){
  $("div.next").fadeIn(300);
  });
  $("#imgPlay").mouseleave(function(){
  $("div.next").fadeOut(300);
  });
    $("#imgPlay").mouseenter(function(){
  $("div.prev").fadeIn(300);
  });
  $("#imgPlay").mouseleave(function(){
  $("div.prev").fadeOut(300);
  });
});

//<![CDATA[
$(document).ready(function () {
//Append a div with hover class to all the LI
$('#navigation li').append('<div class="hover"><\/div>');
$('#navigation li').hover(
//Mouseover, fadeIn the hidden hover class
function() {
$(this).children('div').stop(true, true).fadeIn('1000');
},
//Mouseout, fadeOut the hover class
function() {
$(this).children('div').stop(true, true).fadeOut('1000');
}).click (function () {
//Add selected class if user clicked on it
$(this).addClass('selected');
});
});
//]]> 
         
// 收缩展开效果
$(document).ready(function(){

	$(".bo1 h1").click(function(){
		$(".te1").slideToggle("fast");
		$(".te2").slideUp("fast");
		$(".te3").slideUp("fast");
		
	});
	
	$(".bo2 h1").click(function(){
	
		$(".te2").slideToggle("fast");
		$(".te1").slideUp("fast");
		$(".te3").slideUp("fast");
	
		
	});
	
	$(".bo3 h1").click(function(){
	
		$(".te3").slideToggle("fast");
		$(".te2").slideUp("fast");
	    $(".te1").slideUp("fast");
		
	});

	
});
