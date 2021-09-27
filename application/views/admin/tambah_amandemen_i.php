<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Tambah
              <small>Amandemen I</small>
            </h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-dashboard"></i> Home</a></li>
              <li><a href="<?php echo base_url(); ?>admin/amandemen_i">Amandemen I</a></li>
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
                <h3 class="box-title">Form Data Tambah Amandemen I</h3>
              </div>
              <div class="box-body">
                <!-- form start -->
                <?php echo form_open('admin/insert_amandemen_i'); ?>
                <div class="form-group">
                    <label for="exampleInputEmail1">Amandemen I Id</label>
                    <input type="number" class=""  method="post" name="id" min="111" max="10000" step="1" />
                </div>
                 <div class="form-group">
                    <label for="exampleInputEmail1">Amprahan Id</label>
                    <input type="number" class=""  method="post" name="amprahan_id" min="1001" max="10000" step="1" />
                </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nomor</label>
                      <input type="text" class="form-control" name="nomor" placeholder="Nomor"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tgl</label>
                      <input type="date" class="form-control" name="tgl" id="tgl_i" data-date-format="yyyy-mm-dd" placeholder="Tgl"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tim MC</label>
                      <input type="text" class="form-control" name="tim" placeholder="Tim MC"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Ketua</label>
                      <input type="text" class="form-control" name="ketua" placeholder="Ketua"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Sekretaris</label>
                    <input type="text" class="form-control" name="sekretaris" placeholder="Sekretaris"/>
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Anggota</label>
                    <input type="text" class="form-control" name="anggota" placeholder="Anggota"/>
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">No.Sk</label>
                    <input type="text" class="form-control" name="no" placeholder="No.Sk"/>
                  </div>
                  <a href="<?php echo base_url(); ?>admin/amandemen_i" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Batal</a>
                  <button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                <?php echo form_close(); ?>
                
              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </section><!-- /.content -->
        </div>