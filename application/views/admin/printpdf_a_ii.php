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
<p> <u><caption><b>Laporan Amandemen II</b></caption></u></p>
                
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
                        <th>Amandemen II Id</th>
                        <th>Amprahan Id</th>
                        <th>Nomor</th>
                        <th>Tanggal</th>
                        <th>Tim MC</th>
                        <th>Ketua</th>
                        <th>Sekretaris</th>
                        <th>Anggota</th> 
                        <th>No.Sk</th> 
                      </tr>
                    </thead>
                    <tbody>
                        <?php  
                       
                        foreach ($amandemen_ii as $lihat):
                        ?>
                       <tr>
                      <td><?php echo $lihat->amandemen_ii_id?></td>
                      <td><?php echo $lihat->amprahan_id?></td> 
                      <td><?php echo $lihat->nomor?></td>
                      <td><?php echo date($lihat->tanggal) ?></td>  
                      <td><?php echo ucwords($lihat->tim_mc) ?></td> 
                      <td><?php echo ucwords($lihat->ketua) ?></td> 
                      <td><?php echo ucwords($lihat->sekretaris) ?></td> 
                      <td><?php echo ucwords($lihat->anggota) ?></td> 
                      <td><?php echo ucwords($lihat->no_sk) ?></td>             
                      </tr>
                      <?php endforeach ?>
                    </tbody>
                  </table>
  </body>
  </html>



                  
              