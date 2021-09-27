<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Edit
              <small>Nomor Jaminan</small>
            </h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-dashboard"></i> Home</a></li>
              <li><a href="<?php echo base_url(); ?>admin/nomor_jaminan">Nomor Jaminan</a></li>
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
                <h3 class="box-title">Form Data Edit Nomor Jaminan</h3>
              </div>
              <div class="box-body">
                <!-- form start -->
                <?php echo form_open('admin/update_nomor_jaminan'); ?>
                <?php  
                foreach ($editdata as $data):
                ?>
                  <div class="form-group">
                  <label for="exampleInputEmail1">Nomor Jaminan Id</label>
                  <input type="number" class="" name="id" method="post" min="111" max="10000" step="1" value="<?php echo $data->nomor_jaminan_id; ?>" />
                  </div>
                  <div class="form-group">
                  <label for="exampleInputEmail1">Amprahan Id</label>
                  <input type="number" class="" name="amprahan_id" method="post" min="1001" max="10000" step="1" value="<?php echo $data->amprahan_id; ?>" />
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Pelaksanaan</label>
                      <input type="text" class="form-control" name="pelaksanaan" value="<?php echo $data->pelaksanaan; ?>" />
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Uang Muka</label>
                      <input type="text" class="form-control" name="uang" value="<?php echo $data->uang_muka; ?>" />
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Pemeliharaan</label>
                      <input type="text" class="form-control" name="pemeliharaan" value="<?php echo $data->pemeliharaan; ?>" />
                  </div>
                  <input type="hidden" name="id" value="<?php echo $data->nomor_jaminan_id ?>">
                  <a href="<?php echo base_url(); ?>admin/nomor_jaminan" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Batal</a>
                  <button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                <?php endforeach ?>
                <?php echo form_close(); ?>
              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </section><!-- /.content -->
        </div>