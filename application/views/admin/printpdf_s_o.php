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
<p> <u><caption><b>Laporan Struktur Organisasi</b></caption></u></p>
                
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
                        <th>Struktur Organisasi Id</th>
                        <th>Amprahan Id</th>
                        <th>KPA</th>
                        <th>PPTK</th>
                        <th>Pembantu PPTK</th>
                        <th>Pengawas</th>
                        <th>No.Sk</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php  
                        
                        foreach ($struktur_organisasi as $lihat):
                        ?>
                       <tr>
                        <td><?php echo $lihat->struktur_organisasi_id?></td>
                        <td><?php echo $lihat->amprahan_id?></td>
                        <td><?php echo ucwords($lihat->kpa) ?></td> 
                        <td><?php echo ucwords($lihat->pptk) ?></td> 
                        <td><?php echo ucfirst($lihat->pembantu_pptk) ?></td>
                        <td><?php echo ucfirst($lihat->pengawas) ?></td>
                        <td><?php echo $lihat->no_sk?></td>             
                      </tr>
                      <?php endforeach ?>
                    </tbody>
                  </table>
  </body>
  </html>



                  
              