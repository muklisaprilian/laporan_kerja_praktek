<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Edit
              <small>Agenda Surat Masuk</small>
            </h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-dashboard"></i> Home</a></li>
              <li><a href="<?php echo base_url(); ?>admin/agenda_surat_masuk">Agenda Surat Masuk</a></li>
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
                <h3 class="box-title">Form Data Edit Agenda Surat Masuk</h3>
              </div>
              <div class="box-body">
                <!-- form start -->
                <?php echo form_open('admin/update_agenda_surat_masuk'); ?>
                <?php  
                foreach ($editdata as $data):
                ?>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Agenda Surat Masuk Id</label>
                      <input type="number" class="" name="id" method="post" min="101" max="10000" step="1" value="<?php echo $data->agenda_surat_masuk_id; ?>" />
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Uraian</label>
                      <input type="text" class="form-control" name="uraian" value="<?php echo $data->uraian; ?>" />
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Asal Surat</label>
                      <input type="text" class="form-control" name="asal" value="<?php echo $data->asal_surat; ?>"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Masuk</label>
                      <input type="date" class="form-control" name="tgl" id="tgl_masuk" data-date-format="yyyy-mm-dd" value="<?php echo $data->tgl_masuk; ?>"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Keterangan</label>
                      <input type="text" class="form-control" name="ket" value="<?php echo $data->ket; ?>"/>
                  </div>
                  <input type="hidden" name="id" value="<?php echo $data->agenda_surat_masuk_id ?>">
                  <a href="<?php echo base_url(); ?>admin/agenda_surat_masuk" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Batal</a>
                  <button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                <?php endforeach ?>
                <?php echo form_close(); ?>
              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </section><!-- /.content -->
        </div>