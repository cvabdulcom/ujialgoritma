<div class="container">
  <br/><br/><br/>
  <div class="box-header with-border" align="center">
    <h3 class="box-title">Perbaikan Outlet</h3><br>
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
      <div id="show_data"></div>
      
    </div>
    <div class="box-footer">
      <button type="button" id="btn_simpan" class="btn btn-flat btn-sm btn-success pull-right" disabled="disabled"><i class="fa fa-save"></i> Simpan</button>
    </div>
  </form>
</div>

<script type="text/javascript">
  $(document).ready(function(){

    $( "#nama_outlet" ).autocomplete({
      source: "<?php echo site_url('perbaikan/Cari_outlet/?');?>",
      minLength: 3,
      select: function (event, ui) {
        $("#nama_outlet").val(ui.item.value);
        $("#id_outlet").val(ui.item.id_outlet);
        $('#nama_outlet').attr('disabled', true);
        $('#tipe_pembelian').attr('disabled', false);
        $('#btn_simpan').attr('disabled', false);
        Show_data(ui);
      }
    });

    function Show_data(ui){
      $("#show_data").empty();

      var data = '<div class="form-group">'+
            '<label class="col-sm-2 control-label">Tipe Pembelian</label>'+
            '<div class="col-sm-10">'+
            '<select name="tipe_pembelian" id="tipe_pembelian" class="form-control input-sm" autofocus required>'+
            '<option value="">-</option>'+
            '<option value="J">Jual Putus</option>'+
            '<option value="K">Kosinyasi</option><'+
            '<option value="G">Group Buying</option>'+
            '</select>'+
            '</div>'+
            '</div>'+
            '<div class="form-group">'+
            '<label class="col-sm-2 control-label">Status Program</label>'+
            '<div class="col-sm-10">'+
            '<select name="status_program" id="status_program" class="form-control input-sm" required>'+
            '<option value="">-</option>'+
            '<option value="JP CASH">JP CASH</option>'+
            '<option value="PENDING">PENDING</option><'+
            '<option value="GROUP BUYING">GROUP BUYING</option>'+
            '</select>'+
            '</div>'+
            '</div>'+
            '<div class="form-group">'+
            '<label class="col-sm-2 control-label">Kecamatan</label>'+
            '<div class="col-sm-10">'+
            '<input type="text" name="kecamatan" id="kecamatan" class="form-control input-sm" placeholder="-" value="'+ ui.item.kecamatan +'">'+
            '</div>'+
            '</div>'+
            '<div class="form-group">'+
            '<label class="col-sm-2 control-label">Kota/Kabupaten</label>'+
            '<div class="col-sm-10">'+
            '<input type="text" name="kota_kabupaten" id="kota_kabupaten" class="form-control input-sm" value="'+ ui.item.kabupaten +'">'+
            '</div>'+
            '</div>'+
            '<div class="form-group">'+
            '<label class="col-sm-2 control-label">Latitude Longitude</label>'+
            '<div class="col-sm-10">'+
            '<div class="row">'+
            '<div class="col-xs-4">'+
            '<input type="text" name="latitude" id="latitude" class="form-control input-sm" placeholder="Latitude" maxlength="4" size="20" value="'+ ui.item.latitude +'">'+
            '</div>'+
            '<div class="col-xs-4">'+
            '<input type="text" name="longitude" id="longitude" class="form-control input-sm" placeholder="Longitude" value="'+ ui.item.longitude +'">'+
            '</div>'+
            '<div class="col-xs-3">'+
            '<button type="button" class="btn btn-info btn-flat btn-sm" onclick="getLocation()"><i class="fa fa-map-marker"></i> GPS</button>'+
            '</div>'+
            '</div>'+
            '</div>'+
            '</div>'+
            '<div class="form-group">'+
            '<label class="col-sm-2 control-label">Nama Pemilik</label>'+
            '<div class="col-sm-10">'+
            '<input type="text" name="nama_pemilik" id="nama_pemilik" class="form-control input-sm" placeholder="-" value="'+ ui.item.nama_pemilik +'">'+
            '</div>'+
            '</div>'+
            '<div class="form-group">'+
            '<label class="col-sm-2 control-label">Telepon</label>'+
            '<div class="col-sm-10">'+
            '<input type="number" name="telepon" id="telepon" class="form-control input-sm" placeholder="-" value="'+ ui.item.telepon +'">'+
            '</div>'+
            '</div>'+
            '<div class="form-group">'+
            '<label class="col-sm-2 control-label">Whatsapp</label>'+
            '<div class="col-sm-10">'+
            '<input type="number" name="whatsapp" id="whatsapp" class="form-control input-sm" value="'+ ui.item.ada_whatsapp +'">'+
            '</div>'+
            '</div>'+
            '<div class="form-group">'+
            '<label class="col-sm-2 control-label">Jumlah Pegawai</label>'+
            '<div class="col-sm-10">'+
            '<input type="number" name="jumlah_pegawai" id="jumlah_pegawai" class="form-control input-sm" value="'+ ui.item.jumlah_pegawai +'">'+
            '</div>'+
            '</div>'+
            '<div class="form-group">'+
            '<label class="col-sm-2 control-label">Alamat</label>'+
            '<div class="col-sm-10">'+
            '<textarea name="alamat" id="alamat" class="form-control input-sm" placeholder="-" required>'+ ui.item.alamat +'</textarea>'+
            '</div>'+
            '</div>';
            
      $("#show_data").append(data);
    }

    $("#btn_simpan").click(function(){
      var id_outlet = $('#id_outlet').val();
      var tipe_pembelian = $('#tipe_pembelian').val();
      var status_program = $('#status_program').val();
      var kecamatan = $('#kecamatan').val();
      var kabupaten = $('#kota_kabupaten').val();
      var latitude = $('#latitude').val();
      var longitude = $('#longitude').val();
      var nama_pemilik = $('#nama_pemilik').val();
      var telepon = $('#telepon').val();
      var ada_whatsapp = $('#whatsapp').val();
      var jumlah_pegawai = $('#jumlah_pegawai').val();
      var alamat = $('#alamat').val();

      $.ajax({
          type: "POST",
          url: "<?php echo base_url('perbaikan/Simpan_perbaikan'); ?>",
          data: {
                  id_outlet: id_outlet,
                  tipe_pembelian: tipe_pembelian,
                  status_program: status_program,
                  kecamatan: kecamatan,
                  kabupaten: kabupaten,
                  latitude: latitude,
                  longitude: longitude,
                  nama_pemilik: nama_pemilik,
                  telepon: telepon,
                  ada_whatsapp: ada_whatsapp,
                  jumlah_pegawai: jumlah_pegawai,
                  alamat: alamat
                },
          dataType: "json",
        success: function(data){
          swal({
            title: "Perubahan Disimpan !",
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

  })
</script>