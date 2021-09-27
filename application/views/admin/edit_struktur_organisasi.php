<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Edit
              <small>Struktur Organisasi</small>
            </h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-dashboard"></i> Home</a></li>
              <li><a href="<?php echo base_url(); ?>admin/struktur_organisasi">Struktur Organisasi</a></li>
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
                <h3 class="box-title">Form Data Edit Struktur Organisasi</h3>
              </div>
              <div class="box-body">
                <!-- form start -->
                <?php echo form_open('admin/update_struktur_organisasi'); ?>
                <?php  
                foreach ($editdata as $data):
                ?>
                  <div class="form-group">
                  <label for="exampleInputEmail1">Struktur Organisasi Id</label>
                  <input type="number" class="" name="id" method="post" min="111" max="10000" step="1" value="<?php echo $data->struktur_organisasi_id; ?>" />
                  </div>
                  <div class="form-group">
                  <label for="exampleInputEmail1">Amprahan Id</label>
                  <input type="number" class="" name="amprahan_id" method="post" min="1001" max="10000" step="1" value="<?php echo $data->amprahan_id; ?>" />
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">KPA</label>
                      <input type="text" class="form-control" name="kpa" value="<?php echo $data->kpa; ?>" />
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">PPTK</label>
                      <input type="text" class="form-control" name="pptk" value="<?php echo $data->pptk; ?>" />
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Pembantu PPTK</label>
                      <input type="text" class="form-control" name="pembantu" value="<?php echo $data->pembantu_pptk; ?>" />
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Pengawas</label>
                      <input type="text" class="form-control" name="pengawas" value="<?php echo $data->pengawas; ?>" />
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">No.Sk</label>
                      <input type="text" class="form-control" name="no" value="<?php echo $data->no_sk; ?>" />
                  </div>
                  <input type="hidden" name="id" value="<?php echo $data->struktur_organisasi_id ?>">
                  <a href="<?php echo base_url(); ?>admin/struktur_organisasi" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Batal</a>
                  <button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                <?php endforeach ?>
                <?php echo form_close(); ?>
              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </section><!-- /.content -->
        </div>