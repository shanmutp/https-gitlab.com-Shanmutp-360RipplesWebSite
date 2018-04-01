<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">

#marqueecontainer{
position: relative;
width: 100%; /*marquee width */
height: 400px; /*marquee height */
background-color: white;
overflow: hidden;
/*border: 3px solid #e5e5e5;*/
background:#f5f5f5;
color:#000000;

 
}

</style>

<script type="text/javascript">

/***********************************************
* Cross browser Marquee II- (c) Dynamic Drive (www.dynamicdrive.com)
* Please keep this notice intact
* Visit http://www.dynamicdrive.com/ for this script and 100s more.
***********************************************/

var delayb4scroll=2000 //Specify initial delay before marquee starts to scroll on page (2000=2 seconds)
var marqueespeed=2 //Specify marquee scroll speed (larger is faster 1-10)
var pauseit=1 //Pause marquee onMousever (0=no. 1=yes)?

////NO NEED TO EDIT BELOW THIS LINE////////////

var copyspeed=marqueespeed
var pausespeed=(pauseit==0)? copyspeed: 0
var actualheight=''

function scrollmarquee(){
if (parseInt(cross_marquee.style.top)>(actualheight*(-1)+8))
cross_marquee.style.top=parseInt(cross_marquee.style.top)-copyspeed+"px"
else
cross_marquee.style.top=parseInt(marqueeheight)+8+"px"
}

function initializemarquee(){
cross_marquee=document.getElementById("vmarquee")
cross_marquee.style.top=0
marqueeheight=document.getElementById("marqueecontainer").offsetHeight
actualheight=cross_marquee.offsetHeight
if (window.opera || navigator.userAgent.indexOf("Netscape/7")!=-1){ //if Opera or Netscape 7x, add scrollbars to scroll and exit
cross_marquee.style.height=marqueeheight+"px"
cross_marquee.style.overflow="scroll"
return
}
setTimeout('lefttime=setInterval("scrollmarquee()",30)', delayb4scroll)
}

if (window.addEventListener)
window.addEventListener("load", initializemarquee, false)
else if (window.attachEvent)
window.attachEvent("onload", initializemarquee)
else if (document.getElementById)
window.onload=initializemarquee


</script>
<style>
#title_message {
    display: none;
}

@media screen and (min-width: 768px) {
    #title_message {
        clear: both;
        display: block;
        float: left;
        margin: 10px auto 5px 20px;
        width: 100%;
    }
}
</style>

</head>

<body>
<div id="title_message">
<div id="marqueecontainer" onMouseover="copyspeed=pausespeed" onMouseout="copyspeed=marqueespeed">
<div id="vmarquee" style="position: absolute; width: 100%; padding-left:20px;">

<!--YOUR SCROLL CONTENT HERE-->

<p style="padding:9px; font-size:14px;"> Students friendly fee payment model <span style="color:blue;font-weight:bold">PAL</span> launched (<span style="color:blue"><b>P</b></span>ay <span style="color:blue"><b>A</b></span>s you <span style="color:blue"><b>L</b></span>earn model).Pay post your job offer* Contact us for more details </p>
 <p style="padding:9px; font-size:14px;">Improve your Java/Python/C# programming skills by joining our <span style="color:maroon ;font-weight:bold" >"Ripples of Programming"</span> course.<b>Batches starting April</b> <a href="Brochure/5daysTrainingBrochure.pdf" target="_blank" style="text-decoration: underline;color:red"> Click for brochure.</a> </p> 
 <p style="padding:9px; font-size:14px;">Become job ready by joining our <span style="color:maroon ;font-weight:bold" > Full Stack development</span> course.<b>Batches starting April.</b><a href="Brochure/FullStackDevelopmene.pdf" target="_blank" style="text-decoration: underline;color:red"> Click for brochure.</a></p> 

 <p style="padding:9px; font-size:14px;">2500+ engineering graduates covered as part of Smart-C workshop for building IT industry awareness and trends.</p> 
 <p style="padding:9px; font-size:14px;">Research labs setup for cutting edge technologies such as Mobile app development, IOT & Big Data.</p> 
<p style="padding:9px; font-size:14px;">Our students got placed in top companies such as <span style="color:maroon ;font-weight:bold" >Cap Gemini, Mindtree,BpmLinks,TCS, Polaris, CGI Corp, CSS corp</span> as software developers and data engineers.</p> 
<p style="padding:9px; font-size:14px;">
94% of the 1000 students gave extraordinary feedback on our 360 degree training model.</p>
<p style="padding:9px; font-size:14px;">
Check out our <b> <a href="testimonials.php" style="text-decoration: underline;color:red">feedback</a></b> here..
</p>
<p style="padding:9px; font-size:14px;">
For enquiry <b> <a href="contact.php" style="text-decoration: underline;color:red">click</a></b> here.
</p>
<!--YOUR SCROLL CONTENT HERE-->

</div>
</div>
</div>
</body>
</html>
