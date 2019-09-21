	<!-- CONTENT 
	============================================= -->
	<div class="content shortcodes">
		<div class="layout">
			<div class="row">
				<h1 class="centered">Register Form</h1>
				<p class="p-20 centered">
					 Provide your basic detail and register with us. After registration print the form and submit to our study center for 
					 Sartaj Coaching authantication. Submit the fee and than you will be able to acces your account and online test. 
				</p>
				
				<div class="gap" style="height: 20px;"></div>
	
				<div class="form-message"></div>
							
				<form class="b-form" action="<?php echo base_url()?>welcome/saveRegister" method="post" enctype="multipart/form-data">
				
					<table style="width: 100%">
						<tr>
							<td><p class="p-20" style="font-size: 14px;">Candidate Name </p></td>
							<td>
								<div class="input-wrap">
									<i class="icon-user"></i>
									<input class="field-name" name="name" type="text" placeholder="Student Name (required)">
								</div>
							</td>
							<td><p class="p-20" style="font-size: 14px;">Father's Name </p></td>
							<td>
								<div class="input-wrap">
									<div class="input-wrap">
										<i class="icon-envelope"></i>
										<input class="field-name" name="fname" type="text" placeholder="Father's Name (required)">
									</div>
								</div>
							</td>
						</tr>
						
						
						<tr>
							<td><p class="p-20" style="font-size: 14px;">Full Address </p></td>
							
							<td>
								<div class="input-wrap">
									<i class="icon-user"></i>
									<input class="field-name" name="address" type="text" placeholder="Full Address (required)">
								</div>
							</td>
							
							<td><p class="p-20" style="font-size: 14px;">Your City </p></td>
							
							<td>
								<div class="input-wrap">
									<i class="icon-envelope"></i>
									<input class="field-email" type="text" name="city" placeholder="Your City">
								</div>
							</td>
						</tr>
						
						
						
						
						<tr>
							<td><p class="p-20" style="font-size: 14px;">Your State </p></td>
							
							<td>
								<div class="input-wrap">
									<i class="icon-pencil"></i>
									<input class="field-subject" type="text" name="state" placeholder="Your State">
								</div>
							</td>
							
							<td><p class="p-20" style="font-size: 14px;">Area Pin Code </p></td>
							
							<td>
								<div class="input-wrap">
									<i class="icon-user"></i>
									<input class="field-name" type="text" name="pin" placeholder="Area Pin Code">
								</div>
							</td>
						</tr>
						
						
						
						<tr>
							<td><p class="p-20" style="font-size: 14px;">Contact Number </p></td>
							
							<td>
								<div class="input-wrap">
									<i class="icon-user"></i>
									<input class="field-name" type="text" name="mobile" placeholder="Contact Number">
								</div>
							</td>
							
							<td><p class="p-20" style="font-size: 14px;">Date of birth </p></td>
							
							<td>
								<div class="input-wrap">
									<i class="icon-pencil"></i>
									<input class="field-subject" type="date" name="dob" placeholder="Date Of Birth">
								</div>
							</td>
						</tr>
						
						
						
						<tr>
							<td><p class="p-20" style="font-size: 14px;">Heighest Qualification</p></td>
							
							<td>
								<div class="input-wrap">
									<i class="icon-user"></i>
									<input class="field-name" type="text" name="heighQ" placeholder="Heighest Qualification">
								</div>
							</td>
							
							<td><p class="p-20" style="font-size: 14px;">Course Applied for</p></td>
							
							<td>
								<div class="select-wrap">
									<select name="courseApplied" class="span3 tb">
										<option>-Select Course-</option>
										<option disabled="disabled">
											<strong>IBPS</strong>
										</option>
										<option value="IBPS Clerk">&nbsp;&nbsp;&nbsp;&nbsp;IBPS Clerk</option>
										<option value="IBPS PO">&nbsp;&nbsp;&nbsp;&nbsp;IBPS PO</option>
										<option value="IBPS SO">&nbsp;&nbsp;&nbsp;&nbsp;IBPS SO</option>
										
										<option disabled="disabled">
											<strong>SBI</strong>
										</option>
										<option value="SBI Clerk">&nbsp;&nbsp;&nbsp;&nbsp;SBI Clerk</option>
										<option value="SBI PO">&nbsp;&nbsp;&nbsp;&nbsp;SBI PO</option>
										<option value="SBI SO">&nbsp;&nbsp;&nbsp;&nbsp;SBI SO</option>
										
										<option disabled="disabled">
											<strong>RBI</strong>
										</option>
										<option value="Assistant Clerk">&nbsp;&nbsp;&nbsp;&nbsp;Assistant Clerk</option>
										<option value="Assistant Manager">&nbsp;&nbsp;&nbsp;&nbsp;Assistant Manager</option>
										
										<option disabled="disabled">
											<strong>SSC</strong>
										</option>
										<option value="Lower Division Clerk (LDC-XII)">&nbsp;&nbsp;&nbsp;&nbsp;Lower Division Clerk (LDC-XII)</option>
										<option value="Combined Graduate Level (CGL Graduate)">&nbsp;&nbsp;&nbsp;&nbsp;Combined Graduate Level (CGL Graduate)</option>
										
										<option disabled="disabled">
											<strong>Insurance</strong>
										</option>
										<option value="NICL">&nbsp;&nbsp;&nbsp;&nbsp;NICL</option>
										<option value="LIC">&nbsp;&nbsp;&nbsp;&nbsp;LIC</option>
										<option value="OICL">&nbsp;&nbsp;&nbsp;&nbsp;OICL</option>
										<option value="GIC">&nbsp;&nbsp;&nbsp;&nbsp;GIC</option>
										<option value="UICL">&nbsp;&nbsp;&nbsp;&nbsp;UICL</option>
									</select>
								</div>
							</td>
						</tr>
						
						<tr>
							<td><p class="p-20" style="font-size: 14px;">Select batch timing</p></td>
							<td>
								<div class="select-wrap">
                                    <select class="field-subject tb" name="timing">
                                    	<option value="">-Select batch time-</option>
                                    	<option value="07:30 AM - 09:30 AM">07:30 AM - 09:30 AM</option>
                                    	<option value="10:00 AM - 12:00 PM">10:00 AM - 12:00 PM</option>
                                    	<option value="12:00 PM - 02-00 PM">12:00 PM - 02-00 PM</option>
                                    	<option value="03:00 PM - 05:00 PM">03:00 PM - 05:00 PM</option>
                                    	<option value="05:30 PM - 07:30 PM">05:30 PM - 07:30 PM</option>
                                    </select>
                                </div>
							</td>
							
							<td><p class="p-20" style="font-size: 14px;">Select Gender</p></td>
							<td>
								<div class="select-wrap">
                                    <select class="field-subject tb" name="gender">
                                    	<option value="">-Select Gender-</option>
                                    	<option value="Male">Male</option>
                                    	<option value="Female">Female</option>
                                    </select>
                                </div>
							</td>
						</tr>
						
						<tr>
							<td><p class="p-20" style="font-size: 14px;">Browse your image (120 KB Max.)</p></td>
							
							<td>
								<div class="input-wrap">
									<i class="icon-pencil"></i>
									<input class="field-subject" type="file" name="image">
								</div>
							</td>
							
							<td><p class="p-20" style="font-size: 14px;">Browse your signature (100 KB Max.)</p></td>
							
							<td>
								<div class="input-wrap">
									<i class="icon-pencil"></i>
									<input class="field-subject" type="file" name="signature">
								</div>
							</td>
						</tr>
						
						
						<tr>
							<td><p class="p-20" style="font-size: 14px;">Email Address</p></td>
							
							<td>
								<div class="input-wrap">
									<i class="icon-pencil"></i>
									<input class="field-subject" type="email" name="email" placeholder="Email Address">
								</div>
							</td>
							
							<td><p class="p-20" style="font-size: 14px;">Choose A password</p></td>
							
							<td>
								<div class="input-wrap">
									<i class="icon-pencil"></i>
									<input class="field-subject" type="password" name="password" placeholder="Choose A password">
								</div>
							</td>
						</tr>
					</table>
					<input type="hidden" name="submitType" value="student">
					<input class="btn-submit btn colored" type="submit" value="Register with us">
				</form>
			</div>
		</div>
	</div>
	<!-- END CONTENT 
	============================================= -->
