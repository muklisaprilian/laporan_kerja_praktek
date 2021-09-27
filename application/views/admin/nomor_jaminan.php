<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Nomor Jaminan
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
                  	<a href="<?php echo base_url(); ?>admin/tambah_nomor_jaminan" class="btn btn-sm btn-primary btn-flat"><i class="fa fa-edit">
                    </i> Tambah</a>
                    
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
                        <th>No</th>
                        <th>Nomor Jaminan Id</th>
                        <th>Amprahan Id</th>
                        <th>Pelaksanaan</th>
                        <th>Uang Muka</th>
                        <th>Pemeliharaan</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                      	<?php  
                        $no = 1;
                        foreach ($data as $lihat):
                        ?>
                    	 <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $lihat->nomor_jaminan_id?></td>
                        <td><?php echo $lihat->amprahan_id?></td>
                        <td><?php echo ucwords($lihat->pelaksanaan) ?></td> 
                         <td><?php echo $lihat->uang_muka?></td> 
                        <td><?php echo ucfirst($lihat->pemeliharaan) ?></td>  
                        <td align="center">
                          <div class="btn-group" role="group">
                            <a href="<?php echo base_url(); ?>admin/edit_nomor_jaminan/<?php echo $lihat->nomor_jaminan_id ?>" class="btn btn-sm btn-primary btn-flat"><i class="fa fa-edit"></i> Edit</a>
                            <a href="<?php echo base_url(); ?>admin/hapus_nomor_jaminan/<?php echo $lihat->nomor_jaminan_id ?>" onclick="javascript: return confirm('Anda yakin akan menghapus data ini ?')" class="btn btn-sm btn-danger btn-flat"><i class="fa fa-trash"></i> Hapus</a>
                            <a href="<?php echo base_url(); ?>l_n_j/printpdf_n_j" class="btn btn-sm btn-primary btn-flat"><i class="fa fa-print"> 
                    </i> Print</a>
                          </div>
                        </td>                  		
                    	</tr>
                    	<?php endforeach; ?>
                    </tbody>
                  </table>
                  
                </div><!-- /.box-body -->
                </div>
             </div>
          </div>
        

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
