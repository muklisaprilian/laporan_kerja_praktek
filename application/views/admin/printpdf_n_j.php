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
<p> <u><caption><b>Laporan Nomor Jaminan</b></caption></u></p>
                
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
                        <th>Nomor Jaminan Id</th>
                        <th>Amprahan Id</th>
                        <th>Pelaksanaan</th>
                        <th>Uang Muka</th>
                        <th>Pemeliharaan</th>
                      </tr>
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
  </body>
  </html>



                  
              