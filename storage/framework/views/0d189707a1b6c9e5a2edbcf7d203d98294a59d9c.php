<link rel="stylesheet" href="<?php echo e(asset('css/navbar.css')); ?>">
 <!----------------------- DESKTOP NAVBAR ---------------------------------------->
<div class = "col-xs-12 nav-whole hidden-sm hidden-xs">
	<div class = "col-xs-4 logo">
			<a href="/"><img src = "<?php echo e(URL::asset('image/logo-navbar.png')); ?>" class = "img navbar-logo"></a>
	</div>
	<div class = "col-xs-8 nav-links">
		<ul>
			<a href ="/"><li class = "link">Home</li></a>
			<div class="dropdown opp-dd">
				<button class="dropbtn"><a id = "opp" href = "/opportunities">Opportunities</a></button>
				<div class="dropdown-content">
					<div class = "col-xs-6">
						<p class = "dropdown-content-header">United States</p>
						<a href="/workcompany?country=United States">Work & Travel</a>
						<a href="/internshipcompany?country=United States">Internship/Trainee</a>
						<a href="/aupair">Au Pair</a>
					</div>
					<div class = "col-xs-6">
						<p class = "dropdown-content-header">Australia</p>
						<a href="/internshipcompany?country=Australia">Internship/Trainee</a>
						<a href="/workvisa">Skilled Work Visa</a>
					</div>
				</div>
			</div>
			<a href="/aboutus"><li class = "link">About</li></a>
			<a href="/contactus"><li class = "link">Contact</li></a>
			<div class="dropdown">
				<button class="dropbtn">Learn More</button>
				<div class="dropdown-content">
					<a href="/news">News</a>
					<a href="/event">Events</a>
					<a href="/faq">FAQ</a>
				</div>
			</div>
			<div class = "applynow-btn">
				<a href = "application" class = "btn applynow-btn">Apply Now</a>
			</div>
		</ul>
	</div>
</div>

<!----------------------- MOBILE NAVBAR ---------------------------------------->
<div class = "col-xs-12 nav-whole hidden-lg hidden-md">
	<div class = "row">
		<div class = "col-xs-6 col-sm-8 logo">
			<a href="/"><img src = "<?php echo e(URL::asset('image/logo-navbar.png')); ?>" class = "img navbar-logo"></a>
		</div>
		<div class = "col-sm-1 col-xs-2 nav-links" style="padding:0;">
			<ul>
				<div class = "applynow-btn">
					<a href = "application" class = "btn applynow-btn1">Apply Now</a>
				</div>
			</ul>
		</div>

		<div class="container">
				<div class="col-xs-1">
						<div id="nav-icon">
							<span></span>
							<span></span>
							<span></span>
							<span></span>
						</div>
				</div>
		</div>
	</div>
	<div class = "row text-center links-mobile">
		<ul>
			<div class="dropdown">
				<button class="dropbtn">Opportunities <span class="glyphicon glyphicon-triangle-bottom"></span> </button>
				<div class="dropdown-content">
					<div class = "col-sm-6 col-xs-6">
						<p class = "dropdown-content-header">United States</p>
						<a href="/workcompany?country=United States">Work & Travel</a>
						<a href="/internshipcompany?country=United States">Internship/Trainee</a>
						<a href="/aupair">Au Pair</a>
					</div>
					<div class = "col-xs-6">
						<p class = "dropdown-content-header">Australia</p>
						<a href="/internshipcompany?country=Australia">Internship/Trainee</a>
						<a href="/workvisa">Skilled Work Visa</a>
					</div>
				</div>
			</div>
	
			<div class="dropdown">
				<a href="/aboutus" id="navlink">About</a> 
			</div>
			<div class="dropdown">
				<a href="/contactus" id="navlink">Contact</a> 
			</div>
			<div class="dropdown">
				<button class="dropbtn">Learn More <span class="glyphicon glyphicon-triangle-bottom"></span> </button>
				<div class="dropdown-content">
					<a href="/news">News</a>
					<a href="/event">Events</a>
					<a href="/faq">FAQ</a>
				</div>
			</div>
		</ul>
	</div>
	<div class="mobile-header-navi" id="xxxcy">
		<div class="menu-header-menu-container">
			<ul>
				<li class="headd">OPPORTUNITIES</li>
				<li class="subheadd">United States</li>
				<li>- <a href="/workcompany?country=United States">Work & Travel</a></li>
				<li>- <a href="/internshipcompany?country=United States">Internship/Trainee</a></li>
				<li>- <a href="/aupair">Au Pair</a></li>
				<br>
				<li class="subheadd">Australia</li>
				<li>- <a href="/internshipcompany?country=Australia">Internship/Trainee</a></li>
				<li>- <a href="/workvisa">Skilled Work Visa</a></li>
				<br>
				<li class="headd"><a href="/aboutus" style="color: #950904;">ABOUT</a></li>
				<br>
				<li class="headd"><a href="/contactus" style="color: #950904;">CONTACT</a></li>
				<br>
				<li class="headd">LEARN MORE</li>
				<li>- <a href="/news">News</a></li>
				<li>- <a href="/event">Events</a></li>
				<li>- <a href="/faq">FAQ</a></li>
			</ul>
		</div>
	</div>

	
</div>
<script src="//code.jquery.com/jquery.min.js"></script>
<script src='//cdnjs.cloudflare.com/ajax/libs/jquery.devbridge-autocomplete/1.2.26/jquery.autocomplete.min.js'></script>
<script>	
jQuery(document).ready(function(){
	jQuery('#nav-icon').click(function(){
					
			jQuery(this).toggleClass('open');
			jQuery('#xxxcy').show();
		if ( jQuery('#xxxcy').hasClass('yeahh') ){
			jQuery('#xxxcy').hide();
			jQuery('#xxxcy').removeClass('yeahh');
		} else{			
			jQuery('#xxxcy').addClass('yeahh');
		}

	});
});




</script>
