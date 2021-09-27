<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Edit
              <small>PHO</small>
            </h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-dashboard"></i> Home</a></li>
              <li><a href="<?php echo base_url(); ?>admin/pho">PHO</a></li>
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
                <h3 class="box-title">Form Data Edit PHO</h3>
              </div>
              <div class="box-body">
                <!-- form start -->
                <?php echo form_open('admin/update_pho'); ?>
                <?php  
                foreach ($editdata as $data):
                ?>
                  <div class="form-group">
                  <label for="exampleInputEmail1">PHO Id</label>
                  <input type="number" class="" name="id" method="post" min="111" max="10000" step="1" value="<?php echo $data->pho_id; ?>" />
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
                    <label for="exampleInputEmail1">Tanggal</label>
                      <input type="date" class="form-control" name="tanggal" id="tanggal" data-date-format="yyyy-mm-dd" value="<?php echo $data->tanggal ?>"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tim PHO</label>
                      <input type="text" class="form-control" name="tim" value="<?php echo $data->tim_pho ?>"/>
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
                  <input type="hidden" name="id" value="<?php echo $data->pho_id ?>">
                  <a href="<?php echo base_url(); ?>admin/pho" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Batal</a>
                  <button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                <?php endforeach ?>
                <?php echo form_close(); ?>
              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </section><!-- /.content -->
        </div>