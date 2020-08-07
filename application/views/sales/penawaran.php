<div class="container">
  <br/><br/><br/>
  <div class="box-header with-border" align="center">
    <h3 class="box-title">Penawaran Ulang</h3><br>
  </div>
  <!-- form start -->
  <form role="form" id="tmbhunit" class="form-horizontal">
    <div class="box-body">
      <div class="form-group">
        <label class="col-sm-2 control-label">Nama Outlet</label>
        <div class="col-sm-10">
        <input type="text" name="nama_outlet" id="nama_outlet" class="form-control input-sm" placeholder="Search Nama Outlet..." autofocus required>
        </div>
      </div>

      <input type="hidden" name="id_outlet" id="id_outlet">

      <div class="form-group">
        <label class="col-sm-2 control-label">Tipe Pembelian</label>
        <div class="col-sm-10">
          <select name="tipe_pembelian" id="tipe_pembelian" class="form-control" disabled="disabled" required>
            <option value="">-</option>
            <option value="J">Jual Putus</option>
            <option value="K">Kosinyasi</option>
            <option value="G">Group Buying</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Status Program</label>
        <div class="col-sm-10">
          <select name="status_program" id="status_program" class="form-control" disabled="disabled" required>
            <option value="">-</option>
            <option value="JP CASH">JP CASH</option>
            <option value="PENDING">PENDING</option>
            <option value="GROUP BUYING">GROUP BUYING</option>
          </select>
        </div>
      </div>
    </div>
    <div class="box-footer">
      <button type="button" id="btn_simpan" class="btn btn-flat btn-sm btn-success pull-right" disabled="disabled"><i class="fa fa-send-o"></i> Simpan</button>
    </div>
    <div class="box-footer form-horizontal table-responsive">
      <table id="example1" class="table table-bordered table-hover">
	    <thead>
	      <tr class="bg-info">
	        <th class="text-center">No</th>
	        <th class="text-center">Nama Outlet</th>
	        <th class="text-center">Alamat</th>
	        <th class="text-center">Telp/WA</th>
	        <th class="text-center">Pemilik</th>
	        <th class="text-center">Long/Lat</th>
	        <th class="text-center">Nama Sales</th>
	        <th class="text-center"></th>
	      </tr>
	    </thead>
	    <tbody>
	    <?php
	      $no=0;
	      foreach($outlet->result_array() as $tampil):
	        $no++;
	        $nama_outlet = $tampil['nama_outlet'];
	        $alamat = $tampil['alamat'];
	        $kecamatan = $tampil['kecamatan'];
	        $kabupaten = $tampil['kabupaten'];
	        $telepon = $tampil['telepon'];
          $ada_whatsapp = $tampil['ada_whatsapp'];
	        $nama_pemilik = $tampil['nama_pemilik'];
	        $longitude = $tampil['longitude'];
	        $latitude = $tampil['latitude'];
	        $foto_outlet = $tampil['foto_outlet'];
	        $tipe_pembelian = $tampil['tipe_pembelian'];
	        $status_program = $tampil['status_program'];
	        $id_outlet = $tampil['id_outlet'];
	        $nama_salesman = $tampil['nama_salesman'];
	        $rute = $tampil['rute'];
	        $foto_stokawal = $tampil['foto_stokawal'];
	        $foto_kontrak = $tampil['foto_kontrak'];
	        $foto_kontrak_tempo = $tampil['foto_kontrak_tempo'];
	    ?>
	    <tr>
	      <td class="text-center" width="30"><?php echo $no; ?></td>
	      <td><?php echo $nama_outlet; ?></td>
	      <td><?php echo $alamat; ?>, <?php echo $kecamatan; ?>-<?php echo $kabupaten; ?></td>
	      <td class="text-center">
	        <?php 
	          if($ada_whatsapp === "0"){
	            echo $telepon;
	          }else{
	            echo $ada_whatsapp;
	          }						 
	        ?>
	      </td>
	      <td class="text-center"><?php echo $nama_pemilik; ?></td>
	      <td class="text-center"><?php echo $longitude; ?>, <?php echo $latitude; ?></td>
	      <td class="text-center"><?php echo $nama_salesman; ?></td>
	      <td class="text-center">
	        <a href="http://www.google.com/maps/place/<?php echo $longitude; ?>, <?php echo $latitude; ?>" target="_blank">View GPS</a>
	      </td>
	    </tr>
	    <?php endforeach; ?>
	    </tbody>
	  </table>
    </div>
  </form>
</div>

<script type="text/javascript">
  $(document).ready(function(){

    $( "#nama_outlet" ).autocomplete({
      source: "<?php echo site_url('penawaran/Cari_outlet/?');?>",
      minLength: 3,
      select: function (event, ui) {
        $("#nama_outlet").val(ui.item.value);
        $("#id_outlet").val(ui.item.id_outlet);
        $('#tipe_pembelian').attr('disabled', false);
        $('#status_program').attr('disabled', false);
        $('#btn_simpan').attr('disabled', false);
      }
    });

    $("#btn_simpan").click(function(){
      Perubahan();
    })

    function Refresh(){
      document.getElementById('tipe_pembelian').text = "-";
      document.getElementById('tipe_pembelian').value = "";
      document.getElementById('status_program').text = "-";
      document.getElementById('status_program').value = "";
      document.getElementById('nama_outlet').value = "";
      $('#tipe_pembelian').attr('disabled', true);
      $('#btn_simpan').attr('disabled', true);
    }

    function Perubahan(){
      var id_outlet = $("#id_outlet").val();
      var tipe_pembelian = $("#tipe_pembelian").val();
      var status_program = $("#status_program").val();

      $.ajax({
        type      : "POST",
        url       : "<?php echo base_url('penawaran/simpan_perubahan'); ?>",
        dataType  : "JSON",
        data      : {
                      id_outlet: id_outlet,
                      tipe_pembelian: tipe_pembelian,
                      status_program: status_program
                    },
        success   : function(data){
          swal({
            title: "Perubahan Berhasil !",
            type: "success",
            confirmButtonColor: "#2C3FF9",
            showCancelButton: false,
            confirmButtonText: "OK",
            closeOnConfirm: true
          }, function(isConfirm) {              
            Refresh()
          });
        }
      });
    }

  })
</script>