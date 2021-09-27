<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>Tambah
              <small>Amprahan</small>
            </h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-dashboard"></i> Home</a></li>
              <li><a href="<?php echo base_url(); ?>admin/amprahan">Amprahan</a></li>
              <li class="active">Tambah</li>
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
                <h3 class="box-title">Form Data Tambah Amprahan</h3>
              </div>
              <div class="box-body">
                <!-- form start -->
                <?php echo form_open('admin/insert_amprahan'); ?>
                <div class="form-group">
                    <label for="exampleInputEmail1">Amprahan Id</label>
                    <input type="number" class=""  method="post" name="id" min="1001" max="10000" step="1" />
                </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Agenda Surat Masuk Id</label>
                    <input type="number" class=""  method="post" name="agenda_surat_masuk_id" min="101" max="10000" step="1" />
                </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Paket</label>
                      <input type="text" class="form-control" name="nama" placeholder="Nama Paket"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nilai Kontrak</label>
                      <input type="text" class="form-control" name="nilai" placeholder="Nilai Kontrak"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nomor Kontrak</label>
                      <input type="text" class="form-control" name="nomor" placeholder="Nomor Kontrak"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Perusahaan</label>
                      <input type="text" class="form-control" name="name" placeholder="Nama Perusahaan"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Direktur</label>
                      <input type="text" class="form-control" name="direktur" placeholder="Direktur"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">No.Npwp</label>
                      <input type="text" class="form-control" name="no" placeholder="No.Npwp"/>
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Kop Cirut</label>
                      <input type="text" class="form-control" name="kop" placeholder="Kop Cirut"/>
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Galian C</label>
                      <input type="text" class="form-control" name="galian" placeholder="Galian C"/>
                  </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Jamsostek</label>
                      <input type="text" class="form-control" name="jamsostek" placeholder="Jamsostek"/>
                  </div>
                  <a href="<?php echo base_url(); ?>admin/amprahan" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Batal</a>
                  <button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                <?php echo form_close(); ?>
                
              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </section><!-- /.content -->
        </div>