<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           Laporan Nomor Jaminan
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="index"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Nomor Jaminan</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          
            <div class="row">           
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">
                    <a href="<?php echo base_url(); ?>l_n_j/printpdf_n_j" class="btn btn-sm btn-primary btn-flat"><i class="fa fa-edit"> 
                    </i> Print</a>
                  </h3>
                  <div class="box-tools">
                    <!--
                    <div class="input-group" style="width: 150px;">
                      <input type="text" name="table_search" class="form-control input-sm pull-right" placeholder="Search">
                      <div class="input-group-btn">
                        <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                      </div>
                    </div>
                    -->
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                
                  <table id="example1" class="table table-bordered table-hover dataTable">
                    <thead>
                      <tr>
                        <th>Nomor Jaminan Id</th>
                        <th>Amprahan Id</th>
                        <th>Pelaksanaan</th>
                        <th>Uang Muka</th>
                        <th>Pemeliharaan</th>
                    </thead>
                    <tbody>
                        <?php  
                      
                        foreach ($printdata as $data):
                        ?>
                       <tr>
                        <td><?php echo $data->nomor_jaminan_id; ?></td>
                        <td value="<?php echo $data->amprahan_id; ?>"></td>
                        <td value="<?php echo $data->pelaksanaan; ?>"></td> 
                        <td value="<?php echo $data->uang_muka; ?>"></td> 
                        <td value="<?php echo $data->pemeliharaan; ?>"></td>             
                      </tr>
                      <?php endforeach ?>
                    </tbody>
                  </table>
                  
                </div><!-- /.box-body -->
                </div>
             </div>
          </div>
        

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
