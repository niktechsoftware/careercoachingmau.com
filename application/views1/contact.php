	<style type="text/css">
	.tb{
		border: 1px solid rgba(255,0,0,1);
		-webkit-box-shadow: 0px 0px 4px 0px rgba(255,0,0,1);
		-moz-box-shadow: 0px 0px 4px 0px rgba(255,0,0,1);
		box-shadow: 0px 0px 4px 0px rgba(255,0,0,1);
	}
	</style>
	<!-- CONTENT 
	============================================= -->
	<div class="content shortcodes">
		<div class="layout">
			<div class="row">
				<h1 class="centered">Contact Form</h1>
				<p class="p-20 centered">
					 If you have any query, please let us know by fill this contact form.
				</p>
	
				<div class="gap" style="height: 20px;"></div>
	
				<div class="form-message">
					<?php 
						if($this->uri->segment(3) == 'true'):
						$abc = str_replace("%20"," ",$this->uri->segment(4));
							echo "<font color='green'>Thank you <strong>".$abc."</strong> for contact us. We will touch with you soon....</font>";
						endif;
					?>
				</div>
							
				<form  class="b-form" action="<?php echo base_url()?>apanelForms/inquiry" method="post" style="margin-bottom: 10px;">
					<div class="input-wrap">
						<input type="hidden" name="contact" value="contact">
						<input class="field-name tb" type="text" placeholder="Name (required)" name="name" required="required">
					</div>
					<div class="input-wrap">
						<i class="icon-envelope"></i>
						<input class="field-email tb" type="text" placeholder="Email (required)" name="mobile" required="required">
					</div>
					<div class="input-wrap">
						<i class="icon-pencil"></i>
						<input class="field-subject tb" type="text" placeholder="Subject" name="email" required="required">
					</div>
					<div class="textarea-wrap">
						<i class="icon-pencil"></i>
						<textarea class="field-comments tb" placeholder="Message" name="msg" required="required"></textarea>
					</div>
					<input class="btn-submit btn colored" type="submit" value="Submit Query">
				</form>
				
			<hr class="dashed" style="margin-top: 0px;">
			
			<div class="row-item col-1_4">
					<div class="icon-box">
						<i class="icon-phone light"></i>
						<h5>Phone</h5>
						<p>+91-XXXXXXXXX ( Sir)</p>
						<p>+91-XXXXXXXXX ( Sir)</p>
						<p>+91-XXXXXXXX ( Sir)</p>
					</div>
				</div>
				<div class="row-item col-1_4">
					<div class="icon-box">
						<i class="icon-map-marker light"></i>
						<h5>Address Head Office</h5>
						<p>
							 Sxxxxxxxxxxxxxxxxxxx
						</p>
						<h5>Address Branch Office</h5>
						<p>
							xxxxxxxxxxxxxxxxxxxx
						</p>
					</div>
				</div>
				<div class="row-item col-1_4">
					<div class="icon-box">
						<i class="icon-time light"></i>
						<h5>Office Timing</h5>
						<p>
							Wednesday To Monday:<br> 08:00 AM - 06:00 PM<br>
						</p>
						<h5 style="color:red;">Weekly Off.</h5>
						<p style="color:red; font-wight:bolder;">
							Every Tuesday<br>
						</p>
					</div>
				</div>
				<div class="row-item col-1_4">
					<div class="icon-box">
						<i class="icon-envelope light"></i>
						<h5>E-mail</h5>
						<p>
							<a href="#">xxxxxxxxxxxxxxxxxx@gmail.com</a>
						</p>
					</div>
				</div>
				
				<hr class="dashed" style="margin-top: 0px;">
				
				<div class="row-item col-1_1">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1799.3439642779847!2d83.57565646133415!3d25.582047307277012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1435224841730" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
				
			</div>
		</div>
	</div>
	<!-- END CONTENT 
	============================================= -->
