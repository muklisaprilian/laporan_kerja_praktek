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
<p> <u><caption><b>Laporan Agenda Surat Masuk</b></caption></u></p>
                
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
                        <th>Agenda Surat Masuk Id</th>
                        <th>Uraian</th>
                        <th>Asal Surat</th>
                        <th>Tanggal masuk</th> 
                        <th>Keterangan</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php  
                        
                        foreach ($agenda_surat_masuk as $lihat):
                        ?>
                      <tr>
                      <td><?php echo ucwords($lihat->agenda_surat_masuk_id) ?></td>
                      <td><?php echo ucwords($lihat->uraian) ?></td> 
                      <td><?php echo ucwords($lihat->asal_surat) ?></td> 
                      <td><?php echo date($lihat->tgl_masuk) ?></td>                 
                      <td><?php echo ucwords($lihat->ket) ?></td>                    
                      </tr>
                      <?php endforeach ?>
                    </tbody>
                  </table>
  </body>
  </html>



                  
                  
                