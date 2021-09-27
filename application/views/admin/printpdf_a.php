<html>
<body>
<p align=center style="margin-bottom:.05pt;text-align:center;line-height:normal">
<b><span style='font-size:12.0pt;font-family:"Times New Roman","serif"'>PEMERINTAH ACEH</span></b></p>
<p align=center style="margin:-03pt;text-align:center;line-height:normal">
<b><span style='font-size:17.0pt;font-family:"Times New Roman","serif"'>DINAS PENGAIRAN</span></b></p>
<p align=center style="margin:1pt;text-align:center;line-height:normal">
<b><span style='font-size:8.0pt;font-family:"Times New Roman","serif"'>Jl. Ir. H. Mohd. Thaher No. 18 Telp. (0651) 21982, 21919, 24212, 22899, 33126, 21167</span></b></p>
<p align=center style="margin:-9pt;text-align:center;line-height:normal">
<b><span style='font-size:8.0pt;font-family:"Times New Roman","serif"'>Fax. 23686 - Email : pengairan@acehprov.go.id PO Box - 130 LUENG BATA - BANDA ACEH</span></b></p>


<img style="margin-top:-65pt" src="<?php echo base_url(); ?>assets/image/puu.png">
<hr style="margin:1pt" align="left" width="100%" height="7px" color="black" size="6">
<p><u><caption><b>Laporan Amprahan</b></caption></u></p>
                
                  <style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 6px;
}
</style>
</head>
<body>

<table style= width="5000" height="250">   
                    
                    <thead>
                      <tr>
                        <th>Amprahan Id</th>
                        <th>Agenda Surat Masuk Id</th>
                        <th>Nama Paket</th>
                        <th>Nilai Kontrak</th>
                        <th>Nomor Kontrak</th>
                        <th>Nama Perusahaan</th>
                        <th>Direktur</th>
                        <th>No.Npwp</th>
                        <th>Kop Cirut</th>
                        <th>Galian (C)</th>
                        <th>Jamsostek</th>
                       </tr>
                      </thead>
                    <tbody>
                        <?php  
                        
                        foreach ($amprahan as $lihat):
                        ?>
                      <tr>
                        <td><?php echo $lihat->amprahan_id?></td>
                        <td><?php echo ucwords($lihat->agenda_surat_masuk_id) ?></td>
                        <td><?php echo ucwords($lihat->nama_paket) ?></td> 
                        <td><?php echo $lihat->nilai_kontrak?></td>
                        <td><?php echo $lihat->nomor_kontrak?></td>
                        <td><?php echo ucwords($lihat->nama_perusahaan) ?></td>
                        <td><?php echo ucwords($lihat->direktur) ?></td>
                        <td><?php echo $lihat->no_npwp?></td>
                        <td><?php echo ucwords($lihat->kop_cirut) ?></td> 
                        <td><?php echo ucwords($lihat->galian_c) ?></td> 
                        <td><?php echo ucfirst($lihat->jamsostek) ?></td>                   
                      </tr>
                      <?php endforeach ?>
                    </tbody>
                  </table>
  </body>
  </html>



                  
              