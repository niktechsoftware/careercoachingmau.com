<!-- TITLE BAR
	============================================= -->
<?php 
	$this->db->where("id",$this->uri->segment(3));
	$val = $this->db->get("courses")->row();
?>
	<div class="b-titlebar">
		<div class="layout">
			<!-- Bread Crumbs -->
			<ul class="crumbs">
				<li>You are here:</li>
				<li><a href="#">Courses</a></li>
				<li><a href="#"><?php echo $val->course_name;?></a></li>
			</ul>
			<!-- Title -->
				<h1>About <?php echo $val->course_name;?></h1>
		</div>
	</div>
	<!-- END TITLE BAR
	============================================= -->

	<!-- CONTENT 
	============================================= -->
	<div class="content">
		<div class="layout">
			<div class="row">
			  <div class="row-item col-3_4">
					<?php echo $val->detail;?>
				</div>
				<!-- Sidebar -->
				<div class="row-item col-1_4 sidebar">
					<ul>
						<?php foreach($this->db->get("courses")->result() as $row):?>
							<li>
								<a href="<?php echo base_url()?>welcome/courses/<?php echo $row->id;?>"><?php echo $row->course_name;?></a>
							</li>
						<?php endforeach;?>
					</ul>
					<!-- End Twitter Widget -->
				</div>
				<!-- End Sidebar -->
			</div>
		</div>
	</div>
	<!-- END CONTENT 
	============================================= -->
