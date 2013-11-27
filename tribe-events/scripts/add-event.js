jQuery( "#all-day" ).change(function() {
	var $input = jQuery( this );
  
	if ($input.prop( "checked" )) {
		jQuery("#start-time").fadeOut(100);
		jQuery("#end-time").fadeOut(100);
	} else {
		jQuery("#start-time").fadeIn(100);
		jQuery("#end-time").fadeIn(100);
	}
}).change();

jQuery( "#allow-registration" ).change(function() {
	var $input = jQuery( this );
  
	if ($input.prop( "checked" )) {
		jQuery("#registration-display").fadeIn(100);
	} else {
		jQuery("#registration-display").fadeOut(100);
	}
}).change();

jQuery( "#recurring" ).change(function() {
	var $input = jQuery( this );
  
	if ($input.prop( "checked" )) {
		jQuery("#recurring-display").fadeIn(100);
	} else {
		jQuery("#recurring-display").fadeOut(100);
	}
}).change();

jQuery( "#daily" ).change(function() {
	var $input = jQuery( this );
  
	if ($input.prop( "checked" )) {
		jQuery("#week-display").fadeOut(100);
		jQuery("#weekly").prop('checked',false);
		jQuery("#biweekly").prop('checked',false);
		jQuery("#monthly").prop('checked',false);
	} else {
		jQuery("#week-display").fadeIn(100);
	}
}).change();

jQuery( "#weekly" ).change(function() {
	var $input = jQuery( this );
  
	if ($input.prop( "checked" )) {
		jQuery("#week-display").fadeIn(100);
		jQuery("#daily").prop('checked',false);
		jQuery("#biweekly").prop('checked',false);
		jQuery("#monthly").prop('checked',false);
	}
}).change();

jQuery( "#biweekly" ).change(function() {
	var $input = jQuery( this );
  
	if ($input.prop( "checked" )) {
		jQuery("#week-display").fadeIn(100);
		jQuery("#daily").prop('checked',false);
		jQuery("#weekly").prop('checked',false);
		jQuery("#monthly").prop('checked',false);
	}
}).change();

jQuery( "#monthly" ).change(function() {
	var $input = jQuery( this );
  
	if ($input.prop( "checked" )) {
		jQuery("#week-display").fadeIn(100);
		jQuery("#daily").prop('checked',false);
		jQuery("#weekly").prop('checked',false);
		jQuery("#biweekly").prop('checked',false);
	}
}).change();