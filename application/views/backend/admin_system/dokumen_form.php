<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Form Dokumen</h1>
	</div>
	<!-- /.col-lg-12 -->
</div>

<!-- START DEFAULT DATATABLE -->
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">Form Input Dokumen</h3>
	</div>
	<form class="form-horizontal" method="POST" id="dokumen_form" action="<?php if ($data != null) echo base_url('admin_system/dokumen_update');
																			else echo base_url('admin_system/dokumen_add'); ?>">
		<input type="hidden" name="id_dokumen" value="<?php if ($data != null) echo $data->id_dokumen; ?>">
		<div class="panel-body">
			<div class="alert alert-success hidden"><strong>Berhasil! </strong><span></span></div>
			<div class="alert alert-warning hidden"><strong>Memproses! </strong><span>Mohon tunggu, system sedang bekerja.</span></div>
			<div class="alert alert-danger hidden"><strong>Gagal! </strong><span></span></div>

			<!----------------------------------------------------------------------------------------------------------->
			<div class="form-group">
				<label class="col-md-4 col-xs-12 control-label">ID</label>
				<div class="col-md-2 col-xs-12">
					<input type="text" class="form-control" value="<?php if ($data != null) echo $data->id_dokumen;
																	else echo 'AUTO' ?>" disabled>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-4 col-xs-12 control-label">Nama Dokumen</label>
				<div class="col-md-2 col-xs-12">
					<input type="text" name="name" class="form-control" value="<?php if ($data != null) echo $data->name; ?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-4 col-xs-12 control-label">Nama Perusahaan</label>
				<div class="col-md-5 col-xs-12">
					<input type="text" name="nama_pt" class="form-control" value="<?php if ($data != null) echo $data->nama_pt; ?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-4 col-xs-12 control-label">Kode Document</label>
				<div class="col-md-5 col-xs-12">
					<input type="text" name="kode" class="form-control" value="<?php if ($data != null) echo $data->kode; ?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-4 col-xs-12 control-label">Deskripsi</label>
				<div class="col-md-5 col-xs-12">
					<input type="text" name="desc" class="form-control" value="<?php if ($data != null) echo $data->desc; ?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-4 col-xs-12 control-label">Stock</label>
				<div class="col-md-2 col-xs-12">
					<input type="number" name="stock" class="form-control" value="<?php if ($data != null) echo $data->stock; ?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-4 col-xs-12 control-label">Penampilan</label>
				<div class="col-md-6 col-xs-12">
					<div class="radio">
						<label>
							<input type="radio" value="tampilkan" name="status" <?php if ($data) {
																					if ($data->status == 'tampilkan') echo 'checked';
																				} else echo 'checked'; ?>>
							Tampilkan
						</label>
						<label>
							<input type="radio" value="sembunyikan" name="status" <?php if ($data) {
																						if ($data->status == 'sembunyikan') echo 'checked';
																					} ?>>
							Sembunyikan
						</label>
					</div>
				</div>
			</div>

		</div>
		<div class="panel-footer text-right">
			<a href="<?php echo base_url('admin_system/dokumen'); ?>" class="pull-left btn btn-info"><i class="fa fa-arrow-left"></i> Kembali</a>
			<button class="btn btn-default" type="reset">Reset</button>
			<button class="btn btn-primary" type="submit">Simpan</button>
		</div>
	</form>
</div>