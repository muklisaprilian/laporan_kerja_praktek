<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Tambah
              <small>Nomor Jaminan</small>
            </h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-dashboard"></i> Home</a></li>
              <li><a href="<?php echo base_url(); ?>admin/nomor_jaminan">Nomor Jaminan</a></li>
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
                <h3 class="box-title">Form Data Tambah Nomor Jaminan</h3>
              </div>
              <div class="box-body">
                <!-- form start -->
                <?php echo form_open('admin/insert_nomor_jaminan'); ?>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nomor Jaminan Id</label>
                    <input type="number" class=""  method="post" name="id" min="111" max="10000" step="1" />
                </div>
                 <div class="form-group">
                    <label for="exampleInputEmail1">Amprahan Id</label>
                    <input type="number" class=""  method="post" name="amprahan_id" min="1001" max="10000" step="1" />
                </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Pelaksanaan</label>
                      <input type="text" class="form-control" name="pelaksanaan" placeholder="Pelaksanaan"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Uang Muka</label>
                      <input type="text" class="form-control" name="uang" placeholder="Uang Muka"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Pemeliharaan</label>
                      <input type="text" class="form-control" name="pemeliharaan" placeholder="Pemeliharaan"/>
                  </div>
                  <a href="<?php echo base_url(); ?>admin/nomor_jaminan" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Batal</a>
                  <button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                <?php echo form_close(); ?>
                
              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </section><!-- /.content -->
        </div>