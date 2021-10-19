<div class="p-3 mb-2 bg-dark text-white" style="height: 70px;"></div>
<div class= "mt-4 mb-4">
	<!-- <a href=""> -->
		<div class="container">
			<?php foreach($presensi as $pres): ?>
				<div class="card mt-2 md-2" >            
					<div class="row no-gutters col-md-12">
						<div class="col-md-4">

							<center>
								<img src="https://assets.pikiran-rakyat.com/crop/0x0:0x0/x/photo/2021/09/22/3820270727.png" width="10" height="150" class="card-img" alt="...">
							</center>
						</div>
						<div class="col-md-8">
							<div class="card-body mt-5">
								<a href="<?php echo $pres->absen ?>"><h5 class="text-dark"><?php echo $pres->judul ?></h5></a>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
		<!-- </a> -->

	</div>