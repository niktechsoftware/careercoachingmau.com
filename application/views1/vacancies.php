	<!-- CONTENT 
	============================================= -->
	<div class="content shortcodes">
		<div class="layout">
			<?php $count = $this->db->count_all("vacancies");?>
			<?php if($count <= 0):?>
				<div class="row">
					<img alt="Comming Soon" src="<?php echo base_url()?>assets/img/elements/img-1.png"/>
				</div>
			<?php else:?>
			<?php $val = $this->db->get("vacancies")->result();?>
				<?php foreach($val as $row):?>
					<div class="row">
						<div class="row-item col-1">
							<h3 class="lined margin-20"><?php echo $row->title;?></h3>
							<p>
								<?php echo $row->msg;?>
							</p>
							<div class="gap" style="height: 20px;"></div>
						</div>
					</div>
				<?php endforeach;?>	
			<?php endif;?>		
		</div>
	</div>
	<!-- END CONTENT 
	============================================= -->
