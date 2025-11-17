<?php panggil('admin/includes/meta.php') ?>
<?php panggil('admin/includes/sidebar.php') ?>

<!-- Main Content -->
<div class="main-content">
	<section class="section">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h4>Simple Summernote</h4>
					</div>
					<div class="card-body">
						<form action="<?php echo base_url("admin/berita/tambahBerita") ?>" method="post" enctype="multipart/form-data">
							<div class="form-group row mb-4">
								<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Judul Berita</label>
								<div class="col-sm-12 col-md-7">
									<input type="text" name="judul_berita" class="form-control">
								</div>
							</div>
							<div class="form-group row mb-4">
								<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tanggal Berita</label>
								<div class="col-sm-12 col-md-7">
									<input type="date" name="tanggal_berita" class="form-control">
								</div>
							</div>
							<div class="form-group row mb-4">
								<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status</label>
								<div class="col-sm-12 col-md-7">
									<select name="status_berita" class="form-control selectric">
										<option>Draft</option>
										<option>Published</option>
									</select>
								</div>
							</div>
							<div class="form-group row mb-4">
								<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Gambar Berita</label>
								<div class="col-sm-12 col-md-7">
									<input type="file" name="file_nama" class="form-control">
								</div>
							</div>
							<div class="form-group row mb-4">
								<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Content</label>
								<div class="col-sm-12 col-md-7">
									<textarea class="summernote-simple" name="isi_berita"></textarea>
								</div>
							</div>




							<div class="form-group row mb-4">
								<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
								<div class="col-sm-12 col-md-7">
									<button class="btn btn-primary">Publish</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>

<?php panggil('admin/includes/footer.php') ?>
