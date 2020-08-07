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
        <?php    
            $tanggal_awal = $this->input->get('tanggal_awal_egp');
            $tanggal_akhir = $this->input->get('tanggal_akhir_egp');
        ?>
        <table class="table" style="border-collapse: collapse; border: 1px solid black;">
            <tr>
                <th class="text-center" style="border-collapse: collapse; border: 1px solid black;" colspan="6">Estimated Gross Profit Details</th>
            </tr>
            <tr>
                <th class="text-center" style="border-collapse: collapse; border: 1px solid black;" colspan="6"><?php $new = strtotime($tanggal_awal); $newDate = date('d/m/Y', $new);  echo $newDate; ?> - <?php $new1 = strtotime($tanggal_akhir); $newDate1 = date('d/m/Y', $new1);  echo $newDate1; ?></th>
            </tr>
            <tr>
                <th class="text-center" style="border-collapse: collapse; border: 1px solid black;">No</th>
                <th style="border-collapse: collapse; border: 1px solid black;">Nama Produk</th>
                <th class="text-center" style="border-collapse: collapse; border: 1px solid black;">Jumlah(pcs)</th>
                <th class="text-center" style="border-collapse: collapse; border: 1px solid black;">Penjualan</th>
                <th class="text-center" style="border-collapse: collapse; border: 1px solid black;">HPP</th>
                <th class="text-center" style="border-collapse: collapse; border: 1px solid black;">EGP (Penjualan-HPP)</th>
            </tr>
            <?php
                $no=0;
                $total_penjualan = 0;
                $total_hpp = 0;
                $total_all = 0;
                $tanggal_awal = $this->input->get('tanggal_awal_egp');
                $tanggal_akhir = $this->input->get('tanggal_akhir_egp');
                foreach($egp_detail->result_array() as $tampil_detail):
                    $no++;
                    $id_produk = $tampil_detail['id_produk'];
                    $nama_produk = $tampil_detail['nama_produk'];
                    $harga_beli = $tampil_detail['harga_beli'];

            ?>
                <tr>
                    <td class="text-center" style="border-collapse: collapse; border: 1px solid black;"><?php echo $no; ?></td>
                    <td style="border-collapse: collapse; border: 1px solid black;"><?php echo $nama_produk; ?></td>
                    <td class="text-center" style="border-collapse: collapse; border: 1px solid black;">
                        <?php
                            $cek_jumlah = $this->db->query("SELECT SUM(jumlah) AS jumlah FROM tbl_penjualan WHERE id_produk='$id_produk' AND tanggal BETWEEN '$tanggal_awal' AND '$tanggal_akhir'");
                            $jumlah = $cek_jumlah->row()->jumlah;
                            echo number_format($jumlah, 0, ',', '.');
                        ?>
                    </td>
                    <td class="text-center" style="border-collapse: collapse; border: 1px solid black;">
                        <?php
                            $cek_penjualan = $this->db->query("SELECT SUM(subtotal) AS subtotal FROM tbl_penjualan WHERE id_produk='$id_produk' AND tanggal BETWEEN '$tanggal_awal' AND '$tanggal_akhir'");
                            $subtotal = $cek_penjualan->row()->subtotal;
                            echo number_format($subtotal, 0, ',', '.');
                            $total_penjualan += $subtotal;
                        ?>
                    </td>
                    <td class="text-center" style="border-collapse: collapse; border: 1px solid black;">
                        <?php
                            $hpp = $jumlah*$harga_beli;
                            echo number_format($hpp, 0, ',', '.');
                            $total_hpp += $hpp;
                        ?>
                    </td>
                    <td class="text-center" style="border-collapse: collapse; border: 1px solid black;">
                        <?php
                            $total = $subtotal - $hpp;
                            echo number_format($total, 0, ',', '.');
                            $total_all += $total;
                        ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            <tr>
                <th class="text-right" colspan="3" style="border-collapse: collapse; border: 1px solid black;">Total &nbsp; &nbsp;</th>
                <th class="text-center" style="border-collapse: collapse; border: 1px solid black;"><?php echo number_format($total_penjualan, 0, ',', '.'); ?></th>
                <th class="text-center" style="border-collapse: collapse; border: 1px solid black;"><?php echo number_format($total_hpp, 0, ',', '.'); ?></th>
                <th class="text-center" style="border-collapse: collapse; border: 1px solid black;"><?php echo number_format($total_all, 0, ',', '.'); ?></th>
            </tr>
        </table>
    </body>
</html>