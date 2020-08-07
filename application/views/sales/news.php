<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Salesman Page | Portalindo</title>
  <link href="<?php echo base_url('assets/image/favicon.png'); ?>" rel="icon" type="image/x-icon" />
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo base_url('/assets/signature/signature.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/bower_components/bootstrap/dist/css/bootstrap.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/css/jquery-ui.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/bower_components/font-awesome/css/font-awesome.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/bower_components/Ionicons/css/ionicons.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/bower_components/jvectormap/jquery-jvectormap.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/bower_components/select2/dist/css/select2.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/dist/css/AdminLTE.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/dist/css/skins/_all-skins.min.css'); ?>">
  <!-- jQuery 3 -->
  <script src="<?php echo base_url('/assets/bower_components/jquery/dist/jquery.min.js'); ?>"></script>
  <script src="<?php echo base_url('/assets/js/jquery-ui.js'); ?>"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="<?php echo base_url('/assets/bower_components/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
  <!-- DataTables -->
  <script src="<?php echo base_url('/assets/bower_components/datatables.net/js/jquery.dataTables.min.js'); ?>"></script>
  <script src="<?php echo base_url('/assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js'); ?>"></script>
  
  <script src="<?php echo base_url('/assets/sweetalert/sweetalert.min.js'); ?>"></script>
  <link rel="stylesheet" href="<?php echo base_url('/assets/sweetalert/sweetalert.min.css'); ?>"/>
</head>
<body class="hold-transition skin-blue sidebar-mini layout-top-nav fixed">

  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand"><b>PORTALINDO NEWS</b></a>
        </div>
      </div>
    </nav>
  </header>
  
<div class="container">
  <br/><br/><br/>
  <div class="col-md-12 form-horizontal">
    <table id="newstable" class="table table-hover">
      <tbody>
        <?php
          $no=0;
          foreach($news->result_array() as $tampil):
            $no++;
            $id_informasi = $tampil['id_informasi'];
            $tanggal = $tampil['tanggal'];
            $time = $tampil['time'];
            $nama = $tampil['nama'];
            $keterangan = $tampil['keterangan'];
        ?>
        <tr>
          <td><i class="fa fa-dot-circle-o"></i></td>
          <td class="text-left"><?php $num_char = 50; echo substr($keterangan, 0, $num_char) . '...'; ?></td>
          <td class="text-right"><a href="javascript:;" class="btn btn-flat btn-default active item_informasi" data="<?php echo $id_informasi; ?>"><i class="fa fa-reorder"></i></a></td>                 
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div> 
</div>

<!-- Modal Informasi -->
<div class="modal fade" id="INFORMASI">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <textarea class="form-control" name="keterangan" rows="5" readonly></textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal Informasi -->

<script>
  $(".item_informasi").click(function(){    
    var id_informasi = $(this).attr('data');
      $.ajax({
        type      : "GET",
        url       : "<?php echo base_url('news/tarik_news'); ?>",
        dataType  : "JSON",
        data      : {id_informasi:id_informasi},
        success   : function(data){
          $.each(data, function(id_informasi, tanggal, time, nama, keterangan){
            $('#INFORMASI').modal('show');
            $('[name = "id_informasi"]').val(data.id_informasi);
            $('[name = "tanggal"]').val(data.tanggal);
            $('[name = "time"]').val(data.time);
            $('[name = "nama"]').val(data.nama);
            $('[name = "keterangan"]').val(data.keterangan);
          });
        }
      });
      return false;
  })
</script>

<script src="<?php echo base_url('/assets/signature/signature.js'); ?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url('/assets/bower_components/fastclick/lib/fastclick.js'); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('/assets/dist/js/adminlte.min.js'); ?>"></script>
<!-- Sparkline -->
<script src="<?php echo base_url('/assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js'); ?>"></script>
<!-- jvectormap  -->
<script src="<?php echo base_url('/assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'); ?>"></script>
<script src="<?php echo base_url('/assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'); ?>"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url('/assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js'); ?>"></script>
<!-- ChartJS -->
<script src="<?php echo base_url('/assets/bower_components/chart.js/Chart.js'); ?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="<?php //echo base_url('/assets/dist/js/pages/dashboard2.js'); ?>"></script> -->
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('/assets/dist/js/demo.js'); ?>"></script>
<script src="<?php echo base_url('/assets/bower_components/select2/dist/js/select2.full.min.js'); ?>"></script>

<script>
  $(function () {
    $('.select2').select2()
    $('#example1').DataTable()
    $('#newstable').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>