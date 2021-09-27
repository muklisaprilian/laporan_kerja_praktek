<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           Laporan Amandemen I
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="index"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Amandemen I</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          
            <div class="row">           
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">
                    <a href="<?php echo base_url(); ?>l_a_i/printpdf_a_i" class="btn btn-sm btn-primary btn-flat"><i class="fa fa-edit"> 
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
                        <th>Amandemen I Id</th>
                        <th>Amprahan Id</th>
                        <th>Nomor</th>
                        <th>Tgl</th>
                        <th>Tim MC</th>
                        <th>Ketua</th>
                        <th>Sekretaris</th>
                        <th>Anggota</th> 
                        <th>No.Sk</th> 
                    </thead>
                    <tbody>
                        <?php  
                      
                        foreach ($amandemen_i as $lihat):
                        ?>
                       <tr>
                      <td><?php echo $lihat->amandemen_i_id?></td>
                      <td><?php echo $lihat->amprahan_id?></td> 
                      <td><?php echo $lihat->nomor?></td>
                      <td><?php echo date($lihat->tgl_i) ?></td>  
                      <td><?php echo ucwords($lihat->tim_mc) ?></td> 
                      <td><?php echo ucwords($lihat->ketua) ?></td> 
                      <td><?php echo ucwords($lihat->sekretaris) ?></td> 
                      <td><?php echo ucwords($lihat->anggota) ?></td> 
                      <td><?php echo ucwords($lihat->no_sk) ?></td>             
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
