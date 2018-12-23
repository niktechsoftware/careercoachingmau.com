<!-- CONTENT 
	============================================= -->
	<div class="content shortcodes">
		<div class="layout">
			
			<h3 class="lined margin-20">OUR Career Coaching CLASSES TIMING</h3>
			
			<div class="row m-tariff-row">
				
				<div class="row-item col-1_4">
					
					<div class="b-tariff m-popular">
						<div class="popular-title m-turquoise">Branch</div>
						<div class="tariff-head">
							<div class="tariff-title">daily</div>

							<div class="tariff-price">
								<span class="tariff-cy">Wednesday </span>
								<span class="tariff-cost" style="font-size: 20px; font-weight: bolder;">To</span>
								<span class="tariff-period"> Monday</span>
							</div>

							<p class="tariff-description">Our regular batches are running Wednesday to Monday.</p>
						</div>
						<ul class="tariff-meta">
							<li><mark class="green strong">OUR BATCH TIMING</mark></li>
							<?php $abc = $this->db->get("batch_time");?>
							<?php foreach($abc->result() as $row){?>
							<li><i class="icon-time" style="color: #73ca3f;"></i> <?php echo $row->batch_time;?></li>
							<?php }?>
						</ul>
					</div>

				</div>
				<div class="row-item col-1_4">
					
					<div class="b-tariff m-popular">
						<div class="popular-title m-turquoise">Branch</div>
						<div class="tariff-head">
							<div class="tariff-title">daily</div>

							<div class="tariff-price">
								<span class="tariff-cy">Wednesday </span>
								<span class="tariff-cost" style="font-size: 20px; font-weight: bolder;">To</span>
								<span class="tariff-period"> Monday</span>
							</div>

							<p class="tariff-description">Our regular batches are running Wednesday to Monday.</p>
						</div>
						<ul class="tariff-meta">
							<li><mark class="green strong">OUR BATCH TIMING</mark></li>
							<?php $abc = $this->db->get("batch_time");?>
							<?php foreach($abc->result() as $row){?>
							<li><i class="icon-time" style="color: #73ca3f;"></i> <?php echo $row->batch_time;?></li>
							<?php }?>
						</ul>
					</div>

				</div>
				<div class="row-item col-1_4">
					
					<div class="b-tariff m-popular">
						<div class="popular-title m-turquoise">Special Bateches</div>
						<div class="tariff-head">
							<div class="tariff-title">Depends</div>

							<div class="tariff-price">
								<span class="tariff-cy">After</span>
								<span class="tariff-cost">20</span>
								<span class="tariff-period">Days</span>
							</div>

							<p class="tariff-description">of exam result decleartion mock interview porgram and class will start.</p>
						</div>
						<ul class="tariff-meta">
							<li><mark class="green strong">OUR BATCH TIMING</mark></li>
							<?php $abc = $this->db->get("batch_special");?>
							<?php foreach($abc->result() as $row){?>
							<li><i class="icon-time" style="color: #73ca3f;"></i> <?php echo $row->batch_time;?></li>
							<?php }?>
						</ul>
					</div>

				</div>
				<div class="row-item col-1_4">
					<div class="b-tariff m-popular">
						<div class="popular-title"><i class="icon-thumbs-up"></i>New Batches</div>
						<div class="tariff-head">
							<div class="tariff-title">Starts</div>

							<div class="tariff-price">
								<span class="tariff-cy">Every</span>
								<span class="tariff-cost">F</span>
								<span class="tariff-period">riday</span>
							</div>

							<p class="tariff-description">New bteches starts on every saturday.</p>
						</div>
						<ul class="tariff-meta">
							<li><mark class="green strong">OUR BATCH TIMING</mark></li>
							<?php $abc = $this->db->get("batch_special");?>
							<?php foreach($abc->result() as $row){?>
							<li><i class="icon-time" style="color: #73ca3f;"></i> <?php echo $row->batch_time;?></li>
							<?php }?>
						</ul>
					</div>						

				</div>
			</div>
			
			<div class="gap" style="height: 30px;">
			</div>
			</div>

		</div>
	</div>
	<!-- END CONTENT 
	============================================= -->
