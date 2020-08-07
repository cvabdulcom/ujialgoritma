<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Salesman Page | Portalindo</title>
  <link href="<?php echo base_url('assets/image/favicon.png'); ?>" rel="icon" type="image/x-icon" />
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url('/assets/bower_components/bootstrap/dist/css/bootstrap.min.css'); ?>">
  <!-- Jquery UI -->
  <link rel="stylesheet" href="<?php echo base_url('/assets/css/jquery-ui.css'); ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('/assets/bower_components/font-awesome/css/font-awesome.min.css'); ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('/assets/bower_components/Ionicons/css/ionicons.min.css'); ?>">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url('/assets/bower_components/jvectormap/jquery-jvectormap.css'); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('/assets/dist/css/AdminLTE.min.css'); ?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url('/assets/dist/css/skins/_all-skins.min.css'); ?>">

  <style>
    #map-canvas {
      width: 100% !important;
      height: 600px;
      margin: 0;
    }
  </style>

  <!-- jQuery 3 -->
  <script src="<?php echo base_url('/assets/bower_components/jquery/dist/jquery.min.js'); ?>"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="<?php echo base_url('/assets/bower_components/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
  <!-- DataTables -->
  <script src="<?php echo base_url('/assets/bower_components/datatables.net/js/jquery.dataTables.min.js'); ?>"></script>
  <script src="<?php echo base_url('/assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js'); ?>"></script>
  <!-- Jquery UI -->
  <script src="<?php echo base_url('/assets/js/jquery-ui.js'); ?>"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwtxQN8hMp0bg4pxx9lvpeU43J1tlitxY&sensor=true&libraries=places,geometry"></script>
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini layout-top-nav fixed">
<div class="">
  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand">PTL-<b>KLATEN</b></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
        </div>
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->
            <li class="dropdown messages-menu">
              <a href="<?php echo base_url(); ?>">
                <i class="fa fa-home"></i>
              </a>
            </li>
            <li class="dropdown messages-menu">
              <a class="btn" onclick="getLocation()">
                <i class="fa fa-map-marker"></i>
              </a>
            </li>
            <li class="dropdown messages-menu">
              <a class="btn" data-toggle="modal" data-target="#RADIUS">
                <i class="fa fa-map-o"></i>
              </a>
            </li>
            <!-- <li class="dropdown messages-menu">
              <a onClick="document.location.reload(true)">
                <i class="fa fa-refresh"></i>
              </a>
            </li> -->
            <!-- /.messages-menu -->
            <li class="dropdown user user-menu active">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="<?php echo base_url('assets/') ?>dist/img/avatar5.png" class="user-image" alt="User Image">
                <span class="hidden-xs"><?php echo $this->session->userdata('nama_olikuapp'); ?></span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="<?php echo base_url('assets/') ?>dist/img/avatar5.png" class="img-circle" alt="User Image">
                  <p>
                    <?php echo $this->session->userdata('nama_olikuapp'); ?>
                    <small>Sales</small>
                  </p>
                </li>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-right">
                    <a href="<?php echo base_url('login/logout'); ?>" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
  <!-- Full Width Column -->
<!-- Modal Tambah presentasi-->
<div class="modal fade" id="RADIUS" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form class="form-horizontal">
        <div class="modal-body">
          <div class="box-body">
            <!-- <div class="form-group"> -->
              <!-- <label for="inputEmail3" class="col-sm-3 control-label">Latitude/Longitude</label> -->
              <div class="col-sm-12">
                <input type="text" class="form-control"  id="latlong" placeholder="Latitude, Longitude">
              </div>
            <!-- </div> -->
          </div>        
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
          <button type="button" value="Geocode" onclick="codeAddress()" class="btn btn-primary"><i class="fa fa-gears"></i> Proses</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- Modal End -->
<script>
    var markers = [
      <?php
      foreach ($map->result_array() as $row)
      {
        echo '["'.$row['nama_outlet'].'", "'.$row['kabupaten'].'", "'.$row['alamat'].'", '.$row['longitude'].', '.$row['latitude'].'],';
      }
      ?>
    ];

    var map;
    var infowindow;
    var image = '<?php echo base_url(); ?>/assets/image/sales.png';
    var image2= '<?php echo base_url(); ?>/assets/image/outlets.png';

    function initialize() {
      var pusatRadius = new google.maps.LatLng(-7.7332214,109.0007027);         
      map = new google.maps.Map(document.getElementById('map-canvas'), {
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        center: pusatRadius,
        zoom: 17        
      });
    }
/** ----------------------------------------------------------------------------------- */
    function getLocation() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(codeAddressgps);
        } else {
          view.innerHTML = "Yah browsernya ngga support Geolocation bro!";
        }
    }

    function codeAddressgps(position) { 
        lat = position.coords.latitude;
        lon = position.coords.longitude;        
        var pusatRadius = new google.maps.LatLng(lat, lon);
        console.log(pusatRadius);      
        map = new google.maps.Map(document.getElementById('map-canvas'), {
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            center: pusatRadius,
            zoom: 17        
        });
        var PusatMarker = new google.maps.Marker({
          position: pusatRadius,
          map: map,
          icon: image,
          title:'Lokasi Saya',
          animation: google.maps.Animation.BOUNCE
        });
        var circle = new google.maps.Circle({
          map: map,
          radius: 10000,    // in metres
          fillColor: '#AA0000',
          strokeColor: '#EC310A'
        });
        circle.bindTo('center', PusatMarker, 'position');
        var request = {
          location: pusatRadius,
          radius: 10000 /* jarak meter */
        };
        infowindow = new google.maps.InfoWindow();
        var service = new google.maps.places.PlacesService(map);
        service.search(request, callback);
        createMarkergps(pusatRadius);
    }

    function createMarkergps(pusatRadius) {
      var bounds = new google.maps.LatLngBounds(); // diluar looping
      for (i = 0; i < markers.length; i++) { 
        pos = new google.maps.LatLng(markers[i][3], markers[i][4]);
        var distance_from_location =  google.maps.geometry.spherical.computeDistanceBetween(pusatRadius, pos);
        console.log(distance_from_location);

        if(distance_from_location < 10000)
        {
          //marker icon shows
          bounds.extend(pos); // di dalam looping    
          gambar = image2;    
          marker = new google.maps.Marker({
            position: pos,
            map: map,
            title: markers[i][0],
            icon: gambar
          });
    
          google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
              var dataoutlet = "<b>" +markers[i][0]+ "</b> <br/>" +markers[i][1]+ "<br/>" +markers[i][2]+ "<br/> <a href='http://www.google.com/maps/place/" +markers[i][3]+ "," +markers[i][4]+ "' target='_blank'>Bagikan</a>";   
              infowindow.setContent(dataoutlet);
              infowindow.open(map, marker, dataoutlet);
            }
          })(marker, i));
          map.fitBounds(bounds); // setelah looping
        }else{
          //marker icon is none because > 100 meter
        }        
      }
      document.getElementById('latlong').value='';
    }
/** ----------------------------------------------------------------------------------- */
    function codeAddress() {      
      $('#RADIUS').modal('hide');
      var latlong = document.getElementById('latlong').value;
      var newString = latlong.replace(/\s/g, '');
      var parts = newString.split(",");      
      var pusatRadius = new google.maps.LatLng(parseFloat(parts[0]),parseFloat(parts[1]));
      console.log(pusatRadius);      
      map = new google.maps.Map(document.getElementById('map-canvas'), {
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        center: pusatRadius,
        zoom: 17        
      });
      var PusatMarker = new google.maps.Marker({
        position: pusatRadius,
        map: map,
        icon: image,
        title:'Lokasi Saya',
        animation: google.maps.Animation.BOUNCE
      });
      var circle = new google.maps.Circle({
        map: map,
        radius: 10000,    // in metres
        fillColor: '#AA0000',
        strokeColor: '#EC310A'
      });
      circle.bindTo('center', PusatMarker, 'position');
      var request = {
        location: pusatRadius,
        radius: 10000 /* jarak meter */
      };
      infowindow = new google.maps.InfoWindow();
      var service = new google.maps.places.PlacesService(map);
      service.search(request, callback);
    }
/** ----------------------------------------------------------------------------------- */
    function callback(results, status) {
      createMarker();
    }

    function createMarker() {
      var bounds = new google.maps.LatLngBounds(); // diluar looping
      for (i = 0; i < markers.length; i++) { 
        var latlong = document.getElementById('latlong').value;
        var newString = latlong.replace(/\s/g, '');
        var parts = newString.split(",");
        
        var pusatRadius = new google.maps.LatLng(parseFloat(parts[0]),parseFloat(parts[1]));
        pos = new google.maps.LatLng(markers[i][3], markers[i][4]);

        var distance_from_location =  google.maps.geometry.spherical.computeDistanceBetween(pusatRadius, pos);
        console.log(distance_from_location);

        if(distance_from_location < 10000)
        {
          //marker icon shows
          bounds.extend(pos); // di dalam looping    
          gambar = image2;    
          marker = new google.maps.Marker({
            position: pos,
            map: map,
            title: markers[i][0],
            icon: gambar
          });
    
          google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
              var dataoutlet = "<b>" +markers[i][0]+ "</b> <br/>" +markers[i][1]+ "<br/>" +markers[i][2]+ "<br/> <a href='https://www.google.com/maps/@" +markers[i][3]+ "," +markers[i][4]+ "' target='_blank'>Bagikan</a>";   
              infowindow.setContent(dataoutlet);
              infowindow.open(map, marker, dataoutlet);
            }
          })(marker, i));
          map.fitBounds(bounds); // setelah looping
        }else{
          //marker icon is none because > 100 meter
        }        
      }
      document.getElementById('latlong').value='';
    }
/** ----------------------------------------------------------------------------------- */
  google.maps.event.addDomListener(window, 'load', initialize);

</script>

<div id="map-canvas"></div>
<!-- /.content-wrapper -->
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
<script src="<?php echo base_url('/assets/dist/js/pages/dashboard2.js'); ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('/assets/dist/js/demo.js'); ?>"></script>
<script>
  $(function () {
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
</body>
</html>