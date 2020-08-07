<script src="<?php //echo base_url('/assets/signature/signature.js'); ?>"></script>
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
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

    <script src="https://szimek.github.io/signature_pad/js/signature_pad.umd.js"></script>
    <script>
      var canvas = document.getElementById('signature-pad');

      // Adjust canvas coordinate space taking into account pixel ratio,
      // to make it look crisp on mobile devices.
      // This also causes canvas to be cleared.
      function resizeCanvas() {
          // When zoomed out to less than 100%, for some very strange reason,
          // some browsers report devicePixelRatio as less than 1
          // and only part of the canvas is cleared then.
          var ratio =  Math.max(window.devicePixelRatio || 1, 1);
          canvas.width = canvas.offsetWidth * ratio;
          canvas.height = canvas.offsetHeight * ratio;
          canvas.getContext("2d").scale(ratio, ratio);
      }

      window.onresize = resizeCanvas;
      resizeCanvas();

      var signaturePad = new SignaturePad(canvas, {
        backgroundColor: 'rgb(255, 255, 255)' // necessary for saving image as JPEG; can be removed is only saving as PNG or SVG
      });

      // document.getElementById('save-png').addEventListener('click', function () {
      //   if (signaturePad.isEmpty()) {
      //     return alert("Please provide a signature first.");
      //   }
        
      //   var data = signaturePad.toDataURL('image/png');
      //   console.log(data);
      //   window.open(data);
      // });

      // document.getElementById('save-jpeg').addEventListener('click', function () {
      //   if (signaturePad.isEmpty()) {
      //     return alert("Please provide a signature first.");
      //   }

      //   var data = signaturePad.toDataURL('image/jpeg');
      //   console.log(data);
      //   window.open(data);
      // });

      // document.getElementById('save-svg').addEventListener('click', function () {
      //   if (signaturePad.isEmpty()) {
      //     return alert("Please provide a signature first.");
      //   }

      //   var data = signaturePad.toDataURL('image/svg+xml');
      //   console.log(data);
      //   console.log(atob(data.split(',')[1]));
      //   window.open(data);
      // });

      document.getElementById('clear').addEventListener('click', function () {
        signaturePad.clear();
      });

      // document.getElementById('draw').addEventListener('click', function () {
      //   var ctx = canvas.getContext('2d');
      //   console.log(ctx.globalCompositeOperation);
      //   ctx.globalCompositeOperation = 'source-over'; // default value
      // });

      // document.getElementById('erase').addEventListener('click', function () {
      //   var ctx = canvas.getContext('2d');
      //   ctx.globalCompositeOperation = 'destination-out';
      // });

    </script>

</body>
</html>