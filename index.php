
<?php get_header(); ?>
<header>
		<nav class="navbar navbar-expand-lg">
				<img class="navbar-brand" src="<?php bloginfo('stylesheet_directory'); ?>/img/Union.png">
				<button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavDropdown">
				  <ul class="navbar-nav ml-auto">
					<li class="nav-item">
					  <a class="nav-link" data-scroll href="#aboutTitle">About Us</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link" data-scroll href="#servicesTitle">Services</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link" data-scroll href="#processTitle">Process</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link" data-scroll href="#HSTitle">Health & Safety</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link" data-scroll href="#formBox">Contact</a>
					</li>
				  </ul>
				</div>
			  </nav>
</header>
<div style="background: url(<?php the_field('showcase_image')?>) no-repeat 0;"	id="showcase">
		<div class="cont1">
			<h3>Arcadia Scaffolding</h3>
			<div id="bigB"><a id="quoteButton" class="button" data-scroll href="#formBox">Get a quote</a></div>
		</div>
		<div id="arrowGrid" class="arrow bounce">
				<a class="fas fa-angle-down fa-4x"  data-scroll href="#aboutTitle"></a>
		</div>
</div>
<div id="aboutTitle" class="whitecont">
	<div data-aos="fade-up"  data-aos-duration="1000" data-aos-delay="200" data-aos-once="true" data-aos-offset="300" class="textCont">
		<h2><?php the_field('about_us_header_text');?></h2>
		<p>We are a London based Scaffolding company that provide expert access solutions for Residential properties at competitive prices. We are based in North-West London, but work anywhere and everywhere within the M25. A professional and approachable company, offering high quality, safe services at affordable prices. Simplifying scaffold requirements & providing transparent estimates and effective solutions tailored to you. Free same day quotations available.</p>
	</div>
</div> 
<div id="servicesTitle" class="blackcont">
	<h2 data-aos="fade-up"  data-aos-duration="1000" data-aos-delay="200" data-aos-once="true" data-aos-offset="450">Services</h2>
	<div data-aos="fade-up"  data-aos-duration="1000" data-aos-delay="200" data-aos-once="true" data-aos-offset="300" id="servicesHeaderGrid">
		<div class="servicesGridItem" id="servicesOne">
			<h3>Scaffolding Design</h3>
		</div>
		<div id="dot1" class="dots">
			<div class="portrait"></div>
		</div>
		<div class="servicesGridItem" id="servicesTwo">
			<h3>Tower Scaffolding & access towers</h3>
		</div>
		<div id="dot2" class="dots">
			<div class="portrait"></div>
		</div>
		<div class="servicesGridItem" id="servicesThree">
			<h3>Chimney scaffolding</h3>
		</div>
		<div id="dot3" class="dots">
			<div class="portrait"></div>
		</div>
		<div class="servicesGridItem" id="servicesFour">
			<h3>Temporary roofs</h3>
		</div>	
	</div>
	<img class="vector" data-aos="fade-up"  data-aos-duration="1000" data-aos-delay="200" data-aos-once="true" 
		src="<?php bloginfo('stylesheet_directory'); ?>/img/Vector.png">
	<h2 id="accessSolutions" data-aos="fade-up"  data-aos-duration="1000" data-aos-delay="200" data-aos-once="true">Access solutions</h2>
	<div data-aos="fade-up"  data-aos-duration="1000" data-aos-delay="200" data-aos-once="true" class="listBox">
		<ul id="accessList" class="lists">
			<li>Re-roofing</li>
			<li>Loft conversions</li>
			<li>Re-decoration</li>
			<li>Refurbishments</li>
			<li>Extensions</li>
			<li>Chimney stacks</li>
			<li>Guttering Repairs & Maintentance	</li>
		</ul>
	</div>
</div>
<!-- GALLERY STARTS HERE -->
<div id="galleryCont" class="whitecont">
	<h2>Gallery</h2>
	<div class="slider">
		<div class="slide_viewer">
			<div class="slide_group">
			<div class="slide">
				<img class="image" src="<?php the_field('large_image')?>"/>
			</div>
			<div class="slide">
			</div>
			<div class="slide">
			</div>
			<div class="slide">
			</div>
			</div>
		</div>
	</div>
	<!-- End // .slider -->
	<div class="slide_buttons"></div>
	<div class="directional_nav">
		<div class="previous_btn" title="Previous">
			<i class="fas fa-chevron-circle-left"></i>
		</div>
		<div class="next_btn" title="Next">
			<i class="fas fa-chevron-circle-right"></i>
		</div>
	</div>
<!-- End // .directional_nav -->
</div>
<!-- GALLERY END -->
<!-- PROCESS SECTION START -->
<div class="blackcont">
	<div data-aos="fade-up"  data-aos-duration="1000" data-aos-delay="400" data-aos-once="true" data-aos-offset="300" class="textCont">
		<h2 id="processTitle">Our Process</h2>
		<p>We will have one of our staff visit the proposed site and discuss the requirements and likely solution with you in detail,
			giving you assurance and peace of mind across the board from price to quality.
		</p>
		<div class="listBox">
			<ul id="processList" class="lists">
				<li> <a>Arrange a convenient time to visit the site in question</a></li>
				<li> <a>Take a full itinerary and stock list of access or health and safety issues</a> </li>
				<li> <a>Discuss your in depth requirements to ensure we work off the same page</a></li>
				<li> <a>Present drawing/ sketches of the proposed structure if required</a> </li>
				<li> <a>Agree Terms and arrange an erection time & date</a></li>
				<li> <a>Erect the scaffold as agreed, expediently, to get your works underway. Upon completion the Scaffold will be dismantled with the same careful attention to detail as when erected</a> </li>
			</ul>
		</div>
	</div>
</div>
<!-- PROCESS SECTION END -->
<div class="whitecont">
	<div data-aos="fade-up"  data-aos-duration="1000" data-aos-delay="400" data-aos-once="true" data-aos-offset="300" class="textCont">
		<h2 id="HSTitle">Health & Safety</h2>
		<p>A full health and safety policy is available upon requst.
			The following list is an overview of our health and safety practices that we use when required:</p>
	<div class="listBox">
			<ul id="HSList" class="lists">
				<li> <a>Debris netting and plastic cladding</a> </li>
				<li> <a>Fire retardant scaffold boards</a></li>
				<li> <a>Handrails and safety barriers</a> </li>
				<li> <a>Suspended access platforms</a> </li>
				<li> <a>Foam Protection</a> </li>
				<li> <a>Insured up to £1,000,000</a> </li>
			</ul>
			<div class="downloadBox">
				<span>Health & Safety doc. (PDF)</span>
				<a class="button">Download</a>
				<span>Legal & Insurance doc. (PDF)</span>
				<a id="whiteBtn" class="button">Download</a>
			</div>

	</div>
</div>
</div>
<div style="background: url(<?php the_field('showcase_image')?>) no-repeat 0;" id=formBackground>
	<div id="formBox">
		<form action="https://formspree.io/rostum_aha@hotmail.co.uk" method="POST" id="form">
			<h1>Get in touch</h1>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In error ipsum quas. Reiciendis in hic provident aut voluptates numquam itaque.</p>
			<div class="form-group">
				<input id="inputName" name="name" type="text" placeholder="Name" required>
				<input id="inputPhone" name="phone" type="number" placeholder="Phone" required>
				<input id="inputEmail" name="_replyto" type="email" placeholder="Email" required>
				<textarea id="messageBox" name="message" type="text" placeholder="Message" required></textarea>
				<input id="submit" type="submit" value="Send" class="button">
				<!-- <button class="button">
					<span>Send</span>
				</button> -->
			</div>
		</form>
	</div>
</div>
<?php get_footer(); ?>