    <div id="wrapper">

        <!-- Navigation -->
       
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header" align="center">Tingkat Kematangan Keselarasan SI - Bisnis di <br>Universitas Pendidikan Indonesia</h2>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <div class="row">
               <div class="col-lg-12">
                   <div class="panel panel-default">
                       <div class="panel-heading">
                           Diagram Jaring Laba-laba Seluruh Indikator Penilaian
                       </div>
                       <div class="panel-body">
                            <div class="col-lg-12">
                                <div id="container2" style="margin: 0; margin-bottom: 17px"></div>
                            </div>
                             <div class="col-lg-12" style="margin-bottom: 20px">
                                  <table border="1" width="100%"  class="table table-bordered">
                                    <thead>
                                    <tr class="warning">
                                      <th>Diagram Jaring Laba-laba pada kelompok Jabatan TI</th>
                                      <th>Diagram Jaring Laba-laba pada kelompok Jabatan Non TI</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                      <td width="50%"><div id="containerTI" style="margin: 0; margin-bottom: 17px"></div></td>
                                      <td><div id="containerTI2" style="margin: 0; margin-bottom: 17px"></div></td>
                                    </tr>
  
                                    </tbody>
                                  </table>
                            </div>
                            <h3 style="margin-bottom: 0px; text-align: center;"><br>Daftar Faktor Penghambat</h3>
                             <hr style="border-top: 2px solid #000;">

                            <?php $key=0;$abjad = ['A','B','C','D','E','F', 'G'];for($no=1;$no<=6;$no++){ ?>
                             <div class="row">
                               <div class="col-md-4"><div id="pt<?php echo $no; ?>" style="margin: 0;"></div>
                               Keterangan :<br>
                            <p style="font-size: 11px">
                            <?php $abjkey=0;foreach($indikator as $key=>$x){ ?>
                            <?php if($x['idf'] == $no){?>
                            <?php  echo $abjad[$abjkey++].":  ".$x['indicator']; ?><br>
                            <?php } ?>
                            <?php } //echo $key;?>
                            </p>
                             </div>
                               <div class="col-md-8">
                                 <table class="table table-bordered">
                                   <thead>
                                     <tr class="success" style="text-align: center">
                                       <th rowspan="2">No.</th>
                                       <th rowspan="2">Faktor</th>
                                       <th colspan="2">Tingkat Saat ini</th>
                                       <th rowspan="2">Sasaran</th>
                                       <th rowspan="2">Strategi</th>
                                     </tr>
                                     <tr class="success">
                                       <th>Level</th>
                                       <th>Kondisi</th>
                                     </tr>
                                   </thead>
                                   <tbody>
                                    <?php $i=1;if(isset($penghambat[$no])){foreach($penghambat[$no] as $row){ ?>
                                    <tr>
                                      <td><?php echo $i++; ?></td>
                                      <td><?php echo $row['nama']; ?></td>
                                      <td><?php echo $row['level']; ?></td>
                                      <td><?php echo $row['kondisi']; ?></td>
                                      <td><?php echo $row['goal']; ?></td>
                                      <td><?php echo $row['strategi']; ?></td>
                                      <!-- <td></td> -->
                                      <!-- <td></td> -->
                                      <!-- <td></td> -->
                                    </tr>
                                    <?php }}else{ ?>
                                    <tr class="success">
                                      <td>-</td>
                                      <td>-Tidak ada faktor penghambat pada indikator penilaian ini-</td>
                                      <td>-</td>
                                      <td>-</td>
                                      <td>-</td>
                                      <td>-</td>
                                    </tr>
                                    <?php } ?>
                                   </tbody>
                                 </table>   
                               </div>
                             </div>
                             <hr style="border-top: 2px solid #000;">
                            <?php } ?>
                       </div>
                   </div>
               </div>
        </div>
        </div>
            <!-- /.row -->
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
