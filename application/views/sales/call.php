<div class="container">
  <br/><br/><br/>
  <div class="box-header with-border" align="center">
    <h3 class="box-title">Halaman Call Outlet</h3>
  </div>
  <!-- /.box-header -->
  <!-- form start -->
  <form role="form" id="tmbhunit" class="form-horizontal">
    <div class="box-body">
      <div class="form-group" align="center">
        <input type="text" name="nama_outlet" id="nama_outlet" class="form-control input-sm" placeholder="Search Nama Outlet..." autofocus required>
      </div>
      <div class="form-group" align="center">
        <label>
          <input type="radio" name="kondisi" id="kondisi" value="Transaksi" checked>&nbsp;Transaksi&nbsp;&nbsp;
        </label>
        <label>
          <input type="radio" name="kondisi" id="kondisi" value="Tutup">&nbsp;Tutup&nbsp;&nbsp;
        </label>
        <label>
          <input type="radio" name="kondisi" id="kondisi" value="TKP">&nbsp;TKP&nbsp;&nbsp;
        </label>
        <label>
          <input type="radio" name="kondisi" id="kondisi" value="Tidak Transaksi">&nbsp;No&nbsp;&nbsp;
        </label>
        <label>
          <input type="radio" name="kondisi" id="kondisi" value="Macet">&nbsp;Macet&nbsp;&nbsp;
        </label>
      </div>
      <div class="form-group">
        <button type="button" class="btn btn-xs btn-flat btn-default active pull-right" id="btn_informasi"><i class="fa fa-info-circle"></i> Informasi</button>
      </div>
    </div>

    <!-- Hidden form -->
    <input type="hidden" name="tanggal" id="tanggal" value="<?php echo date('Y-m-d'); ?>">
    <input type="hidden" name="status" id="status" value="undeliver">
    <input type="hidden" name="no_nota_penjualan" id="no_nota_penjualan" value="PN">
    <input type="hidden" name="nama_salesman" id="nama_salesman">
    <input type="hidden" name="rute" id="rute">
    <input type="hidden" name="id_outlet" id="id_outlet">
    <input type="hidden" name="nama_produk_alias" id="nama_produk_alias">
    <input type="hidden" name="tipe_pembelian" id="tipe_pembelian">
    <input type="hidden" name="tempo" id="tempo" value="30">
    <input type="hidden" name="id_file" id="id_file" value="KOSONG">
    <input type="hidden" name="id_produk" id="id_produk">
    <input type="hidden" name="isi_kemasan" id="isi_kemasan">
    <!-- End Hidden form -->

    <!-- harga -->
    <input type="hidden" name="harga_beli" id="harga_beli">
    <input type="hidden" name="harga_gb_200_dus" id="harga_gb_200_dus">
    <input type="hidden" name="harga_gb_150_dus" id="harga_gb_150_dus">
    <input type="hidden" name="harga_gb_50_dus" id="harga_gb_50_dus">
    <input type="hidden" name="harga_gb_k_50_dus" id="harga_gb_k_50_dus">
    <input type="hidden" name="harga_jpc_dus" id="harga_jpc_dus">
    <input type="hidden" name="harga_jpc_botol" id="harga_jpc_botol">
    <input type="hidden" name="harga_jpt_dus" id="harga_jpt_dus">
    <input type="hidden" name="harga_jpt_botol" id="harga_jpt_botol">
    <input type="hidden" name="harga_ky_t_bayar" id="harga_ky_t_bayar">
    <input type="hidden" name="harga_ky_r_jual" id="harga_ky_r_jual">
    <!-- harga -->

    <div id="page_calculator">
      <div class="box-footer">
        <div class="form-group" align="center">
          <label>
            <input type="checkbox" name="apakah_jpc_dus" id="apakah_jpc_dus"> JPC Dus&nbsp;&nbsp;&nbsp;
          </label>
          <label>
            <input type="checkbox" name="apakah_jpc_botol" id="apakah_jpc_botol" checked> JPC Botol&nbsp;&nbsp;&nbsp;
          </label>
          <label>
            <input type="checkbox" name="apakah_jpt_dus" id="apakah_jpt_dus"> JPT Dus&nbsp;&nbsp;&nbsp;
          </label>
          <label>
            <input type="checkbox" name="apakah_jpt_botol" id="apakah_jpt_botol"> JPT Botol&nbsp;&nbsp;&nbsp;
          </label>
          <label>
            <input type="checkbox" name="apakah_konsinyasi" id="apakah_konsinyasi"> Konsinyasi&nbsp;&nbsp;&nbsp;
          </label>
        </div>
        <div class="form-group">
          <input type="text" name="nama_produk" id="nama_produk" class="form-control input-sm" placeholder="Search produk...">
          <input type="number" class="form-control input-sm" name="jumlah" id="jumlah" value="1" min="1">      
        </div>
        <div class="form-group">
          <button type="button" class="add btn btn-xs btn-flat btn-primary active pull-right" id="button_produk"><i class="fa fa-plus"></i> Tambah</button>
        </div>
      </div>

      <div class="box-footer">
        <div class="table-responsive">
          <table class="table table-bordered table-striped" id="mydata">
            <thead>
              <tr>
                <th class="text-center" width="30">No</th>
                <th class="text-center">Produk</th>
                <th class="text-center" width="150">Harga</th>
                <th class="text-center" width="100">(Qty)</th>
                <th class="text-center" width="150">Subtotal</th>
                <th class="text-center" width="50"></th>
              </tr>
            </thead>
            <tbody id="cartBody">
              <tr>
                <td class="text-center" width="30"></td>
                <td></td>
                <td class="text-center" width="150"></td>
                <td class="text-center" width="100"></td>
                <td class="text-center" width="150"></td>
                <td class="text-center" width="50" style="text-align: right;"></td>
              </tr>
            </tbody>
            <tfoot>                  
              <tr>
                <th colspan="4" class="text-right">Total Harga</th>
                <th colspan="2" class="text-right"><div id="totalCart"></div></th>
              <tr>
            </tfoot>
          </table>
        </div>
      </div>     
    </div>
    <div class="box-footer">
      <button type="reset" class="btn btn-flat btn-sm btn-default active" id="reset"><i class="fa fa-refresh"></i> Reset</button>
      <a href="<?php echo base_url('call/tandaterima'); ?>"><button type="button" class="btn btn-flat btn-sm btn-warning active"><i class="fa fa-money"></i> Bayar</button></a>
      <button type="button" id="btn_simpan" class="btn btn-flat btn-sm btn-success pull-right" disabled="disabled"><i class="fa fa-send-o"></i> Submit</button>
    </div>
  </form>
</div>

<!-- Modal Start -->
<div class="modal fade" id="UPLOAD">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-body">
        <div>
          <div class="input-group input-group-sm">
            <input id="files" type="file" name="files[]" multiple class="form-control">
            <div class="input-group-btn">
              <button type="button" id="upload" class="btn btn-success"><i class="fa fa-upload"></i></button>
            </div>
          </div>
          <div id="progress-wrp">
            <div class="progress-bar"></div>
            <div class="status">0%</div>
          </div>
        </div> 
        <div id="result"></div>
      </div>
    </div>
  </div>
</div>
<!-- Modal End -->

<!-- Modal Informasi -->
<div class="modal fade" id="INFORMASI">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <input type="hidden" name="id_informasi" id="id_informasi">
        <input type="hidden" name="time" id="time" value="<?php echo(date("d F Y h:i:s", time())); ?>">
        <input type="hidden" name="nama" id="nama" value="<?php echo $this->session->userdata('nama_olikuapp'); ?>">
        <textarea class="form-control" name="keterangan" id="keterangan"></textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-primary" id="btn_simpan_informasi">Save</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal Informasi -->

<script type="text/javascript">
  $(document).ready(function(){
    $( "#nama_outlet" ).autocomplete({
      source: "<?php echo site_url('penjualan/Cari_outlet/?');?>",
      minLength: 3,
      select: function (event, ui) {
        $("#nama_outlet").val(ui.item.value);
        $("#id_outlet").val(ui.item.id_outlet);
        $("#nama_salesman").val(ui.item.nama_salesman);
        $("#rute").val(ui.item.rute);
        $("#tipe_pembelian").val(ui.item.tipe_pembelian);
        $('#button_upload').attr('disabled', false);
        $('#nama_outlet').attr('readonly', true);
        $('#UPLOAD').modal('show');
        $('#btn_simpan').attr('disabled', false);
      }
    });

    if ($('#apakah_karton').is(':checked')) {
      var link = '<?php echo site_url('call/Cari_produk_jpc/?');?>';
    }else{
      var link = "<?php echo site_url('call/Cari_produk_kon/?');?>";
    }

    $( "#nama_produk" ).autocomplete({
      source: "<?php echo site_url('penjualan/Cari_produk/?');?>",
      minLength: 3,
      select: function (event, ui) {
        $("#nama_produk").val(ui.item.value);
        $("#id_produk").val(ui.item.id_produk);
        $("#nama_produk_alias").val(ui.item.nama_produk);
        $("#isi_kemasan").val(ui.item.kemasan);
        $("#harga_beli").val(ui.item.harga_beli);
        $("#harga_gb_200_dus").val(ui.item.harga_gb_200_dus);
        $("#harga_gb_150_dus").val(ui.item.harga_gb_150_dus);
        $("#harga_gb_50_dus").val(ui.item.harga_gb_50_dus);
        $("#harga_gb_k_50_dus").val(ui.item.harga_gb_k_50_dus);
        $("#harga_jpc_dus").val(ui.item.harga_jpc_dus);
        $("#harga_jpc_botol").val(ui.item.harga_jpc_botol);
        $("#harga_jpt_dus").val(ui.item.harga_jpt_dus);
        $("#harga_jpt_botol").val(ui.item.harga_jpt_botol);
        $("#harga_ky_t_bayar").val(ui.item.harga_ky_t_bayar);
        $("#harga_ky_r_jual").val(ui.item.harga_ky_r_jual);
        $('#jumlah').focus();
      }
    });

    Refresh()
    var mycart_penjualan_lapangan = [];
      $(function () {
        if (localStorage.mycart){
          mycart_penjualan_lapangan = JSON.parse(localStorage.mycart_penjualan_lapangan);
          showCart();
        }
      });

    // mengambil data button ketika button dengan class add di click

    $("#reset").click(function(){
      location.reload();
      Refresh()
    })

    $("#jumlah").on('keyup', function (e) {
      if (e.keyCode == 13) {
        $('#button_produk').click();
      }
    })
    
    // mengambil data button ketika button dengan class add di click
    $('.add').click(function(){

      if ($('#apakah_jpc_dus').is(':checked')) {
        var tanggal_add = $("#tanggal").val();
        var no_nota_penjualan_add = $("#no_nota_penjualan").val();
        var nama_salesman_add = $("#nama_salesman").val();
        var rute_add = $("#rute").val();
        var id_outlet_add = $("#id_outlet").val();
        var id_produk_add = $("#id_produk").val();
        var jumlah_karton = $("#jumlah").val();
        var isi_kemasan = $("#isi_kemasan").val();
        var jumlah_add = jumlah_karton * isi_kemasan
        var harga_karton = $("#harga_jpc_dus").val();
        var harga_add = harga_karton
        var tipe_pembelian_add = $("#tipe_pembelian").val();
        var tempo_add = $("#tempo").val();
        var status_add = $("#status").val();
        var id_file_penjualan_add = $("#id_file").val();
        var subtotal_add = harga_add * jumlah_add;
        var nama_produk_add = $("#nama_produk_alias").val();
        var nama_admin_add = $("#nama_admin").val();
        var satuan_add = 'dus';
        var kemasan_add = $("#isi_kemasan").val();
      } else if ($('#apakah_jpc_botol').is(':checked')) {
        var tanggal_add = $("#tanggal").val();
        var no_nota_penjualan_add = $("#no_nota_penjualan").val();
        var nama_salesman_add = $("#nama_salesman").val();
        var rute_add = $("#rute").val();
        var id_outlet_add = $("#id_outlet").val();
        var id_produk_add = $("#id_produk").val();
        var jumlah_add = $("#jumlah").val();
        var harga_add = $("#harga_jpc_botol").val();
        var tipe_pembelian_add = $("#tipe_pembelian").val();
        var tempo_add = $("#tempo").val();
        var status_add = $("#status").val();
        var id_file_penjualan_add = $("#id_file").val();
        var subtotal_add = harga_add * jumlah_add;
        var nama_produk_add = $("#nama_produk_alias").val();
        var nama_admin_add = $("#nama_admin").val();
        var satuan_add = 'pcs';
        var kemasan_add = $("#isi_kemasan").val();
      } else if ($('#apakah_jpt_dus').is(':checked')) {
        var tanggal_add = $("#tanggal").val();
        var no_nota_penjualan_add = $("#no_nota_penjualan").val();
        var nama_salesman_add = $("#nama_salesman").val();
        var rute_add = $("#rute").val();
        var id_outlet_add = $("#id_outlet").val();
        var id_produk_add = $("#id_produk").val();
        var jumlah_karton = $("#jumlah").val();
        var isi_kemasan = $("#isi_kemasan").val();
        var jumlah_add = jumlah_karton * isi_kemasan
        var harga_karton = $("#harga_jpt_dus").val();
        var harga_add = harga_karton
        var tipe_pembelian_add = $("#tipe_pembelian").val();
        var tempo_add = $("#tempo").val();
        var status_add = $("#status").val();
        var id_file_penjualan_add = $("#id_file").val();
        var subtotal_add = harga_add * jumlah_add;
        var nama_produk_add = $("#nama_produk_alias").val();
        var nama_admin_add = $("#nama_admin").val();
        var satuan_add = 'dus';
        var kemasan_add = $("#isi_kemasan").val();
      } else if ($('#apakah_jpt_botol').is(':checked')) {
        var tanggal_add = $("#tanggal").val();
        var no_nota_penjualan_add = $("#no_nota_penjualan").val();
        var nama_salesman_add = $("#nama_salesman").val();
        var rute_add = $("#rute").val();
        var id_outlet_add = $("#id_outlet").val();
        var id_produk_add = $("#id_produk").val();
        var jumlah_add = $("#jumlah").val();
        var harga_add = $("#harga_jpt_botol").val();
        var tipe_pembelian_add = $("#tipe_pembelian").val();
        var tempo_add = $("#tempo").val();
        var status_add = $("#status").val();
        var id_file_penjualan_add = $("#id_file").val();
        var subtotal_add = harga_add * jumlah_add;
        var nama_produk_add = $("#nama_produk_alias").val();
        var nama_admin_add = $("#nama_admin").val();
        var satuan_add = 'pcs';
        var kemasan_add = $("#isi_kemasan").val();
      } else if ($('#apakah_konsinyasi').is(':checked')) {
        var tanggal_add = $("#tanggal").val();
        var no_nota_penjualan_add = $("#no_nota_penjualan").val();
        var nama_salesman_add = $("#nama_salesman").val();
        var rute_add = $("#rute").val();
        var id_outlet_add = $("#id_outlet").val();
        var id_produk_add = $("#id_produk").val();
        var jumlah_add = $("#jumlah").val();
        var harga_add = $("#harga_ky_t_bayar").val();
        var tipe_pembelian_add = $("#tipe_pembelian").val();
        var tempo_add = $("#tempo").val();
        var status_add = $("#status").val();
        var id_file_penjualan_add = $("#id_file").val();
        var subtotal_add = harga_add * jumlah_add;
        var nama_produk_add = $("#nama_produk_alias").val();
        var nama_admin_add = $("#nama_admin").val();
        var satuan_add = 'pcs';
        var kemasan_add = $("#isi_kemasan").val();
      }

      addToCart(tanggal_add, no_nota_penjualan_add, nama_salesman_add, rute_add, id_outlet_add, id_produk_add, jumlah_add, harga_add, tipe_pembelian_add, tempo_add, status_add, id_file_penjualan_add, subtotal_add, nama_produk_add, nama_admin_add, satuan_add, kemasan_add); 
      document.getElementById('nama_produk').value = "";
      document.getElementById('jumlah').value = "1";
      $('#button_submit').attr('disabled', false);
      $('#nama_produk').focus();

    })

    function Refresh(){
      document.getElementById('nama_outlet').value = "";
      $('#nama_outlet').attr('disabled', false);
      $('#button_upload').attr('disabled', true);
      document.getElementById('nama_produk').value = "";
      document.getElementById('jumlah').value = "1";
      localStorage.removeItem("mycart_penjualan_lapangan");
      clearCart()
    }

    function addToCart(tanggal_add, no_nota_penjualan_add, nama_salesman_add, rute_add, id_outlet_add, id_produk_add, jumlah_add, harga_add, tipe_pembelian_add, tempo_add, status_add, id_file_penjualan_add, subtotal_add, nama_produk_add, nama_admin_add, satuan_add, kemasan_add) {
      //cek data in cart then update qty
      for (var i in mycart_penjualan_lapangan) {
        if(mycart_penjualan_lapangan[i].id_produk == id_produk_add)
        {
          alert('Data produk sudah ada !')
          return;          
        }
      }

      // jika tidak ada insert all
      var item = { tanggal: tanggal_add, no_nota_penjualan: no_nota_penjualan_add, nama_salesman: nama_salesman_add, rute: rute_add, id_outlet: id_outlet_add, id_produk: id_produk_add, jumlah: jumlah_add, harga: harga_add, tipe_pembelian: tipe_pembelian_add, tempo: tempo_add, status: status_add, id_file_penjualan: id_file_penjualan_add, subtotal: subtotal_add, nama_produk: nama_produk_add, nama_admin: nama_admin_add, satuan: satuan_add, kemasan: kemasan_add }; 
      mycart_penjualan_lapangan.push(item);
      saveCart();
      showCart();
    }

    window.deleteItem = function(index){
      mycart_penjualan_lapangan.splice(index,1); // hapus item berdasarkan index
      saveCart();
      showCart();
    }

    function saveCart() {
      if( window.localStorage){
        localStorage.mycart_penjualan_lapangan = JSON.stringify(mycart_penjualan_lapangan);
      }
    }

    function clearCart(){
      $("#cartBody").empty();
      var row = '<tr>'+
                  '<td class="text-center" width="30" align="center"></td>'+
                  '<td></td>'+
                  '<td class="text-center" width="150"></td>'+
                  '<td class="text-center" width="100"></td>'+
                  '<td class="text-center" width="150"></td>'+
                  '<td class="text-center" width="50" style="text-align: right;"></td>'+
                '</tr>';

      $("#cartBody").append(row); //append ul dengan id cartbody
    }

    function showCart() {
      
      $("#cartBody").empty();

      for (var i in mycart_penjualan_lapangan) { //tampilkan data dari local storage mycart_penjualan_lapangan, template bisa anda sesuaikan
        var item = mycart_penjualan_lapangan[i];
        var row = '<tr>'+
                  '<td class="text-center" width="30" align="center">'+[parseInt(i)+1]+'</td>'+
                  '<td>'+item.nama_produk+'</td>'+
                  '<td class="text-center" width="150">'+rubah(item.harga)+'</td>';
				  if(item.satuan == "dus"){
					row += '<td class="text-center" align="100">'+item.jumlah/item.kemasan+' '+item.satuan+'</td>';
				  }else{
					row += '<td class="text-center" align="100">'+item.jumlah+' '+item.satuan+'</td>';
				  }
                  
           row += '<td class="text-center" width="150">'+rubah(item.subtotal)+'</td>';
           row += '<td class="text-center" width="50" style="text-align: right;"><button class="btn btn-danger btn-xs" onclick="deleteItem(' + i + ')"><i class="fa fa-trash"  > </i></button></td>';
           row += '</tr>';

        $("#cartBody").append(row); //append ul dengan id cartbody
      }

      // untuk total
      var total = 0;
      for(var i = 0; i < mycart_penjualan_lapangan.length; i++) {
        total += mycart_penjualan_lapangan[i].subtotal; //jumlahkan keseluruhan row subtotal dari mycart_penjualan_lapangan untuk mendapatkan total
      }
      totalCart.innerHTML = rubah(total); 
      //isikan div dengan id totalcart dengan nilai diatas
    }

    function rubah(angka){
      var reverse = angka.toString().split('').reverse().join(''),
      ribuan = reverse.match(/\d{1,3}/g);
      ribuan = ribuan.join('.').split('').reverse().join('');
      return ribuan;
    }

    $('input[type=radio][name=kondisi]').change(function() {
      if (this.value == 'Transaksi') {
        location.reload();
      }
      else {
        $("#page_calculator").empty();
        var row = '';
        $("#page_calculator").append(row);
      }
    });

    $("#button_upload").click(function(){
      $('#btn_simpan').attr('disabled', false);
    })

    $("#btn_simpan").click(function(){
      var tanggal = $("#tanggal").val();
      var id_outlet = $("#id_outlet").val();
      var kondisi = $("#kondisi").val();
      var id_file = $("#id_file").val();
      var nama_salesman = $("#nama_salesman").val();
      $.ajax({
        type      : "POST",
        url       : "<?php echo base_url('call/simpan_call'); ?>",
        dataType  : "JSON",
        data      : {
                      tanggal: tanggal,
                      id_outlet: id_outlet,
                      kondisi: kondisi,
                      id_file: id_file,
                      nama_salesman: nama_salesman
                    },
        success   : function(data){
          swal({
            title: "Simpan Call Berhasil !",
            type: "success",
            confirmButtonColor: "#2C3FF9",
            showCancelButton: false,
            confirmButtonText: "OK",
            closeOnConfirm: true
          }, function(isConfirm) {
            location.reload();
          });
        }
      });

    })

    /** data informasi */

    $("#btn_informasi").click(function(){
      get_id_informasi();
      $('#INFORMASI').modal('show');
    })

    function get_id_informasi(){
      $.ajax({
        type      : "GET",
        url       : "<?php echo base_url('call/Get_id_informasi'); ?>",
        dataType  : "JSON",
        success   : function(data){
          $("#id_informasi").val(data);
        }
      });
    }

    $("#btn_simpan_informasi").click(function(){
      var id_informasi = $("#id_informasi").val();
      var tanggal = $("#tanggal").val();
      var time = $("#time").val();
      var nama = $("#nama").val();
      var keterangan = $("#keterangan").val();
      $.ajax({
        type      : "POST",
        url       : "<?php echo base_url('call/Simpan_informasi'); ?>",
        dataType  : "JSON",
        data      : {
                      id_informasi: id_informasi,
                      tanggal: tanggal,
                      time: time,
                      nama: nama,
                      keterangan: keterangan
                    },
        success   : function(data){
          $('#INFORMASI').modal('hide');
          document.getElementById('keterangan').value = "";
        }
      });
    })

    /** data informasi */

  })
</script>