<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Tambah
              <small>Struktur Organisasi</small>
            </h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-dashboard"></i> Home</a></li>
              <li><a href="<?php echo base_url(); ?>admin/struktur_organisasi">Struktur Organisasi</a></li>
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
                <h3 class="box-title">Form Data Tambah Struktur Organisasi</h3>
              </div>
              <div class="box-body">
                <!-- form start -->
                <?php echo form_open('admin/insert_struktur_organisasi'); ?>
                <div class="form-group">
                    <label for="exampleInputEmail1">Struktur Organisasi Id</label>
                    <input type="number" class=""  method="post" name="id" min="111" max="10000" step="1" />
                </div>
                 <div class="form-group">
                    <label for="exampleInputEmail1">Amprahan Id</label>
                    <input type="number" class=""  method="post" name="amprahan_id" min="1001" max="10000" step="1" />
                </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">KPA</label>
                      <input type="text" class="form-control" name="kpa" placeholder="KPA"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">PPTK</label>
                      <input type="text" class="form-control" name="pptk" placeholder="PPTK"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Pembantu PPTK</label>
                      <input type="text" class="form-control" name="pembantu" placeholder="Pembantu PPTK"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Pengawas</label>
                      <input type="text" class="form-control" name="pengawas" placeholder="Pengawas"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">No.Sk</label>
                      <input type="text" class="form-control" name="no" placeholder="No.Sk"/>
                  </div>
                  <a href="<?php echo base_url(); ?>admin/struktur_organisasi" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Batal</a>
                  <button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                <?php echo form_close(); ?>
                
              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </section><!-- /.content -->
        </div>