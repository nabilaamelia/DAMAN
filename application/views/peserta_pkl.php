<div class="p-3 mb-2 bg-dark text-white" style="height: 70px;"></div>
<div class="container mt-3">
    <center class="mb-5"><h2>DATA PESERTA PKL TELKOM SIDOARJO</h2></center>
		<div class="row text-center">
			<?php foreach ($datapkl as $pkl) : ?>

				<div class="card mb-4" style="width: 10rem; height: 20rem; margin-left: 2rem;" >
					<img src="<?php echo base_url('assets/images/profile_anak_pkl/'.$pkl->foto) ?>" class="card-img-top" alt="..." width="120" height="150">
					<div class="card-body">
						<h5 class="card-title mb-1">
							<small><?php echo $pkl->nama ?></small><br>
						</h5>
						<p class="mt-4">
							<a class="btn btn-warning bg-dark"href="">Detail</a>
                        </p>
					</div>
				</div> 
			<?php endforeach; ?>
		</div>       
	</div>