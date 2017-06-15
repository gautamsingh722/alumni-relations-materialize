<html lang="en">
<?php
include "head.php";
?>
<body>
<div id="wrapper" class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
<?php
include "navbar.php";
?>
<div class="container-fluid">
<div class="row">
		<div class="col m1">
		</div>
      <div class="col m10 card-panel">
       <center><h5>WHO WE ARE ?</h5></center>
	   <div style="margin-bottom:25px;margin-top:5px;">
		<span class="divider"></span>
		</div>
	   <div class="row">
			<div class="col m8 s12">
	<div class="slider abtslider">
    <ul class="slides">
      <li>
        <img src="http://lorempixel.com/580/250/nature/1"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="http://lorempixel.com/580/250/nature/2"> <!-- random image -->
        <div class="caption left-align">
          <h3>Left Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="http://lorempixel.com/580/250/nature/3"> <!-- random image -->
        <div class="caption right-align">
          <h3>Right Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="http://lorempixel.com/580/250/nature/4"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
    </ul>
  </div>
  <div class="row" style="padding-top: 50px; color: #bd2828; margin-bottom: 0px;"><h6><strong>	"CONNECT, SUPPORT AND BELONG !!! "</strong></h6></div>
			</div>
			<div class="col m4 s12">
				<p style="margin: 0px;"><span style="color: #bd2828;"><strong>INDUSTRY AND ALUMNI RELATIONS (INAR), N.I.T JAMSHEDPUR</strong></span> works to cater the causes involving alumni and students of the institute. INAR committee endeavors to strengthen the alumni-institute relationship. Our team works to assist the office of Alumni Relations in its efforts to foster belongingness and pride among the patrons of the institute. We work with the vision to develop relations, MOUs and raise endowment funds for the advancement of the institute.<br>
			We also seek the guidance of our alumni to help the students avail internship, fellowship and other aids for continuing of their educational Programs.<br><br>
		
	   </p>
			</div>
	   </div>
       
	   
      </div>

    <div class="col m1">

    </div>

  </div>
</div>


<?php
include "footer.php"; 
?>

</div>
<script>
	$(document).ready(function(){
 		$('.abtslider').slider({
			indicators: false,
			height : 350,
		});
	});
</script>
</body>
</html>