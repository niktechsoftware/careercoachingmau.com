<!DOCTYPE html>

<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	
	<meta name="description" content="Best Comptition classes in kanpur. Career Coaching Classes (SCI) is the guidance. It is your road to success. And our institute has been true to its name both in literal and physical sense, as it has our GROUP as its key areas of training. We stands for Bank, IBPS, SBI, RBI, SSC Classes and onther comptition classes.">
	<meta name="keywords" content="Career Coaching Classes,Bank Coaching,IBPS Coaching,SBI Coaching,RBI Coaching,SSC Coaching,best compition classes in kanpur,best bank coaching in kanpur,best SBI coaching in kanpur,best SSC coaching in kanpur,best IBPS coaching in kanpur,best RBI coaching in kanpur,SCI ">
	<meta name="author" content="Career Coaching Classes">
	
	<title>Career Coaching Classes | Bank Coaching | IBPS Coaching | SBI Coaching | RBI Coaching | SSC Coaching</title>
	
	<!-- Styles -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/main.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/responsive.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/prettyPhoto.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/settings.css" media="screen"/>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/color-scheme/blue.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery-ui.css">

	<!-- Base JS -->
	<script src="<?php echo base_url();?>assets/js/jquery-1.9.1.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/jquery-ui.js"></script>
	<script src="<?php echo base_url();?>assets/js/jquery.sticky.js"></script>
	<script src="<?php echo base_url();?>assets/js/stellar.js"></script>
	<script src="<?php echo base_url();?>assets/js/main.js"></script>
	
	<!-- Revolution Slider -->
	<script src="<?php echo base_url();?>assets/js/jquery.themepunch.plugins.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/jquery.themepunch.revolution.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/revolution-slider-options.js"></script>
	
	<!-- Prety photo -->
	<script src="<?php echo base_url();?>assets/js/jquery.prettyPhoto.js"></script>
	<script>
		$(document).ready(function(){
			$("a[rel^='prettyPhoto']").prettyPhoto();
		});
	</script>
	
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3&appId=100989960065053";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	
</head>

<body>

<div class="main">

	<!-- TOP BAR 
	============================================= -->
	<div class="b-top-bar" 
		style="height:120px;
		/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#ff6600+0,ffa366+100 */
background: #ff6600; /* Old browsers */
background: -moz-linear-gradient(top,  #ff6600 0%, #ffa366 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ff6600), color-stop(100%,#ffa366)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  #ff6600 0%,#ffa366 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  #ff6600 0%,#ffa366 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  #ff6600 0%,#ffa366 100%); /* IE10+ */
background: linear-gradient(to bottom,  #ff6600 0%,#ffa366 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ff6600', endColorstr='#ffa366',GradientType=0 ); /* IE6-9 */

">
		<div class="layout" style="margin-top:0px;">
			<!-- Some text -->
			<div class="wrap-left">
				<a href="<?php echo base_url()?>" class="logo"><img src="<?php echo base_url();?>assets/img/logo.png" alt=""></a>
			</div>
		</div>
	</div>
	<!-- END TOP BAR 
	============================================= -->

	<!-- HEADER 
	============================================= -->
	<div class="header">
		<div class="layout clearfix">
			<div class="mob-layout wrap-right">
				<ul class="menu">
					<!-- Item 1 -->
					<li class="has-mega">
						<a href="<?php echo base_url()?>" <?php if(strlen($this->uri->segment(2)) == 0) :?> class="active" <?php endif;?>>Home</a>
					</li>					
					
					<li class="has-mega">
						<a href="<?php echo base_url()?>welcome/about"<?php if($this->uri->segment(2) == "about") :?> class="active" <?php endif;?>>About Us</a>
					</li>
					
					<li class="has-mega">
						<a href="#" class="active">Vacancies</a>
					</li>
					
					<li>
						<a href="#"<?php if($this->uri->segment(2) == "courses") :?> class="active" <?php endif;?>>Courses</a>

						<ul class="submenu">
							<?php foreach($this->db->get("courses")->result() as $row):?>
							<li>
								<a href="<?php echo base_url()?>welcome/courses/<?php echo $row->id;?>"><?php echo $row->course_name;?></a>
							</li>
							<?php endforeach;?>
						</ul>
					</li>
					
					<li>
						<a href="<?php echo base_url()?>welcome/classes"<?php if($this->uri->segment(2) == "classes") :?> class="active" <?php endif;?>>Classes</a>
						<!-- 
						<ul class="submenu">
							<li><a href='<?php echo base_url()?>welcome/classes/regularBatch'>Regular Batch</a></li>
							<li><a href='<?php echo base_url()?>welcome/classes/weekendBatch'>Weekend Batch</a></li>
							<li><a href='<?php echo base_url()?>welcome/classes/mockInterviewBatch'>Mock Interview Batch</a></li>
							<li><a href="<?php echo base_url()?>welcome/newBatch">New Batches</a></li>
						</ul>
						 -->
					</li>
					
					<li>
						<a href="<?php echo base_url()?>welcome/freeDemo"<?php if($this->uri->segment(2) == "vacancies") :?> class="freeDemo" <?php endif;?>>Free Demo Class</a>
					</li>

					<!-- Item 4 -->
					<li>
						<a href="<?php echo base_url()?>welcome/faq"<?php if($this->uri->segment(2) == "vacancies") :?> class="faq" <?php endif;?>>FAQ</a>
					</li>

					<!-- Item 5 -->
					<li>
						<a href="<?php echo base_url()?>welcome/career"<?php if($this->uri->segment(2) == "vacancies") :?> class="career" <?php endif;?>>Career</a>
					</li>
					
					<li><a href="<?php echo base_url()?>welcome/newBatch"<?php if($this->uri->segment(2) == "vacancies") :?> class="newBatch" <?php endif;?>>Online Test</a></li>
					
					<!-- Item 6 -->
					<li>
						<a href="<?php echo base_url()?>welcome/contact"<?php if($this->uri->segment(2) == "vacancies") :?> class="contact" <?php endif;?>><i class="icon-envelope"></i>Contact Us</a>
					</li>

				</ul>
			</div>
		</div>
		<!-- Mobile Navigation -->
		<ul class="mob-menu">
			<!-- Item 1 -->
			<li>
				<div>
					<a href="<?php echo base_url()?>">Home</a>
				</div>
			</li>					

			<li>
				<div>
					<a href="<?php echo base_url()?>welcome/about">About Us</a>
				</div>
			</li>
			
			<li>
				<div>
					<a href="<?php echo base_url()?>welcome/vacancies">Vacancies</a>
				</div>
			</li>

			<li>
				<div>
					<a href="#">Courses</a>
					<span class="btn-submenu"></span>
				</div>

				<ul class="mob-submenu">
					<li><div> <a href="<?php echo base_url()?>welcome/courses/bank">Bank</a> </div></li>
					<li>
						<div> 
							<a href="#">IBPS Clark</a>
							<span class="btn-submenu"></span>
						</div>
						
						<ul class="mob-submenu">
							<li><div> <a href="<?php echo base_url()?>welcome/courses/ibpsPo">IBPS PO</a> </div></li>
							<li><div> <a href="<?php echo base_url()?>welcome/courses/ibpsSo">IBPS SO</a> </div></li>
						</ul>
					</li>
					<li>
						<div> 
							<a href="#">SBI</a>
							<span class="btn-submenu"></span>
						</div>
						
						<ul class="mob-submenu">
							<li><div> <a href="<?php echo base_url()?>welcome/courses/sbiPo">PO</a> </div></li>
							<li><div> <a href="<?php echo base_url()?>welcome/courses/sbiSo">SO</a> </div></li>
							<li><div> <a href="<?php echo base_url()?>welcome/courses/sbiClark">Clark</a> </div></li>
						</ul>
					</li>
					<li>
						<div> 
							<a href="#">RBI</a>
							<span class="btn-submenu"></span>
						</div>
						
						<ul class="mob-submenu">
							<li><div> <a href="<?php echo base_url()?>welcome/courses/sbiClark">Assistant Clark</a> </div></li>
							<li><div> <a href="<?php echo base_url()?>welcome/courses/sbiManager">Assistant Manager</a> </div></li>
						</ul>
					</li>
					<li>
						<div> 
							<a href="#">SSC</a>
							<span class="btn-submenu"></span>
						</div>
						
						<ul class="mob-submenu">
							<li><div> <a href='<?php echo base_url()?>welcome/courses/sscLdc'>Lower Devisional Clerk (LDC-XII)</a> </div></li>
							<li><div> <a href='<?php echo base_url()?>welcome/courses/sscCgl'>Combined Graduate Level (CGL Graduate)</a> </div></li>
						</ul>
					</li>
					<li>
						<div> 
							<a href="#">Insurance</a>
							<span class="btn-submenu"></span>
						</div>
						
						<ul class="mob-submenu">
							<li><div> <a href='<?php echo base_url()?>welcome/courses/nicl'>NICL</a> </div></li>
							<li><div> <a href='<?php echo base_url()?>welcome/courses/lic'>LIC</a> </div></li>
							<li><div> <a href='<?php echo base_url()?>welcome/courses/oicl'>OICL</a> </div></li>
							<li><div> <a href='<?php echo base_url()?>welcome/courses/gic'>GIC</a> </div></li>
							<li><div> <a href='<?php echo base_url()?>welcome/courses/uiicl'>UIICL</a> </div></li>
							<li><div> <a href='<?php echo base_url()?>welcome/courses/niic'>NIIC</a> </div></li>
						</ul>
					</li>
				</ul>
			</li>
			
			<li>
				<div> 
					<a href="#">Classes</a>
					<span class="btn-submenu"></span>
				</div>
				
				<ul class="mob-submenu">
					<li><div> <a href='<?php echo base_url()?>welcome/classes/regularBatch'>Regular Batch</a> </div></li>
					<li><div> <a href='<?php echo base_url()?>welcome/classes/weekendBatch'>Weekend Batch</a> </div></li>
					<li><div> <a href='<?php echo base_url()?>welcome/classes/mockInterviewBatch'>Mock Interview Batch</a> </div></li>
				</ul>
			</li>
			
			<li>
				<div>
					<a href="<?php echo base_url()?>welcome/newBatch">New Batches</a>
				</div>
			</li>
			
			<li>
				<div>
					<a href="<?php echo base_url()?>welcome/freeDemo">Free Demo Class</a>
				</div>
			</li>
			
			<li>
				<div>
					<a href="<?php echo base_url()?>welcome/faq">FAQ</a>
				</div>
			</li>
			
			<li>
				<div>
					<a href="<?php echo base_url()?>welcome/career">Career</a>
				</div>
			</li>
			
			<li>
				<div>
					<a href="<?php echo base_url()?>welcome/contact">Contact Us</a>
				</div>
			</li>
			
		</ul>
		<!-- End Mobile Navigation -->
	</div>
	<!-- END HEADER 
	============================================= -->
