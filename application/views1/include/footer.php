	<!-- FOOTER 
	============================================= -->
	<div class="footer">
		<!-- Widget Area -->
		<?php if(strlen($this->uri->segment(1)) != 0) :?>
		<div class="b-widgets">
			<div class="layout">
				<div class="row">
					<!-- Links -->
					<div class="row-item col-1_4">
						<h3>Quick Links </h3>
						<ul class="b-list just-links m-dark">
							<li><a href="<?php echo base_url()?>welcome/about">About Us</a></li>
							<li><a href="<?php echo base_url()?>welcome/vacancies">Vacancies</a></li>
							<li><a href="<?php echo base_url()?>welcome/courses/bank">Courses</a></li>
							<li><a href="<?php echo base_url()?>welcome/classes/regularBatch">Classes</a></li>
							<li><a href="<?php echo base_url()?>welcome/newBatch">New Batches</a></li>
							<li><a href="<?php echo base_url()?>welcome/freeDemoClass">Free Demo Class</a></li>
							<li><a href="<?php echo base_url()?>welcome/faq">FAQ</a></li>
							<li><a href="<?php echo base_url()?>welcome/career">Career</a></li>
							<li><a href="<?php echo base_url()?>welcome/contact">Contact Us</a></li>
						</ul>
					</div>
					<!-- End Links -->
					<!-- Latest Tweets -->
					<div class="row-item col-1_2">
						<h3>Connect with facebook</h3>
						<div class="fb-page" data-href="https://www.facebook.com/careermakergroup" data-width="500" data-height="250" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/facebook"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div></div> 
					</div>
					<!-- End Latest Tweets -->
					<!-- Contact Form -->
					<div class="row-item col-1_4">
						<h3>Contact Form</h3>
						<!-- Success Message -->
						<div class="form-message"></div>
						<!-- Form -->
						<form class="b-form b-contact-form" action="<?php echo base_url()?>mailController/footerMail" method="post">
							<div class="input-wrap m-full-width">
								<i class="icon-user"></i>
								<input class="field-name" type="text" placeholder="Name (required)" name="name">
							</div>
							<div class="input-wrap m-full-width">
								<i class="icon-envelope"></i>
								<input class="field-email" type="text" placeholder="E-mail (required)" name="email">
							</div>
							<div class="textarea-wrap">
								<i class="icon-pencil"></i>
								<textarea class="field-comments" placeholder="Message" name="msg"></textarea>
							</div>
							<input class="btn-submit btn colored" type="submit" value="Send">
						</form>
						<!-- End Form -->
					</div>
					<!-- End Contact Form -->
				</div>
			</div>
		</div>
		<?php endif;?>
		<!-- End Widget Area -->
		<!-- Copyright Area -->
		<div class="b-copyright">
			<div class="layout">
				<!-- Copyright Text -->
				<span class="copy">Copyright &copy; 2015-16 <a href="<?php echo base_url();?>/welcome/index">Career Coaching</a>. All Right Reserved.</span>
				<!-- Social Icons -->
				<ul class="b-social bot">
					<li>Powerd By :</li>
					<li style="width: 200px;"><a href="gfinch.in" target="_blank" style="font-size: 12px;width: 150px;">Niktech oftware Solutions</a></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- END FOOTER 
	============================================= -->
	
</div>
<!-- END MAIN 
============================================= -->
</body>
</html>