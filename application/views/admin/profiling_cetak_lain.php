<html>
    <head>
        <!-- <script>window.print();</script> -->
    </head>
    <body>
        <center><h2><font face="calibri" color="#A9A9A9">PROFILING</font></h2></center>
        <?php
            $no=0;
            foreach($outlet->result_array() as $tampil):
                $no++;
                $id_outlet = $tampil['id_outlet'];
                $nama_outlet = $tampil['nama_outlet'];
                $kecamatan = $tampil['kecamatan'];
                $kabupaten = $tampil['kabupaten'];
                $alamat = $tampil['alamat'];
                $latitude = $tampil['latitude'];
                $longitude = $tampil['longitude'];
                $nama_pemilik = $tampil['nama_pemilik'];
                $telepon = $tampil['telepon'];
                $ada_whatsapp = $tampil['ada_whatsapp'];
                $tanggal_lahir = $tampil['tanggal_lahir'];
                $tipe_outlet = $tampil['tipe_outlet'];
                $jumlah_pegawai = $tampil['jumlah_pegawai'];
                $fasilitas = $tampil['fasilitas'];
                $supplier = $tampil['supplier'];
                $rute = $tampil['rute'];
                $tipe_pembelian = $tampil['tipe_pembelian'];
                $nama_salesman = $tampil['nama_salesman'];
                $status_program = $tampil['status_program'];
                $foto_outlet = $tampil['foto_outlet'];
                $foto_stokawal = $tampil['foto_stokawal'];
                $foto_kontrak = $tampil['foto_kontrak'];
                $foto_kontrak_tempo = $tampil['foto_kontrak_tempo'];
        ?>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwtxQN8hMp0bg4pxx9lvpeU43J1tlitxY&sensor=true&libraries=places,geometry"></script>
        <script>
            function initialize() {
                var propertiPeta = {
                    center:new google.maps.LatLng(<?php echo $longitude; ?>,<?php echo $latitude; ?>),
                    zoom:16,
                    mapTypeId:google.maps.MapTypeId.ROADMAP
                };
                
                var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);

                var marker=new google.maps.Marker({
                    position: new google.maps.LatLng(<?php echo $longitude; ?>,<?php echo $latitude; ?>),
                    map: peta
                });
            }
            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
        <table width="100%">
            <tr>
                <td>
                    <table width="100%">
                        <tr style="border-collapse: collapse; border: 1px solid black;">
                            <td style="border-collapse: collapse; border: 1px solid black;" width="380" height="280">
                                <div id="googleMap" style="width:380px;height:280px;"></div>
                            </td>
                            <td style="border-collapse: collapse; border: 1px solid black;">
                                <!-- <img src="https://drive.google.com/uc?export=view&id=<?php //echo $foto_outlet; ?>" width="380" height="280"> -->
                                <iframe src="https://drive.google.com/file/d/<?php echo $foto_outlet; ?>/preview" width="380" height="280"></iframe>
                            </td>
                        </tr>
                        <tr style="border-collapse: collapse; border: 1px solid black;">
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;
                                <table>
                                    <tr>
                                        <th align="left">Salesman</th>
                                        <td>:</td>
                                        <td><?php echo $nama_salesman; ?></td>
                                    </tr>
                                    <tr>
                                        <th align="left">Outlet</th>
                                        <td>:</td>
                                        <td><?php echo $nama_outlet; ?></td>
                                    </tr>
                                    <tr>
                                        <th align="left">Alamat</th>
                                        <td>:</td>
                                        <td><?php echo $alamat; ?></td>
                                    </tr>
                                    <tr>
                                        <th align="left">Pemilik</th>
                                        <td>:</td>
                                        <td><?php echo $nama_pemilik; ?></td>
                                    </tr>
                                    <tr>
                                        <th align="left">Telepon</th>
                                        <td>:</td>
                                        <td><?php echo $telepon; ?></td>
                                    </tr>     
                                    <tr>
                                        <th align="left">Bergabung</th>
                                        <td>:</td>
                                        <td><?php $new = strtotime($tanggal_lahir); $newDate = date('d F Y', $new);  echo $newDate; ?></td>
                                    </tr>                         
                                </table>
                            </td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;
                                <table>
                                    <tr>
                                        <th align="left">Lat/Long</th>
                                        <td>:</td>
                                        <td><?php echo $latitude; ?>/<?php echo $longitude; ?></td>
                                    </tr>
                                    <tr>
                                        <th align="left">Tipe</th>
                                        <td>:</td>
                                        <td><?php echo $tipe_outlet; ?></td>
                                    </tr>
                                    <tr>
                                        <th align="left">Fasilitas</th>
                                        <td>:</td>
                                        <td><?php echo $fasilitas; ?></td>
                                    </tr>
                                    <tr>
                                        <th align="left">Biasa Oleh</th>
                                        <td>:</td>
                                        <td><?php echo $supplier; ?></td>
                                    </tr>
                                    <tr>
                                        <th align="left">WA</th>
                                        <td>:</td>
                                        <td><?php echo $ada_whatsapp; ?></td>
                                    </tr>  
                                    <tr>
                                        <th align="left">Tipe</th>
                                        <td>:</td>
                                        <td><?php echo $status_program; ?></td>
                                    </tr>                                     
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <br/>
            <tr>
                <td>
                    <table style="border-collapse: collapse; border: 1px solid black; valign: middle;" width="100%">
                        <tr>
                            <th style="border-collapse: collapse; border: 1px solid black;" width="30" bgcolor="#A5A2A1">NO</th>
                            <th style="border-collapse: collapse; border: 1px solid black;" bgcolor="#A5A2A1">TANGGAL</th>
                            <th style="border-collapse: collapse; border: 1px solid black;" bgcolor="#A5A2A1">KODE NOTA</th>
                            <th style="border-collapse: collapse; border: 1px solid black;" bgcolor="#A5A2A1">NOMINAL</th>
                            <th style="border-collapse: collapse; border: 1px solid black;" bgcolor="#A5A2A1">PRODUK</th>
                        </tr>            
                        <?php
                            $cek_nota = $this->db->query("SELECT DISTINCT no_nota_penjualan, tanggal FROM tbl_penjualan WHERE id_outlet='$id_outlet' ORDER BY tanggal DESC LIMIT 6");
                            $no=0;
                            foreach($cek_nota->result_array() as $tampil_nota):
                                $no++;
                                $no_nota_penjualan = $tampil_nota['no_nota_penjualan'];
                                $tanggal = $tampil_nota['tanggal'];
                        ?>
                        <tr>
                            <td style="border-collapse: collapse; border: 1px solid black;" bgcolor="#E5DEDC" align="center"><?php echo $no; ?></td>
                            <td style="border-collapse: collapse; border: 1px solid black;" bgcolor="#E5DEDC"><?php  $new1 = strtotime($tanggal); $newDate1 = date('d/m/Y', $new1);  echo $newDate1; ?></td>
                            <td style="border-collapse: collapse; border: 1px solid black;" bgcolor="#E5DEDC"><?php echo $no_nota_penjualan; ?></td>
                            <td style="border-collapse: collapse; border: 1px solid black;" bgcolor="#E5DEDC">Rp.<?php
                                    $cek_nominal = $this->db->query("SELECT SUM(subtotal) AS nominal FROM tbl_penjualan WHERE no_nota_penjualan='$no_nota_penjualan'");
                                    $nominal = $cek_nominal->row()->nominal;
                                    echo number_format($nominal, 0, ',', '.');
                                ?>
                            </td>
                            <td style="border-collapse: collapse; border: 1px solid black;" bgcolor="#E5DEDC">
                                <?php
                                    $cek_produk = $this->db->query("SELECT * FROM tbl_penjualan WHERE no_nota_penjualan='$no_nota_penjualan'");
                                    foreach($cek_produk->result_array() as $tampil_produk):
                                        $nama_produk = $tampil_produk['nama_produk'];

                                        echo $nama_produk;
                                        echo ", ";
                                    endforeach;
                                ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </td>
            </tr>
            <br/>
        </table>
        <?php endforeach; ?>
    </body>
</html>