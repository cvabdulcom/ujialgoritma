<div class="container">
  <br/><br/><br/>
  <div class="box-header with-border" align="center">
    <h3 class="box-title">Tanda Terima</h3><br>
    <small><?php echo $this->session->userdata('nama_olikuapp'); ?>, <?php $newDate = date('d F Y');  echo $newDate; ?></small>
  </div>
  <!-- /.box-header -->
  <!-- form start -->
  <form role="form" id="tmbhunit" class="form-horizontal">
    <div class="box-body">
      <div class="form-group">
        <label class="col-sm-2 control-label">Nama Outlet</label>
        <div class="col-sm-10">
          <input type="text" class="form-control input-sm" placeholder="-" autofocus>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">No Nota</label>
        <div class="col-sm-10">
          <input type="text" class="form-control input-sm" placeholder="-" autofocus>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Nominal</label>
        <div class="col-sm-10">
          <input type="text" id="rupiah" class="form-control input-sm" placeholder="-">
        </div>
      </div>
      <div class="form-group" align="center">
        <label class="col-sm-2 control-label">TTD Customer</label><button type="button" id="clear">Clear</button>
        <div>
          <canvas id="signature-pad" class="signature-pad" width=800 height=150></canvas>          
        </div>
      </div>
      <!-- <div class="form-group" align="center">
        <label class="col-sm-2 control-label">TTD Outlet</label><input type="button" id="clear" onclick="clr1();" value="clear" />
        <div>
          <canvas id="signaturebox1" width="250" height="120" border="1"></canvas>          
        </div>
      </div> -->
    </div>
    <div class="box-footer">
      <a href="<?php echo base_url('call'); ?>"><button type="button" class="btn btn-flat btn-sm btn-default active"><i class="fa fa-backward"></i> Kembali</button></a>
    </div>
  </form>
</div>

<script type="text/javascript">
  var rupiah = document.getElementById('rupiah');
  rupiah.addEventListener('keyup', function(e){
    // tambahkan 'Rp.' pada saat form di ketik
    // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
    rupiah.value = formatRupiah(this.value, 'Rp. ');
  });

  /* Fungsi formatRupiah */
  function formatRupiah(angka, prefix){
    var number_string = angka.replace(/[^,\d]/g, '').toString(),
    split   		= number_string.split(','),
    sisa     		= split[0].length % 3,
    rupiah     		= split[0].substr(0, sisa),
    ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);

    // tambahkan titik jika yang di input sudah menjadi angka ribuan
    if(ribuan){
      separator = sisa ? '.' : '';
      rupiah += separator + ribuan.join('.');
    }

    rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
    return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
  }
</script>