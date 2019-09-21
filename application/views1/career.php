<style type="text/css">
	.tb{
		border: 1px solid rgba(255,0,0,1);
		-webkit-box-shadow: 0px 0px 4px 0px rgba(255,0,0,1);
		-moz-box-shadow: 0px 0px 4px 0px rgba(255,0,0,1);
		box-shadow: 0px 0px 4px 0px rgba(255,0,0,1);
	}
	.right{
		text-align: right; 
		padding-right: 50px;
		vertical-align: top;
	}
</style>

<!-- CONTENT 
	============================================= -->
	<div class="content shortcodes">
		<div class="layout">
			<div class="row">
				<h1 class="centered">Career</h1>
				<p class="p-20 centered">
					 Please Provide us general information about you.
				</p>
	<div class="form-message">
					<?php 
						if($this->uri->segment(3) == 'true'):
						$abc = str_replace("%20"," ",$this->uri->segment(4));
							echo "<font color='green'class='p-20 centered'>Thank you <strong>".$abc."</strong> for providing you information to us. We will touch with you soon....</font>";
						endif;
					?>
				</div>
				<div class="gap" style="height: 20px;"></div>
	
				<div class="form-message"></div>
							
				<form class="b-form" action="<?php echo base_url()?>apanelForms/saveCareer" method="post" enctype="multipart/form-data" style="margin-bottom: 10px;">
					<table style="width:100%;">
                    	<tr>
                        	<td><p class="p-20 right">Name <span style="color: red;">*</span> </p></td>
                            <td>
                            	<div class="input-wrap">
                                    <i class="icon-pencil"></i>
                                    <input class="field-name tb" type="text" name="name" placeholder="Name (required)">
                                </div>
                            </td>
                        </tr>
                        <tr>
                        	<td><p class="p-20 right">Email <span style="color: red;">*</span></p></td>
                            <td>
                            	<div class="input-wrap">
                                    <i class="icon-pencil"></i>
                                    <input class="field-name tb" type="text" name="email" placeholder="Email (required)">
                                </div>
                            </td>
                        </tr>
                        <tr>
                        	<td><p class="p-20 right">Mobile No. <span style="color: red;">*</span></p></td>
                            <td>
                            	<div class="input-wrap">
                                    <i class="icon-pencil"></i>
                                    <input class="field-name tb" type="text" name="mobile" placeholder="Mobile Number (required)">
                                </div>
                            </td>
                        </tr>
                        <tr>
                        	<td>
                        		<p class="p-20 right">Subject <span style="color: red;">*</span>
                        		<br/>
                        				<span style="color: green; font-size: 13px;">
                        					To select Multiple option Hold <strong>( Ctrl Key )</strong>
                        				</span>
                        		</p>
                        	</td>
                            <td>
                            	<div class="select-wrap">
                                    <select class="field-comments tb" style="height: 150px; width:330px;" multiple="multiple" name="subject[]">
                                    	<option value="Analytical Reasoning">Analytical Reasoning</option>
                                    	<option value="Computer">Computer</option>
                                    	<option value="English">English</option>
                                    	<option value="General Awareness">General Awareness</option>
                                    	<option value="Mathematics">Mathematics</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                        	<td>
                        		<p class="p-20 right">
                        			Educational Qualification 
                        				<span style="color: red;">*</span>
                        		</p></td>
                            <td>
                            	<div class="select-wrap">
                                    <select class="field-comments tb" name="qualification" style="width:330px;">
                                    	<option selected="selected" value="">--Select--</option>
										<option value="Graduate">Graduate</option>
										<option value="Graduate Engineer">Graduate Engineer</option>
										<option value="Post Graduate">Post Graduate</option>
										<option value="Undergraduate">Undergraduate</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                        	<td><p class="p-20 right">Specialization </p></td>
                            <td>
                            	<div class="textarea-wrap">
                                    <i class="icon-pencil"></i>
                                    <textarea class="field-comments tb" name="specialization" style="width: 500px;" placeholder="Write somthing about you......"></textarea>
                                </div>
                            </td>
                        </tr>
                        <tr>
                        	<td><p class="p-20 right">Total Experience <span style="color: red;">*</span></p></td>
                            <td>
                            	<div class="input-wrap">
                                    <i class="icon-pencil"></i>
                                    <input class="field-name tb" name="experience" type="text" placeholder="Total Experience">
                                </div>
                            </td>
                        </tr>
                        <tr>
                        	<td><p class="p-20 right">Select Resume(*.doc, *.docx)<span style="color: red;">*</span> </p></td>
                            <td>
                            	<div class="input-wrap">
                                    <i class="icon-pencil"></i>
                                    <input class="field-name tb" type="file" name="resume" placeholder="Name (required)">
                                </div>
                            </td>
                        </tr>
                        <tr>
                        	<td>&nbsp;</td><td>&nbsp;</td>
                        </tr>
                        <tr>
                        	<td>&nbsp;</td>
                            <td>
									<input class="btn-submit btn colored centered" type="submit" value="Submit Information">
                            </td>
                        </tr>
                    </table>
				</form>
				
			<hr class="dashed" style="margin-top: 0px;">
			</div>
		</div>
	</div>
	<!-- END CONTENT 
	============================================= -->
