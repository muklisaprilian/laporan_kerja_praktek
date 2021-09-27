<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
         <div class="navbar navbar-inner block-header">
          <div class="muted pull-right"><i class="icon-time"></i>&nbsp;<?php include('time.php'); ?></div>
        </div>
        </section>
        <!-- Main content -->
        <section class="content">

          <!-- Small boxes (Stat box) -->
          <div class="row">

            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3><?php echo $agenda_surat_masuk ?></h3>
                  <p>Agenda Surat Masuk</p>
                </div>
                <div class="icon">
                  <i class="fa fa-envelope"></i>
                </div>
                <a href="<?php echo base_url(); ?>admin/agenda_surat_masuk" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
          <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3><?php echo $amprahan ?></h3>
                  <p>Amprahan</p>
                </div>
                <div class="icon">
                  <i class="fa fa-inbox"></i>
                </div>
                <a href="<?php echo base_url(); ?>admin/amprahan" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3><?php echo $nomor_jaminan ?></h3>
                  <p>Nomor Jaminan</p>
                </div>
                <div class="icon">
                  <i class="fa fa-plus"></i>
                </div>
                <a href="<?php echo base_url(); ?>admin/nomor_jaminan" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-orange">
                <div class="inner">
                  <h3><?php echo $struktur_organisasi ?></h3>
                  <p>Struktur Organisasi</p>
                </div>
                <div class="icon">
                  <i class="fa fa-tasks"></i>
                </div>
                <a href="<?php echo base_url(); ?>admin/struktur_organisasi" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-purple">
                <div class="inner">
                  <h3><?php echo $amandemen_i ?></h3>
                  <p>Amandemen I</p>
                </div>
                <div class="icon">
                  <i class="fa fa-folder-open"></i>
                </div>
                <a href="<?php echo base_url(); ?>admin/amandemen_i" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3><?php echo $amandemen_ii ?></h3>
                  <p>Amandemen II</p>
                </div>
                <div class="icon">
                  <i class="fa fa-folder-open"></i>
                </div>
                <a href="<?php echo base_url(); ?>admin/amandemen_ii" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-blue">
                <div class="inner">
                  <h3><?php echo $pho ?></h3>
                  <p>PHO</p>
                </div>
                <div class="icon">
                  <i class="fa fa-folder-open"></i>
                </div>
                <a href="<?php echo base_url(); ?>admin/pho" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
