// Autosize textarea

$(function() {
	
	"use strict";
	
	autosize($('textarea'));
	
});

// Trigger Popover

$(function() {
	
	"use strict";
	
	$('.popover_trigger').click(function(){
		$(this).find('.popover').toggleClass('active');
	});
	
});

// Close Notification

$(function() {
	
	"use strict";
	
	$('.close-notification').click(function(){
		$(this).parent().fadeOut();
	});

});

// Open Dropdown

$(function() {
	
	"use strict";
	
	$('.open-dropdown').click(function(){
		event.stopPropagation();
		$(this).next('div').toggleClass('active');
	});
	
	$(document).click( function(){
		$('.menu-dropdown').removeClass('active');
	});
	
});

// Trigger bottom border for inputs

$(function(){
	
	"use strict";
	
	// Text Input
	
	$('input').focus(function(){
		$(this).prev('.border').addClass('active');
		$(this).next('.label').addClass('active');
	});
	
	$('input').blur(function(){
		if($(this).val()===''){
			$(this).next('.label').removeClass('active');
		}
		$(this).prev('.border').removeClass('active');
	});
	
	// Textareas
	
	$('textarea').focus(function(){
		$(this).addClass('active');
		$(this).prev('.border').addClass('active');
		$(this).next('.label').addClass('active');
	});
	
	$('textarea').blur(function(){
		if($(this).val()===''){
			$(this).removeClass('active');
			$(this).next('.label').removeClass('active');
		}
		$(this).prev('.border').removeClass('active');
	});
	
});

// Nav boxes

$(function(){
	"use strict";
	$('.nav_box').click(function(){
		$(this).siblings().removeClass('active');
		$(this).addClass('active');
	});
});

// Tabs

$(function(){
	"use strict";
	$('#tabs-1,#tabs-2').tabs();
});

// Progress bar

$(function(){
	"use strict";
	$('#progress_bar_1').progressbar({
		value: 37
	});
	$('#progress_bar_2').progressbar({
		value: 28
	});
	$('#progress_bar_3').progressbar({
		value: 79
	});
	$('#progress_bar_4').progressbar({
		value: 56
	});
});

// Slider

$(function(){
	"use strict";
	$("#slider_1,#slider_2").slider({
		value: 20,
		range: "min"
	});
});

// Slider range

$(function(){
	"use strict";
	$("#slider_range_1,#slider_range_2").slider({
		range: true,
		min: 0,
		max: 500,
		values: [ 75, 300 ],
		slide: function(event, ui){
			$("#amount").val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
		}
	});
	$("#amount").val( "$" + $( "#slider_range" ).slider( "values", 0 ) + " - $" + $( "#slider_range" ).slider( "values", 1 ) );
});

// Checkbox & Radio

$(function(){
	"use strict";
	$(".checkradio").checkboxradio();
});

// Datepicker

$(function(){
	"use strict";
	$("#datepicker").datepicker();
});

// Carousel (Slick)

$('.carousel').slick({
	dots: true,
	infinite: true
});

// Modal

$(function(){
	"use strict";
	$("#modal_trigger").on( "click", function() {
		$("#modal_background").addClass('active');
		$("#modal").addClass('active');
	});
	$("#modal_background,.close_modal").on( "click", function() {
		$("#modal_background").removeClass('active');
		$("#modal").removeClass('active');
	});
});

// Collapse sidebar

$(function(){
	"use strict";
	$(".collapse_sidebar").on( "click", function() {
		var this_id = $(this).data('id');
		console.log(this_id);
		$(this).find("svg").toggleClass('fa-caret-right').toggleClass('fa-caret-left');
		$("#"+this_id).toggleClass('open').toggleClass('closed');
	});
});
