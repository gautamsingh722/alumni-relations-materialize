<!DOCTYPE html>
<html lang="en">
<head>
<?php include("head.php"); ?>
<title>INAR | NIT Jamshedpur</title>
<script type="text/javascript">
 $(document).ready(function(){
 		$('.slider').slider({
          indicators: false,
          height: 500,
          });
          $(".button-collapse").sideNav();
          $('.materialboxed').materialbox();
    });
</script>
<link href="css/calender.css" type="text/css" rel="stylesheet"/>
</head>

<body>
<?php include("navbar.php"); ?>



<div class="slider" >
    <ul class="slides">    
     <li><img src="images/s1.jpg" alt=" NIT Jamshedpur" /></li>
     <li><img src="images/s2.jpg" alt="NIT Jamshedpur" /></li>
     <li><img src="images/s3.jpg" alt="hhh"  /></li>
  
    </ul>
</div>
<br/><br/><br/><br/>
<div class="fixed-action-btn ">
    <a class="btn-floating btn-large   red lighten-2">
      <i class="large material-icons">share</i>
    </a>
    <ul>
      <li><a href="#" class="btn-floating red"><img width="100% "src="images/utube.png"/></a></li>
      <li><a href="#" class="btn-floating red"><img width="100% "src="images/google+.png"/></a></li>
      <li><a href="#" class="btn-floating blue"><img width="100% "src="images/download.png"/></a></li>
      <li><a href="#" class="btn-floating purple lighten-2"><img width="100% "src="images/insta.png"/></a></li>
      <li><a href="https://twitter.com/TEAMREVANTA" class="btn-floating cyan lighten-1"><img width="100% "src="images/twi.png"/></a></li>
      <li><a href="https://www.facebook.com/aboutrevanta" class="btn-floating blue"><img width="100% "src="images/facebook.png"/></a></li>
    </ul>
  </div>

<div class="row">

<div class="col m12 l6 offset-l1">
<div class="row">
<h4 class="light" >ALUMNI MEET 2017</h4>
<hr/><br/>
<div class="col m4 l4">
<img class="responsive-img" src="images/meet1.jpg" />
 <h5  style="color:#bd2828"><b>WELCOME</b></h5>
 <p >Welcome from your 2017 Alumni Association Board of Governors. We hope you will get involved and learn more about what we are doing with the College.</p>
</div>
<div class="col m4 l4">
<img class="materialboxed responsive-img" src="images/meet2.jpg" />
 <h5  style="color:#bd2828"><b>EVENT SCHEDULE</b></h5>
 <p>The Office of Alumni and Constituent  Engagement hosts   
events, both on campus and off, to bring alumni and friends  together to share   
memories and spread the news of the many great things  happening at  
 Hendrix.</p>
</div>
<div class="col m4 l4">
<img class="responsive-img" src="images/meet3.jpg" />
 <h5  style="color:#bd2828"><b>ALUMNOTE UPDATES</b></h5>
 <p>New baby?  New job?  Keep in touch with classmates and update your own information.</p>

</div>
</div>

<div class="row">
<div class="col m4 l4">
<img class="responsive-img" src="images/meet1.jpg" />
 <h5  style="color:#bd2828"><b>REGISTER</b></h5>
 <p >Register to Receive the Alumni E-newsletter</h4><p><p>Not receiving the Alumni E-newsletter?  Log onto the Hendrix 
Webcommunity and update your email address and email preferences.</p>
</div>
<div class="col m4 l4">
<img class="responsive-img" src="images/meet2.jpg" />
 <h5  style="color:#bd2828"><b>CAFE HENRIX</b></h5>
 <p>Hendrix has introduced the Hendrix Memorial Garden, located south of Greene Chapel.  This will be a sacred place on campus, a place where those who love or are connected to Hendrix may choose to be interred.</p>
</div>
<div class="col m4 l4">
<img class="responsive-img" src="images/meet3.jpg" />
 <h5  style="color:#bd2828"><b>ALUMNI MAP</b></h5>
 <p>Checkout our alumni map to see what the Alumni Office and Hendrix alumni are doing.</p>

</div>
</div>


</div>


<div class="col m12 l4">
<center>
<h4 class="light" style="font-size: 20px;"><b>Alumni Home</b></h4>
<br/>
<button class="btn-large waves-effect waves-light  red lighten-2" type="submit" name="action">LOGIN
    <i class="material-icons right">send</i>
  </button>
 
  <br/> <br/> <br/>


<h5 style="color:#bd2828" id="demo"><b> </b></h5>

<script>
// Set the date we're counting down to
var countDownDate = new Date("Jan 28, 2017 9:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now an the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    //var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    //var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    document.getElementById("demo").innerHTML = days + " Days " + hours + " Hours to go... ";
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EVENT OVER!";
    }
}, 1000);
</script>

<div class="month">      
  <ul>
    <li class="prev">❮</li>
    <li class="next">❯</li>
    <li style="text-align:center">
      January<br>
      <span style="font-size:18px">2017</span>
    </li>
  </ul>
</div>

<ul class="weekdays">
  <li>Mo</li>
  <li>Tu</li>
  <li>We</li>
  <li>Th</li>
  <li>Fr</li>
  <li>Sa</li>
  <li>Su</li>
</ul>

<ul class="days">  
<li></li>
<li></li>
<li></li>
<li></li>
<li></li>
<li></li>
  <li>1</li>
  <li>2</li>
  <li>3</li>
  <li>4</li>
  <li>5</li>
  <li>6</li>
  <li>7</li>
  <li>8</li>
  <li>9</li>
  <li><span class="active">10</span></li>
  <li>11</li>
  <li>12</li>
  <li>13</li>
  <li>14</li>
  <li>15</li>
  <li>16</li>
  <li>17</li>
  <li>18</li>
  <li>19</li>
  <li>20</li>
  <li>21</li>
  <li>22</li>
  <li>23</li>
  <li>24</li>
  <li>25</li>
  <li>26</li>
  <li>27</li>
  <li>28</li>
  <li>29</li>
  <li>30</li>
  <li>31</li>
</ul>



 </center>
</div>

</div>



<?php include("footer.php"); ?>
</body>

</html>