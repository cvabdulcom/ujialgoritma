<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo base_url('assets/') ?>dist/img/avatar5.png" height="160" width="160" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $this->session->userdata('nama_olikuapp'); ?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> Admin</a>
      </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li>
        <a href="<?php echo base_url('dashboard'); ?>">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>  
      <li class="header">MENU NAVIGATION</li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-industry"></i> <span>Laporan</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url('laporan/outlet'); ?>"><i class="fa fa-circle-o"></i> Laporan Outlet</a></li>
          <li><a href="<?php echo base_url('laporan/piutang'); ?>"><i class="fa fa-circle-o"></i> Laporan Piutang</a></li>
          <li><a href="<?php echo base_url('laporan/sales'); ?>"><i class="fa fa-circle-o"></i> Laporan Sales</a></li>
          <li><a href="<?php echo base_url('laporan/stok'); ?>"><i class="fa fa-circle-o"></i> Laporan Stok</a></li>
          <li><a href="<?php echo base_url('laporan/pembelian'); ?>"><i class="fa fa-circle-o"></i> Laporan Pembelian</a></li>
          <li><a href="<?php echo base_url('laporan/penjualan'); ?>"><i class="fa fa-circle-o"></i> Laporan Penjualan</a></li>
          <li><a href="<?php echo base_url('laporan/kas'); ?>"><i class="fa fa-circle-o"></i> Laporan Kas</a></li>
          <li><a href="<?php echo base_url('laporan/accounting'); ?>"><i class="fa fa-circle-o"></i> Monitor Accounting</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-cart-arrow-down"></i> <span>Nota Penjualan</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="treeview">
            <a href="#"><i class="fa fa-circle-o"></i> Sales Lapangan
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?php echo base_url('penjualan/notajpc'); ?>"><i class="fa fa-circle-o"></i> Jual Putus Cash</a></li>
              <li><a href="<?php echo base_url('penjualan/notajpt'); ?>"><i class="fa fa-circle-o"></i> Jual Putus Tempo</a></li>
              <li><a href="<?php echo base_url('penjualan/notakon'); ?>"><i class="fa fa-circle-o"></i> Konsinyasi</a></li>
            </ul>
          </li>
          <li><a href="<?php echo base_url('penjualan/notakantor'); ?>"><i class="fa fa-circle-o"></i> Sales Kantor</a></li>          
        </ul>
      </li>
      <li>
        <a href="<?php echo base_url('pembelian/notapembelian'); ?>">
          <i class="fa fa-file-zip-o"></i> <span>Nota Pembelian</span>
        </a>
      </li>  
      <li class="treeview">
        <a href="#"><i class="fa fa-envelope"></i> Surat Jalan
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url('suratjalan/sj_masuk'); ?>"><i class="fa fa-circle-o"></i> SJ Masuk</a></li>
          <li><a href="<?php echo base_url('suratjalan/sj_keluar'); ?>"><i class="fa fa-circle-o"></i> SJ Keluar</a></li>
          <li><a href="<?php echo base_url('suratjalan/sj_stokoutlet'); ?>"><i class="fa fa-circle-o"></i> SJ Stok Outlet</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#"><i class="fa fa-money"></i> Kas Harian
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url('kasharian/pembayaran_nota_jual'); ?>"><i class="fa fa-circle-o"></i> Pembayaran Nota Jual</a></li>
          <li><a href="<?php echo base_url('kasharian/pembayaran_nota_beli'); ?>"><i class="fa fa-circle-o"></i> Pembayaran Nota Beli</a></li>
          <li><a href="<?php echo base_url('kasharian/biaya'); ?>"><i class="fa fa-circle-o"></i> Biaya</a></li>
          <li><a href="<?php echo base_url('kasharian/pendapatan_lain_lain'); ?>"><i class="fa fa-circle-o"></i> Pendapatan Lain-lain</a></li>
          <li><a href="<?php echo base_url('kasharian/permodalan'); ?>"><i class="fa fa-circle-o"></i> Permodalan</a></li>
          <li><a href="<?php echo base_url('kasharian/setoran'); ?>"><i class="fa fa-circle-o"></i> Setoran</a></li>
        </ul>
      </li>
      <li>
        <a href="<?php echo base_url('pencabutan'); ?>">
          <i class="fa fa-close"></i> <span>Pencabutan</span>
        </a>
      </li>  
      <li>
        <a href="<?php echo base_url('returbarang'); ?>">
          <i class="fa fa-retweet"></i> <span>Retur Barang</span>
        </a>
      </li>  
      <li>
        <a href="<?php echo base_url('petarute'); ?>">
          <i class="fa fa-map-marker"></i> <span>Peta Rute</span>
        </a>
      </li>  
      <li class="header">REPORT NAVIGATION</li>      
      <li class="treeview">
        <a href="#">
          <i class="fa fa-users"></i> <span>Outlet Masuk</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="treeview">
            <a href="#"><i class="fa fa-circle-o"></i> Jual Putus
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?php echo base_url('outletmasuk/jp_filekontraktempo'); ?>"><i class="fa fa-circle-o"></i> File Kontrak Tempo</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#"><i class="fa fa-circle-o"></i> Konsinyasi
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?php echo base_url('outletmasuk/ky_filekontrak'); ?>"><i class="fa fa-circle-o"></i> File Kontrak</a></li>
              <li class="active"><a href="<?php echo base_url('outletmasuk/ky_stokawal'); ?>"><i class="fa fa-circle-o"></i> Stok Awal</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#"><i class="fa fa-circle-o"></i> Group Buying
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?php echo base_url('outletmasuk/gb_rekap'); ?>"><i class="fa fa-circle-o"></i> Rekap</a></li>
            </ul>
          </li>
        </ul>
      </li>
      <li>
        <a href="<?php echo base_url('hargaproduk'); ?>">
          <i class="fa fa-print"></i> <span>Harga Produk</span>
        </a>
      </li>  
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <section class="content-header">
        <h1>
            <b>Extra Discount</b>
            <small><b>Setup Page</b> <?php echo $extradiskon_setup->row()->nama_outlet; ?></small>
            <input type="hidden" id="id_outlet_cek" value="<?php echo $extradiskon_setup->row()->id_outlet; ?>">
        </h1>
    </section>

    <section class="content">
      <div class="callout">
        <div class="box box-primary">
          <div class="box-body chart-responsive">
            <table id="extrasetup" class="table table-bordered table-hover">
              <thead>
                  <tr class="bg-info">
                    <th class="text-center" width="30">No</th>
                    <th class="text-center">Nama Produk</th>
					          <th class="text-center" width="150">Harga Beli</th>
                    <th class="text-center" width="150">Custom Price</th>
                    <th class="text-center" width="50">Change Price</th>
                  </tr>
              </thead>
              <tbody id="cartBody">
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>    
  </div>
  <!-- /.content-wrapper -->

<div class="modal fade in" id="UBAHPRICE">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-body">
                <input type="hidden" id="id_outlet_price">
                <input type="hidden" id="id_produk_price">
                <input type="hidden" id="harga_beli_price">
                <input id="harga_jual_price" type="number" class="form-control" placeholder="0">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="button_save_price">Save</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
  $(document).ready(function(){
    Get_data();

    table_ds = $('#extrasetup').DataTable({
              'paging'      : true,
              'lengthChange': true,
              'searching'   : true,
              'ordering'    : true,
              'info'        : false,
              'autoWidth'   : false,
              'pageLength'  : 50
            });

    function Bersih_ds(){      
      table_ds.clear();
    }

    function Get_data(){
        var id_outlet_cek = $("#id_outlet_cek").val();
        $.ajax({
            type: "POST",
            url: "<?php echo base_url('extradiskon/get_data'); ?>",
            data: {id_outlet: id_outlet_cek},
            dataType: "JSON",
          success: function(data){
            table_ds.clear();
            // $("#cartBody").empty();
            // for (var i in data) { //tampilkan data dari local storage mycart_penjualan_lapangan, template bisa anda sesuaikan
            //     var item = data[i];
            //     var row = '<tr>'+
            //                     '<td class="text-center" width="30">'+[parseInt(i)+1]+'</td>'+
            //                     '<td>'+item.nama_produk+'</td>'+
            //                     '<td class="text-center" width="150">'+rubah(item.harga_beli)+'</td>'+
						// 		                '<td class="text-center" width="150">'+rubah(item.harga_jual)+'</td>'+
            //                     '<td width="50" class="text-center">'+
            //                     '<button type="button" class="btn btn-success btn-xs action_cek" data-idoutlet="'+item.id_outlet+'" data-idproduk="'+item.id_produk+'" data-hargabeli="'+item.harga_beli+'">Action!</button>'+
            //                     '</td>'+
            //                 '</tr>';
            //     $("#cartBody").append(row);
            // }

            if(data!='') {               
              $.each(data, function(i, item) {
                table_ds.row.add([ i+1, 
                  '<td>'+data[i].nama_produk+'</td>', 
                  '<td class="text-center">'+rubah(data[i].harga_beli)+'</td>', 
                  '<td class="text-center">'+rubah(data[i].harga_jual)+'</td>',
                  '<td width="250" class="text-center"><button type="button" class="btn btn-success btn-xs action_cek" data-idoutlet="'+data[i].id_outlet+'" data-idproduk="'+data[i].id_produk+'" data-hargabeli="'+data[i].harga_beli+'">Action!</button></td>' 
                ]);
              });              
            }
            else {
              $('#extrasetup').html('<h3>No data are available</h3>');
            }
            table_ds.draw();

          }
        });
    }

    function rubah(angka){
        var reverse = angka.toString().split('').reverse().join(''),
        ribuan = reverse.match(/\d{1,3}/g);
        ribuan = ribuan.join('.').split('').reverse().join('');
        return ribuan;
    }

    $("#cartBody").on('click', '.action_cek', function (){
        document.getElementById('harga_jual_price').value = '';
        $('#UBAHPRICE').modal('show');
        var id_outlet = $(this).data("idoutlet");
        var id_produk = $(this).data("idproduk");
        var harga_beli = $(this).data("hargabeli");
        document.getElementById('id_outlet_price').value = id_outlet;
        document.getElementById('id_produk_price').value = id_produk;
        document.getElementById('harga_beli_price').value = harga_beli;
    })

    $("#button_save_price").click(function(){
        var id_outlet = $("#id_outlet_price").val();
        var id_produk = $("#id_produk_price").val();
        var harga_beli = $("#harga_beli_price").val() * 1;
        var harga_jual = $("#harga_jual_price").val();
        if(harga_jual <= harga_beli){
          alert("Besaran harga tidak di Izinkan !");
        }else{            
          $.ajax({
            type: "POST",
            url: "<?php echo base_url('extradiskon/simpan_extra'); ?>",
            data: {
                    id_outlet: id_outlet,
                    id_produk: id_produk,
                    harga_beli: harga_beli,
                    harga_jual: harga_jual
                },
            dataType: "JSON",
            success: function(data){
                Bersih_ds();
                Get_data();
                $('#UBAHPRICE').modal('hide');
                document.getElementById('harga_jual_price').value = "";
            }
          });
        }

        // $.ajax({
        //     type: "POST",
        //     url: "<?php //echo base_url('extradiskon/simpan_extra'); ?>",
        //     data: {
        //             id_outlet: id_outlet,
        //             id_produk: id_produk,
        //             harga_beli: harga_beli,
        //             harga_jual: harga_jual
        //         },
        //     dataType: "JSON",
        //     success: function(data){
        //         Bersih_ds();
        //         Get_data();
        //         $('#UBAHPRICE').modal('hide');
        //         document.getElementById('harga_jual_price').value = "";
        //     }
        //   });
    });

  })
</script>