<?php $bride_first_name = get_field( 'bride_first_name', 'option' ); ?>
<?php $bride_nickname = get_field( 'bride_nickname', 'option' ); ?>
<?php $bride_last_name = get_field( 'bride_last_name', 'option' ); ?>
<?php $groom_first_name = get_field( 'groom_first_name', 'option' ); ?>
<?php $groom_nickname = get_field( 'groom_nickname', 'option' ); ?>
<?php $groom_last_name = get_field( 'groom_last_name', 'option' ); ?>
<?php $logo = get_field( 'logo', 'option' ); ?>
<?php $wedding_date = get_field( 'wedding_date', 'option' ); ?>
<?php $wedding_location = get_field( 'wedding_location', 'option' ); ?>
<?php

function logo() {
	$logo = get_field( 'logo', 'option' );
	$bride_first_name = get_field( 'bride_first_name', 'option' );
	$groom_first_name = get_field( 'groom_first_name', 'option' );
	if(!$logo):
		echo '<a href="/" class="logo-link"><div class="site-logo text-logo">'.$bride_first_name.' <span>&</span><br/>'.$groom_first_name.'</div></a>';
	else: 
	
	echo '<a href="/"><img id="site-logo"  src="'.$logo['url'].' " alt="'.$logo['alt'].'" /></a>';
	endif;
}
function groom_name() {
	$groom_nickname = get_field( 'groom_nickname', 'option' );
	$groom_first_name = get_field( 'groom_first_name', 'option' );
	if (!$groom_nickname) {
		$name = $groom_first_name;
	}
	else{
		$name = $groom_nickname;
	}
	echo $name;
}
function groom_fullname() {
	$groom_first_name = get_field( 'groom_first_name', 'option' );
	$groom_last_name = get_field( 'groom_last_name', 'option' );
	
	echo $groom_first_name. " " .$groom_last_name;
}

function bride_name() {
	$bride_nickname = get_field( 'bride_nickname', 'option' );
	$bride_first_name = get_field( 'bride_first_name', 'option' );
	if (!$bride_nickname) {
		$name = $bride_first_name;
	}
	else{
		$name = $bride_nickname;
	}
	echo $name;
}
function bride_fullname() {
	$bride_first_name = get_field( 'bride_first_name', 'option' );
	$bride_last_name = get_field( 'bride_last_name', 'option' );
	
	echo $bride_first_name. " " .$bride_last_name;
}


function lat() {
?>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhmxk1WHZJTlTGaRd97zg0EtvgAomqOFg"></script>
<script type="text/javascript">
 <?php $wedding_location = get_field( 'wedding_location', 'option' ); ?>
	var geocoder = new google.maps.Geocoder();
var address = "<?php echo $wedding_location ?>";

geocoder.geocode( { 'address': address}, function(results, status) {

  if (status == google.maps.GeocoderStatus.OK) {
    var latitude = results[0].geometry.location.lat();
    var longitude = results[0].geometry.location.lng();
    
  } 
 
  });
 
  </script>
  <?php
  echo "<script>document.writeln(latitude);</script>";
 }