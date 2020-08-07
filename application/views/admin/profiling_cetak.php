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
                                        <td><?php  $new = strtotime($tanggal_lahir); $newDate = date('d F Y', $new);  echo $newDate;  ?></td>
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
                            <th style="border-collapse: collapse; border: 1px solid black;" rowspan="2" width="30" bgcolor="#A5A2A1">NO</th>
                            <th style="border-collapse: collapse; border: 1px solid black;" rowspan="2" bgcolor="#A5A2A1">PRODUK</th>
                            <th style="border-collapse: collapse; border: 1px solid black;" rowspan="2" bgcolor="#A5A2A1">HARGA BELI</th>
                            <th style="border-collapse: collapse; border: 1px solid black;" colspan="8" bgcolor="#A5A2A1">STOK</th>
                        </tr>
                        <?php 
                        	$cek_tanggal = $this->db->query("SELECT DISTINCT tanggal FROM tbl_stokoutlet 
											WHERE id_outlet='$id_outlet' 
											AND masuk_keluar='MASUK'
											AND tanggal = (SELECT MAX(tanggal) AS tanggal FROM tbl_stokoutlet WHERE id_outlet='$id_outlet') LIMIT 1");
                        	
                            if($cek_tanggal->num_rows() > 0){
                                $tanggal_stok = $cek_tanggal->row()->tanggal;
                            }else{
                                $tanggal_stok = date('Y-m-d');
                            }
                        ?>
                        <tr>
                            <td style="border-collapse: collapse; border: 1px solid black;" bgcolor="#E5DEDC" align="center">&nbsp;<?php $new = strtotime($tanggal_stok); $newDate = date('d/m/Y', $new);  echo $newDate; ?></td>
                            <td style="border-collapse: collapse; border: 1px solid black;" bgcolor="#E5DEDC">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;" bgcolor="#E5DEDC">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;" bgcolor="#E5DEDC">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;" bgcolor="#E5DEDC">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;" bgcolor="#E5DEDC">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;" bgcolor="#E5DEDC">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;" bgcolor="#E5DEDC">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        </tr>
                        <?php
                          $no=0;
                          $total_pcs=0;
                          $total_rph=0;
                          foreach($stokawal->result_array() as $tampil_stokawal):
                            $no++;
                            $nama_produk = $tampil_stokawal['nama_produk'];
                            $harga = $tampil_stokawal['harga_ky_t_bayar'];
                            $stok_awal = $tampil_stokawal['jumlah'];
                        ?>
                        <tr>
                            <td style="border-collapse: collapse; border: 1px solid black;" align="center"><?php echo $no; ?></td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;<?php echo $nama_produk; ?></td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;Rp.<?php echo number_format($harga, 0, ',', '.'); ?></td>
                            <td style="border-collapse: collapse; border: 1px solid black;" align="center"><?php echo $stok_awal; ?></td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <?php
                                $subtotal = $harga*$stok_awal;
                                $total_pcs+=$stok_awal;
                                $total_rph+=$subtotal;
                            ?>
                        </tr>
                        <?php endforeach; ?>
                        <tr>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        </tr>
                        <tr>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        </tr>
                        <tr>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        </tr>
                        <tr>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        </tr>
                        <tr>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        </tr>
                        <tr>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        </tr>
                        <tr>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        </tr>
                        <tr>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        </tr>
                        <tr>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        </tr>
                        <tr>
                            <td colspan="3" height="50" style="border-collapse: collapse; border: 1px solid black;" bgcolor="#A5A2A1" align="center">&nbsp;<strong>TOTAL BOTOL</strong></td>
                            <td style="border-collapse: collapse; border: 1px solid black;" bgcolor="#E5DEDC" align="center"><?php echo $total_pcs; ?> pcs</td>
                            <td style="border-collapse: collapse; border: 1px solid black;" bgcolor="#E5DEDC">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;" bgcolor="#E5DEDC">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;" bgcolor="#E5DEDC">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;" bgcolor="#E5DEDC">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;" bgcolor="#E5DEDC">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;" bgcolor="#E5DEDC">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;" bgcolor="#E5DEDC">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        </tr>
                        <tr>
                        <td colspan="3" height="50" style="border-collapse: collapse; border: 1px solid black;" bgcolor="#A5A2A1" align="center">&nbsp;<strong>TOTAL RUPIAH</strong></td>
                            <td style="border-collapse: collapse; border: 1px solid black;" bgcolor="#E5DEDC" align="center">Rp. <?php echo number_format($total_rph, 0, ',', '.'); ?></td>
                            <td style="border-collapse: collapse; border: 1px solid black;" bgcolor="#E5DEDC">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;" bgcolor="#E5DEDC">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;" bgcolor="#E5DEDC">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;" bgcolor="#E5DEDC">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;" bgcolor="#E5DEDC">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;" bgcolor="#E5DEDC">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;" bgcolor="#E5DEDC">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        </tr>
                        <tr>
                        <td colspan="3" height="50" style="border-collapse: collapse; border: 1px solid black;" bgcolor="#A5A2A1" align="center">&nbsp;<strong>CAP JEMPOL</strong></td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="border-collapse: collapse; border: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        </tr>
                    </table>
                </td>
            </tr>
            <br/>
            <tr>
                <td>
                    <table style="border-collapse: collapse; border: 1px solid black;" cellpadding="7">
                        <tr>
                            <th align="left">Nama</th>
                            <td>:</td>
                            <td>.........................................</td>
                        </tr>
                        <tr>
                            <th align="left">Jenis Kelamin</th>
                            <td>:</td>
                            <td>.........................................</td>
                        </tr>
                        <tr>
                            <th align="left">No. KTP</th>
                            <td>:</td>
                            <td>.........................................</td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <?php endforeach; ?>
    </body>
</html>