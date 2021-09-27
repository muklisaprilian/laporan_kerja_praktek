<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Tambah
              <small>Materi Ujian</small>
            </h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-dashboard"></i> Home</a></li>
              <li><a href="<?php echo base_url(); ?>admin/agenda_surat_masuk">Materi Ujian</a></li>
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
                <h3 class="box-title">Form Data Tambah Materi Ujian</h3>
              </div>
              <div class="box-body">
                <!-- form start -->
                <?php echo form_open('admin/insert_agenda_surat_masuk'); ?>
              <div class="form-group">
                    <label for="exampleInputEmail1">Id Materi Ujian</label>
                    <input type="number" class=""  method="post" name="id" min="101" max="10000" step="1" placeholder="101"/>
              </div>
              <div class="form-group">
                    <label for="exampleInputEmail1">Mata Uji</label>
                    <textarea class="form-control" name="uraian" placeholder="Mata Uji"></textarea>
              </div>
              <div class="form-group">
                    <label for="exampleInputEmail1">Point</label>
                    <select name="kategori" class="form-control">
                      <option value="0" selected="">- Pilih Kategori -</option>
                      <option value="2">Hiburan</option>
                      <option value="1">Olahraga</option>
                      <option value="3">Politik</option>
                      <option value="4">Teknologi</option>
                      </select>
                </div>
              <div class="form-group">
                    <label for="exampleInputEmail1">Jumlah Soal</label>
                      <input type="date" class="form-control" name="tgl" id="tgl_masuk" data-date-format="yyyy-mm-dd" placeholder="Tanggal Masuk"/>
              </div>
              <div class="form-group">
                    <label for="exampleInputEmail1">Keterangan</label>
                    <input type="text" class="form-control" name="ket" placeholder="Keterangan"/>
              </div>
                  <a href="<?php echo base_url(); ?>admin/agenda_surat_masuk" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Batal</a>
                  <button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                <?php echo form_close(); ?>
                
              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </section><!-- /.content -->
        </div>