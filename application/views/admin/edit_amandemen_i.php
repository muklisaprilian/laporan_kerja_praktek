<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Edit
              <small>Amandemen I</small>
            </h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-dashboard"></i> Home</a></li>
              <li><a href="<?php echo base_url(); ?>admin/amandemen_i">Amandemen I</a></li>
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
                <h3 class="box-title">Form Data Edit Amandemen I</h3>
              </div>
              <div class="box-body">
                <!-- form start -->
                <?php echo form_open('admin/update_amandemen_i'); ?>
                <?php  
                foreach ($editdata as $data):
                ?>
                  <div class="form-group">
                  <label for="exampleInputEmail1">Amandemen I Id</label>
                  <input type="number" class="" name="id" method="post" min="111" max="10000" step="1" value="<?php echo $data->amandemen_i_id; ?>" />
                  </div>
                  <div class="form-group">
                  <label for="exampleInputEmail1">Amprahan Id</label>
                  <input type="number" class="" name="amprahan_id" method="post" min="1001" max="10000" step="1" value="<?php echo $data->amprahan_id; ?>" />
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nomor</label>
                      <input type="text" class="form-control" name="nomor" value="<?php echo $data->nomor ?>" />
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tgl</label>
                      <input type="date" class="form-control" name="tgl" id="tgl_i" data-date-format="yyyy-mm-dd" value="<?php echo $data->tgl_i ?>"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tim MC</label>
                      <input type="text" class="form-control" name="tim" value="<?php echo $data->tim_mc ?>"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Ketua</label>
                      <input type="text" class="form-control" name="ketua" value="<?php echo $data->ketua ?>"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Sekretaris</label>
                    <input type="text" class="form-control" name="sekretaris" value="<?php echo $data->sekretaris ?>"/>
                  </div>
                     <div class="form-group">
                    <label for="exampleInputEmail1">Anggota</label>
                    <input type="text" class="form-control" name="anggota" value="<?php echo $data->anggota ?>"/>
                  </div>
                     <div class="form-group">
                    <label for="exampleInputEmail1">No.Sk</label>
                    <input type="text" class="form-control" name="no" value="<?php echo $data->no_sk ?>"/>
                  </div>
                  <input type="hidden" name="id" value="<?php echo $data->amandemen_i_id ?>">
                  <a href="<?php echo base_url(); ?>admin/amandemen_i" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Batal</a>
                  <button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                <?php endforeach ?>
                <?php echo form_close(); ?>
              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </section><!-- /.content -->
        </div>