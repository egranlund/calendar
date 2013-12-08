<?php
/**
 * The add event file
 *
 * @package WordPress
 * @subpackage Calendar
 */

global $current_user;
get_currentuserinfo();

?>

<script>
jQuery(function() { jQuery( "#start-date" ).datepicker({ dateFormat: 'mm-dd-yy' }); });
jQuery(function() { jQuery( "#end-date" ).datepicker({ dateFormat: 'mm-dd-yy' }); });
</script>

<form>
	
    <!-- author -->
    <input type="hidden" name="author" value="<?php $current_user->user_login ?>" />	
	
    <hr size=1 style="margin: 12px 0px 12px 0px; background-color:#ededed">
    
    <!-- title -->
	<input type="text" name="title" title="Title" placeholder="Enter Title Here" />
    
    <hr size=1 style="margin: 12px 0px 12px 0px; background-color:#ededed">
    
    <!-- date and time -->
    <div id="date-time-container" style="display:inline;">
    
    	<div id="date-time-left" style="float:left; width:50%; display:inline;">
	
        	<input type="checkbox" name="all-day" id="all-day" title="All Day Event" />
		    <label><?php _e( 'All Day Event', 'tribe-events-calendar' ); ?></label>
	    
		    <br />
	    	<br />

		    <input type="text" id="start-date" name="start-date" title="Start Date" placeholder="Enter Start Date" />
		    <div id="start-time" style="display:inline">
				<select name="start-hour" title="Start Hour">
					<option value="01">01</option><option value="02">02</option>
					<option value="03">03</option><option value="04">04</option>
					<option value="05">05</option><option value="06">06</option>
					<option value="07">07</option><option value="08">08</option>
					<option value="09">09</option><option value="10">10</option>
					<option value="11">11</option><option value="12">12</option>
			    </select>
			    <select name="start-min" title="Start Minute">
					<option value="00">00</option><option value="05">05</option>
			        <option value="10">10</option><option value="15">15</option>
			        <option value="20">20</option><option value="25">25</option>
			        <option value="30">30</option><option value="35">35</option>
			        <option value="40">40</option><option value="45">45</option>
			        <option value="50">50</option><option value="55">55</option>
			    </select>
			    <select name="start-period" title="Start Time Period">
					<option value="AM">AM</option><option value="PM">PM</option>
			    </select>
		    </div>
		    
		    <br />
		    
			<input type="text" id="end-date" name="end-date" title="End Date" placeholder="Enter End Date"/>
		    <div id="end-time" style="display:inline">
			    <select name="end-hour" title="End Hour">
					<option value="01">01</option><option value="02">02</option>
					<option value="03">03</option><option value="04">04</option>
					<option value="05">05</option><option value="06">06</option>
					<option value="07">07</option><option value="08">08</option>
					<option value="09">09</option><option value="10">10</option>
					<option value="11">11</option><option value="12">12</option>
			    </select>
			    <select name="end-min" title="End Minute">
					<option value="00">00</option><option value="05">05</option>
			        <option value="10">10</option><option value="15">15</option>
			        <option value="20">20</option><option value="25">25</option>
			        <option value="30">30</option><option value="35">35</option>
			        <option value="40">40</option><option value="45">45</option>
			        <option value="50">50</option><option value="55">55</option>
				</select>
			    <select name="end-period" title="End Time Period">
					<option value="AM">AM</option><option value="PM">PM</option>
			    </select>
		    </div>
		    
		    <br />
            
		</div>
	    
        <div id="date-time-right" style="float:left; width:50%; display:inline;">
        
		    <input type="checkbox" name="recurring" id="recurring" title="Recurring Event" />
		    <label><?php _e( 'Recurring Event', 'tribe-events-calendar' ); ?></label>
		    
		    <br />
		    <br />
		    
		    <div id="recurring-display" style="display:none">
		    
		    	<input type="checkbox" id="daily" name="daily" title="Daily" />
		    	<label><?php _e( 'Daily', 'tribe-events-calendar' ); ?></label>
		        
		        <input type="checkbox" id="weekly" name="weekly" title="Weekly" />
		    	<label><?php _e( 'Weekly', 'tribe-events-calendar' ); ?></label>
		        
		        <input type="checkbox" id="biweekly" name="biweekly" title="Biweekly" />
		    	<label><?php _e( 'Biweekly', 'tribe-events-calendar' ); ?></label>
		        
		        <input type="checkbox" id="monthly" name="monthly" title="Monthly" />
		    	<label><?php _e( 'Monthly', 'tribe-events-calendar' ); ?></label>
                
                <br />
		        
		        <div id="week-display" style="display:inline">
		        
		        	<br />
		            
					<input type="checkbox" name="mon" title="Monday" />
					<label><?php _e( 'Mon', 'tribe-events-calendar' ); ?></label>
					
					<input type="checkbox" name="tue" title="Tuesday" />
					<label><?php _e( 'Tue', 'tribe-events-calendar' ); ?></label>
		            
					<input type="checkbox" name="wed" title="Wednesday" />
					<label><?php _e( 'Wed', 'tribe-events-calendar' ); ?></label>
		            
					<input type="checkbox" name="thu" title="Thursday" />
					<label><?php _e( 'Thu', 'tribe-events-calendar' ); ?></label>
		            
					<input type="checkbox" name="fri" title="Friday" />
					<label><?php _e( 'Fri', 'tribe-events-calendar' ); ?></label>
		            
					<input type="checkbox" name="sat" title="Saturday" />
					<label><?php _e( 'Sat', 'tribe-events-calendar' ); ?></label>
		            
					<input type="checkbox" name="sun" title="Sunday" />
					<label><?php _e( 'Sun', 'tribe-events-calendar' ); ?></label>
		        
		        </div>
		    
		    </div>
            
        </div>
        
    </div>
    
    <div style="clear:both;height:1px;overflow:none;"></div>
	    
    <hr size=1 style="margin: 12px 0px 12px 0px; background-color:#ededed">
    
    <!-- registration -->
	<input type="checkbox" id="allow-registration" name="allow-registration" title="Allow Registration" />
    <label><?php _e( 'Allow Registration', 'tribe-events-calendar' ); ?></label>
    
    <br />
    
    <div id="registration-display" style="display:none">
        
        <br />
        
        <div style="font-size:11px">
	    * Selecting 'Allow Registration' opens the event up to free registration.  Filling in any of the options below restricts the registrants to a select target group.
    	</div>
        
        <br />
    
		<input type="text" name="min-job-level" title="1-50" placeholder="1-50" size="2" />
		<label><?php _e( 'Minimum Job Level', 'tribe-events-calendar' ); ?></label>
    
		<br />
    
		<input type="text" name="min-gear-level" title="1-90" placeholder="1-90" size="2" />
		<label><?php _e( 'Minimum Gear Level', 'tribe-events-calendar' ); ?></label>
    
		<br />
        <br />
        
        <div style="font-size:11px">
        * A maximum amount of registrants can be defined below.  <br />
        * Specific amounts of classes/jobs can also be set to restrict the party to a certain style.  <br />
        * The total amount of specified jobs can only add up to the maximum amount of registrants set.  <br />
        * If a specific class/job is set to zero it will not allow registrants to register for the event with that class/job. <br />
        * If the total specific classes/jobs is less than the maximum amount of registrants it will allow the remaining spots to be filled by any remaining classes/jobs not designated as zero.
        </div>
        
        <br />
    
		 <input type="text" name="max-registrants" size="2" />
		 <label><?php _e( 'Maximum Registrants', 'tribe-events-calendar' ); ?></label>
    
		<br />
        
        <div style="clear:both;height:1px;overflow:none;"></div>
            
        <br />
	    
        <div style="display:inline;">
        
	        <div style="float:left; width:50%;">
        
			    <label><?php _e( 'Disciples of War: ', 'tribe-events-calendar' ); ?></label>
        
		        <br />
		        <br />
        
			    <input type="text" name="gld-pld" title="0-8" placeholder="0-8" size="2" /> 
			    <label><?php _e( 'Gladiator / Paladin', 'tribe-events-calendar' ); ?></label>
	    
			    <br />
		    
			    <input type="text" name="pgl-mnk" title="0-8"placeholder="0-8" size="2" />
			    <label><?php _e( 'Pugilist / Monk', 'tribe-events-calendar' ); ?></label>
	    
	    		<br />
	    
			    <input type="text" name="mrd=war" title="0-8"placeholder="0-8" size="2" />
			    <label><?php _e( 'Marauder / Warrior', 'tribe-events-calendar' ); ?></label>
	    
			    <br />
	    
			    <input type="text" name="lnc-drg" title="0-8"placeholder="0-8" size="2" />
			    <label><?php _e( 'Lancer / Dragoon', 'tribe-events-calendar' ); ?></label>
	    
			    <br />
	    
			    <input type="text" name="arc-brd" title="0-8"placeholder="0-8" size="2" />
			    <label><?php _e( 'Archer / Bard', 'tribe-events-calendar' ); ?></label>
	    
        	</div>
        
        	<div style="float:left; width:50%;">
            
        	    <label><?php _e( 'Disciples of Magic: ', 'tribe-events-calendar' ); ?></label>
        
		        <br />
		        <br />
        
		        <input type="text" name="cnj-whm" title="0-8"placeholder="0-8" size="2" />
			    <label><?php _e( 'Conjurer / Whitemage', 'tribe-events-calendar' ); ?></label>
	    
			    <br />
        
			    <input type="text" name="thm-blm" title="0-8"placeholder="0-8" size="2" />
	    		<label><?php _e( 'Thaumaturge / Blackmage', 'tribe-events-calendar' ); ?></label>
	    
			    <br />
	    
			    <input type="text" name="acn" title="0-8"placeholder="0-8" size="2" />
			    <label><?php _e( 'Arcanist', 'tribe-events-calendar' ); ?></label>
	    
			    <br />
	    
			    <input type="text" name="sch" title="0-8"placeholder="0-8" size="2" />
			    <label><?php _e( 'Scholar', 'tribe-events-calendar' ); ?></label>
	    
			    <br />
	    
			    <input type="text" name="smn" title="0-8"placeholder="0-8" size="2" />
			    <label><?php _e( 'Summoner', 'tribe-events-calendar' ); ?></label>
                
            </div>
	    
        </div>
        
        <div style="clear:both;height:1px;overflow:none;"></div>
        
        <br />
        
        <div style="font-size:11px; display:inline;">
        * The below options can be used to limit registrants to generic jobs instead of the specific ones above.
        </div>
        
        <div style="clear:both;height:1px;overflow:none;"></div>
        
        <br />
        
        <div style="display:inline">
        	
            <div style="float:left; width:33%;">
            
				<input type="text" name="tank" title="0-8"placeholder="0-8" size="2" />
				<label><?php _e( 'TANKS', 'tribe-events-calendar' ); ?></label>
                
            </div>
            
            <div style="float:left; width:33%;">
            	
                <input type="text" name="heal" title="0-8"placeholder="0-8" size="2" />
			    <label><?php _e( 'HEALS', 'tribe-events-calendar' ); ?></label>
                
            </div>
            
            <div style="float:left; width:33%;">
            
            	<input type="text" name="dps" title="0-8"placeholder="0-8" size="2" />
			    <label><?php _e( 'DPS', 'tribe-events-calendar' ); ?></label>
                
            </div>
            
        </div>
        
    </div>
    
    <div style="clear:both;height:1px;overflow:none;"></div>
    
    <hr size=1 style="margin: 12px 0px 12px 0px; background-color:#ededed">
    
    <!-- content -->
	<?php
	$content = '';
	$editor_id = 'editor';
	
	wp_editor( $content, $editor_id );
	?>
    
    <input type="hidden" name="content" value="<?php $content ?>" />
    
</form>