<html>
    <head>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="<?php echo base_url('/assets/bower_components/bootstrap/dist/css/bootstrap.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('/assets/css/jquery-ui.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('/assets/bower_components/font-awesome/css/font-awesome.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('/assets/bower_components/Ionicons/css/ionicons.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('/assets/bower_components/jvectormap/jquery-jvectormap.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('/assets/bower_components/select2/dist/css/select2.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('/assets/dist/css/AdminLTE.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('/assets/dist/css/skins/_all-skins.min.css'); ?>">

        <link rel="stylesheet" href="<?php echo base_url('/assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css'); ?>">
        
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwtxQN8hMp0bg4pxx9lvpeU43J1tlitxY&sensor=true&libraries=places,geometry"></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

        <script src="<?php echo base_url('/assets/sweetalert/sweetalert.min.js'); ?>"></script>
        <link rel="stylesheet" href="<?php echo base_url('/assets/sweetalert/sweetalert.min.css'); ?>"/>

        <script src="<?php echo base_url('/assets/bower_components/jquery/dist/jquery.min.js'); ?>"></script>
        <script src="<?php echo base_url('/assets/js/jquery-ui.js'); ?>"></script>

        <!-- DataTables -->
        <script src="<?php echo base_url('/assets/bower_components/datatables.net/js/jquery.dataTables.min.js'); ?>"></script>
        <script src="<?php echo base_url('/assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js'); ?>"></script>

        <!-- Angularjs -->
        <!-- <script src="<?php //echo base_url('/assets/angularjs/angular.min.js'); ?>"></script>
        <script src="<?php //echo base_url('/assets/angularjs/angular-validate.min.js'); ?>"></script> -->

        <!-- Google Drive -->
        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('/assets/googledrive/upload.css'); ?>" />
        <script src="<?php echo base_url('/assets/googledrive/main.js'); ?>"></script>
        <script src="<?php echo base_url('/assets/googledrive/upload.js'); ?>"></script>
        <!-- Google Drive -->

        <!-- Date Range -->
        <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    </head>
    <body>
        <table class="table" style="border-collapse: collapse; border: 1px solid black;">
            <tr>
                <th class="text-center" style="border-collapse: collapse; border: 1px solid black;" colspan="14">Pricelist Portalindo</th>
            </tr>
            <tr>
                  <th class="text-center" style="border-collapse: collapse; border: 1px solid black;">No</th>
                  <th class="text-center" style="border-collapse: collapse; border: 1px solid black;">Nama Produk</th>
                  <th class="text-center" style="border-collapse: collapse; border: 1px solid black;">Kemasan</th>
                  <th class="text-center" style="border-collapse: collapse; border: 1px solid black;">Isi</th>
                  <th class="text-center" style="border-collapse: collapse; border: 1px solid black;">Harga GB 200 Dus</th>
                  <th class="text-center" style="border-collapse: collapse; border: 1px solid black;">Harga GB 150 Dus</th>
                  <th class="text-center" style="border-collapse: collapse; border: 1px solid black;">Harga GB 50 Dus</th>
                  <th class="text-center" style="border-collapse: collapse; border: 1px solid black;">Harga GB 50 Dus</th>
                  <th class="text-center" style="border-collapse: collapse; border: 1px solid black;">Harga JPC Dus</th>
                  <th class="text-center" style="border-collapse: collapse; border: 1px solid black;">Harga JPC Botol</th>
                  <th class="text-center" style="border-collapse: collapse; border: 1px solid black;">Harga JPT Dus</th>
                  <th class="text-center" style="border-collapse: collapse; border: 1px solid black;">Harga JPT Botol</th>
                  <th class="text-center" style="border-collapse: collapse; border: 1px solid black;">Harga KY Bayar</th>
                  <th class="text-center" style="border-collapse: collapse; border: 1px solid black;">Harga KY Jual</th>
            </tr>
            <tbody>
                <?php
                  $no=0;
                  foreach($harga->result_array() as $tampil):
                    $no++;
                    $id_produk = $tampil['id_produk'];
                    $nama_produk = $tampil['nama_produk'];
                    $kemasan = $tampil['kemasan'];
                    $isi = $tampil['isi'];
                    $harga_beli = $tampil['harga_beli'];
                    $harga_gb_200_dus = $tampil['harga_gb_200_dus'];
                    $harga_gb_150_dus = $tampil['harga_gb_150_dus'];
                    $harga_gb_50_dus = $tampil['harga_gb_50_dus'];
                    $harga_gb_k_50_dus = $tampil['harga_gb_k_50_dus'];
                    $harga_jpc_dus = $tampil['harga_jpc_dus'];
                    $harga_jpc_botol = $tampil['harga_jpc_botol'];
                    $harga_jpt_dus = $tampil['harga_jpt_dus'];
                    $harga_jpt_botol = $tampil['harga_jpt_botol'];
                    $harga_ky_t_bayar = $tampil['harga_ky_t_bayar'];
                    $harga_ky_r_jual = $tampil['harga_ky_r_jual'];
                ?>
                <tr>
                  <td class="text-center" width="30" style="border-collapse: collapse; border: 1px solid black;"><?php echo $no; ?></td>
                  <td style="border-collapse: collapse; border: 1px solid black;"><?php echo $nama_produk; ?></td>
                  <td class="text-center" style="border-collapse: collapse; border: 1px solid black;"><?php echo $kemasan; ?></td>
                  <td class="text-center" style="border-collapse: collapse; border: 1px solid black;"><?php echo $isi; ?></td>
                  <td class="text-center" style="border-collapse: collapse; border: 1px solid black;"><?php echo number_format($harga_gb_200_dus, 0, ',', '.'); ?></td>
                  <td class="text-center" style="border-collapse: collapse; border: 1px solid black;"><?php echo number_format($harga_gb_150_dus, 0, ',', '.'); ?></td>
                  <td class="text-center" style="border-collapse: collapse; border: 1px solid black;"><?php echo number_format($harga_gb_50_dus, 0, ',', '.'); ?></td>
                  <td class="text-center" style="border-collapse: collapse; border: 1px solid black;"><?php echo number_format($harga_gb_k_50_dus, 0, ',', '.'); ?></td>
                  <td class="text-center" style="border-collapse: collapse; border: 1px solid black;"><?php echo number_format($harga_jpc_dus, 0, ',', '.'); ?></td>
                  <td class="text-center" style="border-collapse: collapse; border: 1px solid black;"><?php echo number_format($harga_jpc_botol, 0, ',', '.'); ?></td>
                  <td class="text-center" style="border-collapse: collapse; border: 1px solid black;"><?php echo number_format($harga_jpt_dus, 0, ',', '.'); ?></td>
                  <td class="text-center" style="border-collapse: collapse; border: 1px solid black;"><?php echo number_format($harga_jpt_botol, 0, ',', '.'); ?></td>
                  <td class="text-center" style="border-collapse: collapse; border: 1px solid black;"><?php echo number_format($harga_ky_t_bayar, 0, ',', '.'); ?></td>
                  <td class="text-center" style="border-collapse: collapse; border: 1px solid black;"><?php echo number_format($harga_ky_r_jual, 0, ',', '.'); ?></td>
                </tr>
                <?php endforeach; ?>
              </tbody>
        </table>
    </body>
</html>