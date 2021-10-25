<!-- ***** Chefs Area Starts ***** -->
<section class="section" id="chefs">
	<div class="container ">

		<?php foreach ($pengurus as $prs) : ?>

			<div class="row">
				<div class="col-lg-12 offset-lg-12 text-center">
					<div class="section-heading">
						<h2 class="mt-2 mb-5">DETAIL</h2>
					</div>
				</div>
			</div>

			<div class="container mt-2 mb-5">
				<div class="row" >
					<div class="col-lg-4">
						<?php if ($prs->foto == "") : ?>
							<img src="https://icons-for-free.com/iconfiles/png/512/profile+profile+page+user+icon-1320186864367220794.png"  alt="..." width="300" height="300">
						<?php else : ?>
							<img src="<?php echo base_url('assets/images/profile_pengurus/'.$prs->foto) ?>"  alt="..." width="300" height="300">
						<?php endif; ?>
					</div>
					<div class="col-lg-8">
						<table class="table">
							<tr>
								<td><strong>Nama</strong></td>
								<td><?php echo $prs->nama ?></td>
							</tr>

							<tr>
								<td><strong>No Hp</strong></td>
								<td><?php echo $prs->no_hp ?></td>
							</tr>

							<tr>
								<td><strong>Jabatan</strong></td>
								<td><?php echo $prs->jabatan ?></td>
							</tr>

							<tr>
								<td><strong>alamat</strong></td>
								<td><?php echo $prs->alamat?></td>
							</tr>
							<tr>
								<td><strong>Motto</strong></td>
								<td><?php echo $prs->motto?></td>
							</tr>

							
						</table>
					</div>
				</div>




			</div>




		<?php endforeach ?>
	</div>
</section>
<!-- ***** Chefs Area Ends ***** -->
