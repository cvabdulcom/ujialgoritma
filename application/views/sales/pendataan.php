<div class="container">
  <br/><br/><br/>
  <div class="box-header with-border" align="center">
    <h3 class="box-title">Pendataan Outlet</h3>
  </div>
  <!-- /.box-header -->
  <!-- form start -->
  <form role="form" id="tmbhunit" class="form-horizontal" method="POST" action="<?php echo base_url('pendataan/tambah'); ?>">
    <div class="box-body">
      <div class="form-group">
        <label class="col-sm-2 control-label">Tipe Pembelian</label>
        <div class="col-sm-10">
          <select name="tipe_pembelian" id="tipe_pembelian" class="form-control" autofocus required>
            <option value="">-</option>
            <option value="J">Jual Putus</option>
            <option value="K">Kosinyasi</option>
            <option value="G">Group Buying</option>
            <option value="B">Belum Minat</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Nama Outlet</label>
        <div class="col-sm-10">
          <input type="hidden" name="id_outlet" id="id_outlet">
          <input type="text" name="nama_outlet" id="nama_outlet" class="form-control" placeholder="-" required>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Kecamatan</label>
        <div class="col-sm-10">
          <input type="text" name="kecamatan" id="kecamatan" class="form-control" placeholder="-" required>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Kota/Kabupaten</label>
        <div class="col-sm-10">
          <input type="text" name="kota_kabupaten" id="kota_kabupaten" class="form-control" placeholder="-" required>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Latitude Longitude</label>
        <div class="col-sm-10">
          <div class="row">
            <div class="col-xs-4">
              <input type="text" name="latitude" id="latitude" class="form-control" placeholder="Latitude" required>
            </div>
            <div class="col-xs-4">
              <input type="text" name="longitude" id="longitude" class="form-control" placeholder="Longitude" required>
            </div>
            <div class="col-xs-3">
              <button type="button" class="btn btn-info" onclick="getLocation()"><i class="fa fa-map-marker"></i> GPS</button>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Nama Pemilik</label>
        <div class="col-sm-10">
          <input type="text" name="nama_pemilik" id="nama_pemilik" class="form-control" placeholder="-" required>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Tipe Outlet</label>
        <div class="col-sm-10">
          <select name="tipe_outlet" id="tipe_outlet" class="form-control" required>
            <option value="">-</option>
            <option value="2W">2W</option>
            <option value="2W & 4W">2W & 4W</option>
            <option value="4W">4W</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Fasilitas</label>
        <div class="col-sm-10">
          <input type="text" name="fasilitas" id="fasilitas"class="form-control" placeholder="-" required>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Supplier</label>
        <div class="col-sm-10">
          <input type="text" name="supplier" id="supplier" class="form-control" placeholder="-" required>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Telepon</label>
        <div class="col-sm-10">
          <input type="number" name="telepon" id="telepon" class="form-control" placeholder="-" value="0" required>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Whatsapp</label>
        <div class="col-sm-10">
          <input type="number" name="whatsapp" id="whatsapp" class="form-control" value="0" required>
        </div>
      </div>
      <input type="hidden" name="tanggal_lahir" id="tanggal_lahir" class="form-control" value="<?php echo date('Y-m-d'); ?>">
      <div class="form-group">
        <label class="col-sm-2 control-label">Jumlah Pegawai</label>
        <div class="col-sm-10">
          <input type="number" name="jumlah_pegawai" id="jumlah_pegawai" class="form-control" value="0" required>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Alamat</label>
        <div class="col-sm-10">
          <textarea name="alamat" id="alamat" class="form-control" placeholder="-" required></textarea>
        </div>
      </div>
      <input type="hidden" name="rute" id="rute" value="0">
      <input type="hidden" name="nama_salesman" id="nama_salesman" value="<?php echo $this->session->userdata('nama_olikuapp'); ?>">
      <input type="hidden" name="status_program" id="status_program">
      <input type="hidden" name="foto_outlet" id="foto_outlet" value="KOSONG">
      <input type="hidden" name="foto_stokawal" id="foto_stokawal" value="KOSONG">
      <input type="hidden" name="foto_kontrak" id="foto_kontrak" value="KOSONG">
      <input type="hidden" name="foto_kontrak_tempo" id="foto_kontrak_tempo" value="KOSONG">
    </div>
    <div class="box-footer">
      <a href="<?php echo base_url(); ?>" ><button type="button" class="btn btn-default"><i class="fa fa-close"></i> Cancel</button></a>
      <button type="button" id="btn_simpan" class="btn btn-success pull-right"><i class="fa fa-send-o"></i> Submit</button>
    </div>
  </form>
</div><br/>
<script>
  function getLocation() {
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(codeAddressgps);
    } else {
      view.innerHTML = "Yah browsernya ngga support Geolocation bro!";
    }
  }

  function codeAddressgps(position){
    document.getElementById('longitude').value = position.coords.latitude;
    document.getElementById('latitude').value = position.coords.longitude;
  }
</script>
<script type="text/javascript">
  $(document).ready(function(){
   
    $("#btn_simpan").click(function(){
      get_id_outlet();     
      swal({
          title: "Simpan Outlet Berhasil !",
          type: "success",
          confirmButtonColor: "#2C3FF9",
          showCancelButton: false,
          confirmButtonText: "OK",
          closeOnConfirm: true
        }, function(isConfirm) {
          location.reload();
      }); 
    });

    function get_id_outlet(){
      $.ajax({
        type      : "GET",
        url       : "<?php echo base_url('pendataan/get_id_outlet'); ?>",
        dataType  : "JSON",
        success   : function(data){
          kode ="OT";
          id = kode+data;
          $("#id_outlet").val(id);
          save_outlet();
        }
      });
    }

    function save_outlet(){
      var id_outlet = $("#id_outlet").val();
      var nama_outlet = $("#nama_outlet").val();
      var kecamatan = $("#kecamatan").val();
      var kabupaten = $("#kota_kabupaten").val();
      var alamat = $("#alamat").val();
      var latitude = $("#latitude").val();
      var longitude = $("#longitude").val();
      var nama_pemilik = $("#nama_pemilik").val();
      var telepon = $("#telepon").val();
      var ada_whatsapp = $("#whatsapp").val();
      var tanggal_lahir = $("#tanggal_lahir").val();
      var tipe_outlet = $("#tipe_outlet").val();
      var jumlah_pegawai = $("#jumlah_pegawai").val();
      var fasilitas = $("#fasilitas").val();
      var supplier = $("#supplier").val();
      var rute = $("#rute").val();
      var tipe_pembelian = $("#tipe_pembelian").val();
      var nama_salesman = $("#nama_salesman").val();      
      var foto_outlet = $("#foto_outlet").val();
      var foto_stokawal = $("#foto_stokawal").val();
      var foto_kontrak = $("#foto_kontrak").val();
      var foto_kontrak_tempo = $("#foto_kontrak_tempo").val();

      if(tipe_pembelian == "J"){
        var status_program = "JP CASH";
      }else if(tipe_pembelian == "K"){
        var status_program = "PENDING";
      }else if(tipe_pembelian == "G"){
        var status_program = "GB CASH";
      }else if(tipe_pembelian == "B"){
        var status_program = "BELUM MINAT";
      }

      $.ajax({
        type      : "POST",
        url       : "<?php echo base_url('pendataan/tambah'); ?>",
        dataType  : "JSON",
        data      : {
                      id_outlet: id_outlet,
                      nama_outlet: nama_outlet,
                      kecamatan: kecamatan,
                      kabupaten: kabupaten,
                      alamat: alamat,
                      latitude: latitude,
                      longitude: longitude,
                      nama_pemilik: nama_pemilik,
                      telepon: telepon,
                      ada_whatsapp: ada_whatsapp,
                      tanggal_lahir: tanggal_lahir,
                      tipe_outlet: tipe_outlet,
                      jumlah_pegawai: jumlah_pegawai,
                      fasilitas: fasilitas,
                      supplier: supplier,
                      rute: rute,
                      tipe_pembelian: tipe_pembelian,
                      nama_salesman: nama_salesman,
                      status_program: status_program,
                      foto_outlet: foto_outlet,
                      foto_stokawal: foto_stokawal,
                      foto_kontrak: foto_kontrak,
                      foto_kontrak_tempo: foto_kontrak_tempo,
                    },
        success : function(data){
          
        }  
      });      
    }

  });
</script>