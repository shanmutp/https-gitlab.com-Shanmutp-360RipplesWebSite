<script>
window.addEventListener('load', function () {
	function go() {
		i = i < width ? i + step : 1;
		m.style.marginLeft = -i + 'px';
	}
	var i = 0,
		step = 3,
		space = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
	var m = document.getElementById('marquee');
	var t = m.innerHTML; //text
	m.innerHTML = t + space;
	m.style.position = 'absolute'; // http://stackoverflow.com/questions/2057682/determine-pixel-length-of-string-in-javascript-jquery/2057789#2057789
	var width = (m.clientWidth + 1);
	m.style.position = '';
	m.innerHTML = t + space + t + space + t + space + t + space + t + space + t + space + t + space;
	m.addEventListener('mouseenter', function () {
		step = 0;
	}, true);
	m.addEventListener('mouseleave', function () {
		step = 3;
	}, true);
	var x = setInterval(go, 50);
}, true);

</script>

<style>
#marquee {
   overflow:hidden;
   white-space: nowrap;
 }
</style>
<div id="marquee" class="hidden-lg" style="padding:9px; font-size:14px;color:black">
 	
 1. Improve your <span style="color:maroon ;font-weight:bold" >Java/Python/C#</span> programming skills, join our <span style="color:maroon ;font-weight:bold" >"Ripples of Programming"</span> course. <span style="color:maroon ;font-weight:bold" > Fees as low as INR 2500 </span>. Batches starting April <a href="Brochure/FullStackDevelopmene.pdf" target="_blank" style="text-decoration: underline;color:red">Click</a> for brochure.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 2. Become <span style="color:maroon ;font-weight:bold" >"JOB READY"</span> by joining our <span style="color:maroon ;font-weight:bold" > "Full Stack Engineer"</span> course <span style="color:maroon ;font-weight:bold" >@6000 INR </span> <b<HURRY LIMITED SEATS</b>. Batches starting April <a href="Brochure/5daysTrainingBrochure.pdf" target="_blank" style="text-decoration: underline;color:red"> Click</a> for brochure. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3. Students friendly fee payment model <span style="color:blue;font-weight:bold">PAL</span> launched (<span style="color:blue;font-weight:bold">P</span>ay <span style="color:blue;font-weight:bold">A</span>s you <span style="color:blue;font-weight:bold">L</span>earn model). Pay post your job offer Contact us for more details.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 4. Our students placement records: <b> Cap Gemini,BpmLinks,TCS, Polaris, CGI Corp, Mind Tree, CSS corp </b> as software developers and data engineers.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 5. <span style="color:maroon ;font-weight:bold" >94% of the 2500</span>  students who attended the our courses gave extraordinary feedback on our training models. Check out our <b> <a href="testimonials.php" style="text-decoration: underline;color:red">feedback</a></b> here.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 6. For registration & enquiry <b> <a href="contact.php" style="text-decoration: underline;color:red">click</a></b> here.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 

</div>
