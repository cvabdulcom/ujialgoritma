<footer class="main-footer">
  <div class="pull-right hidden-xs">
    <b>Gelora</b> Group
  </div>
  <strong>Portalindo</a>.</strong> All rights
  reserved.
</footer>

  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

<!-- Modal riwayat -->
<div class="modal fade" id="LOADING">
  <div class="modal-dialog">
    <div class="load-container load1" id="loader">
      <div class="loader">Loading</div>
    </div>
  </div>
</div>
<!-- Modal riwayat -->

<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('/assets/bower_components/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
<!-- DataTables -->
<script src="<?php echo base_url('/assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js'); ?>"></script>
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
<script src="<?php echo base_url('/assets/js/Chart.min.js'); ?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="<?php //echo base_url('/assets/dist/js/pages/dashboard2.js'); ?>"></script> -->
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('/assets/dist/js/demo.js'); ?>"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url('/assets/js/raphael.min.js'); ?>"></script>
<script src="<?php echo base_url('/assets/js/morris.min.js'); ?>"></script>
<!-- Select2 -->
<script src="<?php echo base_url('/assets/bower_components/select2/dist/js/select2.full.min.js'); ?>"></script>

<script>
  $(function () {
    $('.select2').select2()
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : false,
      'info'        : true,
      'autoWidth'   : false,
      'pageLength'  : 50
    })
  })
</script>
<script>
  $(function () {
    $('#example3').DataTable()
    $('#example4').DataTable({
      'paging'      : false,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : false,
      'info'        : false,
      'autoWidth'   : false
    })

    $('#daftarceknota').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : false,
      'autoWidth'   : false,
      'pageLength'  : 50
    });
  })
</script>

<script type="text/javascript">
  $(document).ready(function(){
    var table;
    table = $('#daftarnota').DataTable({
              'paging'      : true,
              'lengthChange': true,
              'searching'   : true,
              'ordering'    : true,
              'info'        : false,
              'autoWidth'   : false,
              'pageLength'  : 50
            });

    function Bersih(){      
      table.clear();
    }

    function tampil_data_nota(){
      $.ajax({
        type      : 'ajax',
        url       : '<?php echo base_url('Penjualan/Daftar_nota'); ?>',
        async     : false,
        dataType  : 'json',
        success   : function(data){
          if(data!='') {               
            $.each(data, function(i, item) {
              table.row.add([ i+1, '<td width="200">'+data[i].nama_outlet+'</td>', '<td class="text-center">'+data[i].no_nota_penjualan+'</td>', '<td>'+data[i].tanggal+'</td>', '<td style="text-align: center;"><a href="<?php echo base_url('penjualan/cetak_nota'); ?>?no_nota_penjualan='+data[i].no_nota_penjualan+'" target="_blank"><i class="fa fa-print"></i></a></td>', '<td style="text-align: center;"><a href="<?php echo base_url('penjualan/cetak_nota_gpp'); ?>?no_nota_penjualan='+data[i].no_nota_penjualan+'" target="_blank"><i class="fa fa-print"></i></a></td>' ]);
            });              
          }
          else {
            $('#daftarnota').html('<h3>No data are available</h3>');
          }
          table.draw();
        }
      });
    }

    $("#print").click(function(){
      Bersih();
      tampil_data_nota();
    })

  }); 
</script>

<script type="text/javascript">
  $(document).ready(function(){
    var table_sj;
    table_sj = $('#daftarsj').DataTable({
                'paging'      : true,
                'lengthChange': true,
                'searching'   : true,
                'ordering'    : true,
                'info'        : false,
                'autoWidth'   : false,
                'pageLength'  : 50
              })

    function Bersih_sj(){      
      table_sj.clear();
    }

    function tampil_data_sj(){
      $.ajax({
        type      : 'ajax',
        url       : '<?php echo base_url('Suratjalan/Daftar_suratjalan'); ?>',
        async     : false,
        dataType  : 'json',
        success   : function(data){
          if(data!='') {               
            $.each(data, function(i, item) {
              table_sj.row.add([ i+1, '<td class="text-center">'+data[i].no_suratjalan+'</td>', '<td class="text-center">'+data[i].tanggal+'</td>', '<td class="text-center">'+data[i].kendaraan+'</td>', '<td class="text-center">'+data[i].nama_outlet+'</td>', '<td class="text-center">'+data[i].no_nota+'</td>', '<td style="text-align: center;"><a href="<?php echo base_url('suratjalan/cetak_sj'); ?>?no_suratjalan='+data[i].no_suratjalan+'" target="_blank"><i class="fa fa-print"></i></a></td>', '<td style="text-align: center;"><a href="<?php echo base_url('suratjalan/cetak_sj_gpp'); ?>?no_suratjalan='+data[i].no_suratjalan+'" target="_blank"><i class="fa fa-print"></i></a></td>' ]);
            });              
          }
          else {
            $('#daftarsj').html('<h3>No data are available</h3>');
          }
          table_sj.draw();
        }
      });
    }

    $("#printsj").click(function(){
      Bersih_sj();
      tampil_data_sj();
    })

  }); 
</script>

<script type="text/javascript">
  $(document).ready(function(){
    var table_stokawal;
    table_stokawal = $('#daftar_stokawal').DataTable({
                'paging'      : true,
                'lengthChange': true,
                'searching'   : true,
                'ordering'    : true,
                'info'        : false,
                'autoWidth'   : false,
                'pageLength'  : 50
              })

    function Bersih_st(){      
      table_stokawal.clear();
    }

    function tampil_data_stokawal(){
      $.ajax({
        type      : 'ajax',
        url       : '<?php echo base_url('perubahanstok/daftar_stokawal'); ?>',
        async     : false,
        dataType  : 'json',
        success   : function(data){
          if(data!='') {               
            $.each(data, function(i, item) {
              table_stokawal.row.add([ i+1, '<td class="text-center">'+data[i].nama_outlet+'</td>', '<td class="text-center">'+data[i].id_outlet+'</td>', '<td style="text-align: center;"><a href="<?php echo base_url('perubahanstok/cetak_st'); ?>?id_outlet='+data[i].id_outlet+'" target="_blank"><i class="fa fa-print"></i></a></td>' ]);
            });              
          }
          else {
            $('#daftar_stokawal').html('<h3>No data are available</h3>');
          }
          table_stokawal.draw();
        }
      });
    }

    $("#printst").click(function(){
      Bersih_st();
      tampil_data_stokawal();
    })

  }); 
</script>

<script type="text/javascript"> 
  function display_c(){
    var refresh=1000; // Refresh rate in milli seconds
    mytime=setTimeout('display_ct()',refresh)
  }

  function display_ct() {
    var x = new Date()
    var x1=x.getMonth() + 1+ "/" + x.getDate() + "/" + x.getYear(); 
    x1 = x.getHours( )+ ":" +  x.getMinutes() + ":" +  x.getSeconds();
    document.getElementById('ct').innerHTML = x1;
    display_c();
  }
</script>

</body>
</html>