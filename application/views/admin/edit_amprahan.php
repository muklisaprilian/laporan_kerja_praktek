<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Edit
              <small>Amprahan</small>
            </h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-dashboard"></i> Home</a></li>
              <li><a href="<?php echo base_url(); ?>admin/amprahan">Amprahan</a></li>
              <li class="active">Edit</li>
              <!--
              <li><a href="#">Layout</a></li>
              <li class="active">Top Navigation</li>
              -->
            </ol>
          </section>

          <!-- Main content -->
          <section class="content">
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Form Data Edit Amprahan</h3>
              </div>
              <div class="box-body">
                <!-- form start -->
                <?php echo form_open('admin/update_amprahan'); ?>
                <?php  
                foreach ($editdata as $data):
                ?>
                  <div class="form-group">
                  <label for="exampleInputEmail1">Amprahan Id</label>
                  <input type="number" class="" name="id" method="post" min="1001" max="10000" step="1" value="<?php echo $data->amprahan_id; ?>" />
                  </div>
                  <div class="form-group">
                  <label for="exampleInputEmail1">Agenda Surat Masuk Id</label>
                  <input type="number" class="" name="agenda_surat_masuk_id" method="post" min="101" max="10000" step="1" value="<?php echo $data->agenda_surat_masuk_id; ?>" />
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Paket</label>
                      <input type="text" class="form-control" name="nama" value="<?php echo $data->nama_paket; ?>" />
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nilai Kontrak</label>
                      <input type="text" class="form-control" name="nilai" value="<?php echo $data->nilai_kontrak; ?>" />
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nomor Kontrak</label>
                      <input type="text" class="form-control" name="nomor" value="<?php echo $data->nomor_kontrak; ?>" />
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Perusahaan</label>
                      <input type="text" class="form-control" name="name" value="<?php echo $data->nama_perusahaan; ?>" />
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Direktur</label>
                      <input type="text" class="form-control" name="direktur" value="<?php echo $data->direktur; ?>" />
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">No.Npwp</label>
                      <input type="text" class="form-control" name="no" value="<?php echo $data->no_npwp; ?>" />
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kop Cirut</label>
                      <input type="text" class="form-control" name="kop" value="<?php echo $data->kop_cirut; ?>" />
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Galian C</label>
                      <input type="text" class="form-control" name="galian" value="<?php echo $data->galian_c; ?>" />
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jamsostek</label>
                      <input type="text" class="form-control" name="jamsostek" value="<?php echo $data->jamsostek; ?>" />
                  </div>
                  <input type="hidden" name="id" value="<?php echo $data->amprahan_id ?>">
                  <a href="<?php echo base_url(); ?>admin/amprahan" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Batal</a>
                  <button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                <?php endforeach ?>
                <?php echo form_close(); ?>
              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </section><!-- /.content -->
        </div>