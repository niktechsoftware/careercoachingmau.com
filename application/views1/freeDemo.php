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
				<h1 class="centered popular-title" style="font-size: 30px; padding: 15px;">Free Demo Class</h1>
				<p class="p-20 centered">
					 Please Provide us general information about you for free demo class.
				</p>
				<div class="form-message">
					<?php 
						if($this->uri->segment(3) == 'true'):
						$abc = str_replace("%20"," ",$this->uri->segment(4));
							echo "<font color='green'class='p-20 centered'>Thank you <strong>".$abc."</strong> for contact us. We will touch with you soon....</font>";
						endif;
					?>
				</div>
				<div class="gap" style="height: 20px;"></div>
				
	
				<div class="form-message"></div>
							
				<form class="b-form" action="<?php echo base_url();?>apanelForms/saveDemoClass" method="post" style="margin-bottom: 10px;">
                    <table style="width:100%;">
                    	<tr>
                    		<td><p class="p-20">Candiate Name</p></td>
                        	<td>
                            	<div class="input-wrap">
                                    <input class="field-subject tb" name="name" type="text" placeholder="Candiate Name">
                                </div>
                            </td>
                        </tr>
                        
                        <tr>
                    		<td><p class="p-20">Course </p></td>
                        	<td>
                            	<div class="select-wrap">
                                    <select name="course" class="span tb" style="width: 330px;">
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
                    		<td><p class="p-20">Mobile Number </p></td>
                        	<td>
                            	<div class="input-wrap">
                                    <input class="field-subject tb" name="mobile" type="text" placeholder="Mobile Number">
                                </div>
                            </td>
                        </tr>
                        
                        <tr>
                    		<td><p class="p-20">Email Id </p></td>
                        	<td>
                            	<div class="input-wrap">
                                    <input class="field-subject tb" name="email" type="text" placeholder="Email ID">
                                </div>
                            </td>
                        </tr>
                        
                        <tr>
                    		<td><p class="p-20">Batch Time </p></td>
                        	<td>
                            	<div class="select-wrap">
                                    <select class="field-subject tb" name="timing" style="width: 330px;">
                                    	<option value="">-Select batch time-</option>
                                    	<option value="07:30 AM - 09:30 AM">07:30 AM - 09:30 AM</option>
                                    	<option value="10:00 AM - 12:00 PM">10:00 AM - 12:00 PM</option>
                                    	<option value="12:00 PM - 02-00 PM">12:00 PM - 02-00 PM</option>
                                    	<option value="03:00 PM - 05:00 PM">03:00 PM - 05:00 PM</option>
                                    	<option value="05:30 PM - 07:30 PM">05:30 PM - 07:30 PM</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                    </table>
                  	<div class="gap" style="height: 20px;"></div>
                    
					<input class="btn-submit btn colored" type="submit" value="Submit Information">
				</form>
			</div>
		</div>
	</div>
	<!-- END CONTENT 
	============================================= -->
