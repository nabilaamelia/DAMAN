<div class="p-3  bg-dark text-white" style="height: 70px;"></div>
<div class="testimonial ">
	<div class="container ">
		<div class="row text-center">
			<center class="mb-5 mt-3"><h10>DATA PESERTA PKL TELKOM SIDOARJO</h10></center>

			<!--search -->
			<div class="row mb-4">
				<div class="col-md-8"></div>
				<div class="col-md-4">
				<form action="<?= base_url('peserta_pkl/index'); ?>" method="post">
					<div class="input-group mb 3">
					<input type="text" class="form-control" placeholder="Search" name="keyword" autocomplete="off">
					<div class="input-group-append">
						<button class="btn1 btn-primary" type="submit" name="">Cari</button>
					</div>
					</div>
				</form>
				</div>
			</div>

			<?php foreach ($datapkl as $pkl) : ?>

				<div class="card mb-4" style="width: 12rem; height: 25rem; margin-left: 2rem;" >
					<?php if($pkl->foto == "") : ?>
						<img src="https://icons-for-free.com/iconfiles/png/512/profile+profile+page+user+icon-1320186864367220794.png" class="card-img-top mt-2" alt="..." width="120" height="150">
					<?php else : ?>
						<img src="<?php echo base_url('assets/images/profile_anak_pkl/'.$pkl->foto) ?>" class="card-img-top mt-2" alt="..." width="120" height="150">
					<?php endif; ?>
					
					<div class="card-body">
						<h5 class="card-title ">
							<small><?php echo $pkl->nama ?></small><br>
						</h5>
						<p class="">
							<center><?= $pkl->asal_instansi ?></center>
							<br>
							<?php echo anchor(base_url('Peserta_pkl/detail/'.$pkl->id_peserta), '<div class="btn bg-dark">Detail</div>') ?>
						</p>
					</div>
				</div> 
			<?php endforeach; ?>
		</div> <br><br>     
	</div>

	<div class="row">
            <div class="col">
            <?= $this->pagination->create_links(); ?>
            </div>
        </div>

</div>
