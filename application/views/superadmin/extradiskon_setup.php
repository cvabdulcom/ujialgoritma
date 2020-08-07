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
        <a href="#"><i class="fa fa-circle text-success"></i> Superuser</a>
      </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
      <li>
        <a href="<?php echo base_url('dashboard'); ?>">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>
      <li>
        <a href="<?php echo base_url('hargaproduk'); ?>">
          <i class="fa fa-money"></i> <span>Harga Produk</span>
        </a>
      </li>
      <li>
        <a href="<?php echo base_url('pengguna'); ?>">
          <i class="fa fa-users"></i> <span>Pengguna</span>
        </a>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-trash-o"></i> <span>Hapus Data</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url('hapusdata'); ?>"><i class="fa fa-circle-o"></i> Nota Penjualan</a></li>
          <li><a href="<?php echo base_url('hapusdata/suratjalan'); ?>"><i class="fa fa-circle-o"></i> Surat Jalan</a></li>
          <li><a href="<?php echo base_url('hapusdata/datastok'); ?>"><i class="fa fa-circle-o"></i> Data Stok</a></li>
          <li><a href="<?php echo base_url('hapusdata/sjoutlet'); ?>"><i class="fa fa-circle-o"></i> SJ Outlet</a></li>
          <li><a href="<?php echo base_url('hapusdata/pembelian'); ?>"><i class="fa fa-circle-o"></i> Pembelian</a></li>
          <li><a href="<?php echo base_url('hapusdata/dataoutlet'); ?>"><i class="fa fa-circle-o"></i> Data Outlet</a></li>
          <li><a href="<?php echo base_url('hapusdata/datapiutang'); ?>"><i class="fa fa-circle-o"></i> Data Piutang</a></li>
          <li><a href="<?php echo base_url('hapusdata/datakas'); ?>"><i class="fa fa-circle-o"></i> Data Kas</a></li>
          <li><a href="<?php echo base_url('hapusdata/datasetoran'); ?>"><i class="fa fa-circle-o"></i> Data Setoran</a></li>
        </ul>
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
            <table class="table table-bordered table-hover">
              <thead>
                  <tr class="bg-info">
                    <th class="text-center">No</th>
                    <th class="text-center">Nama Produk</th>
					<th class="text-center">Harga Beli</th>
                    <th class="text-center">Custom Price</th>
                    <th class="text-center">Change Price</th>
                  </tr>
              </thead>
              <tbody id="cartBody">
                <tr>
                    <td class="text-center" width="30"></td>
                    <td></td> 
                    <td class="text-center" width="150"></td> 
					<td class="text-center" width="150"></td> 
                    <td width="250" class="text-center"></td>
                </tr>
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
    function Get_data(){
        var id_outlet_cek = $("#id_outlet_cek").val();
        $.ajax({
            type: "POST",
            url: "<?php echo base_url('extradiskon/get_data'); ?>",
            data: {id_outlet: id_outlet_cek},
            dataType: "JSON",
          success: function(data){
            $("#cartBody").empty();
            for (var i in data) { //tampilkan data dari local storage mycart_penjualan_lapangan, template bisa anda sesuaikan
                var item = data[i];
                var row = '<tr>'+
                                '<td class="text-center" width="30">'+[parseInt(i)+1]+'</td>'+
                                '<td>'+item.nama_produk+'</td>'+
                                '<td class="text-center" width="150">'+rubah(item.harga_beli)+'</td>'+
								'<td class="text-center" width="150">'+rubah(item.harga_jual)+'</td>'+
                                '<td width="250" class="text-center">'+
                                    '<button type="button" class="btn btn-success btn-xs action_cek" data-idoutlet="'+item.id_outlet+'" data-idproduk="'+item.id_produk+'" data-hargabeli="'+item.harga_beli+'">Action!</button>'+
                                '</td>'+
                            '</tr>';
                $("#cartBody").append(row);
            }
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
        var harga_beli = $("#harga_beli_price").val();
        var harga_jual = $("#harga_jual_price").val();
        if(harga_jual < harga_beli){
          alert("Besaran harga tidak di Izinkan !")
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
                Get_data();
                $('#UBAHPRICE').modal('hide');
                document.getElementById('harga_jual_price').value = "";
            }
          });
        }
    });

  })
</script>