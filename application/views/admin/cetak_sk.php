<script>window.print()</script>
<style>
  .margin {
    margin-top: -10px;;
    margin-right: 25px;
    margin-left: 25px;
  }
  .header {
    font-size: 13px;
  }
  .produk {
    font-size: 12px;
  }  
</style>
<div class="margin">
<font face="tahoma">
<!-- <script>window.print()</script> -->
<script src="<?php echo base_url('/assets/bower_components/jquery/dist/jquery.min.js'); ?>"></script>
<style>
  /* table {
    border-collapse: collapse;
  }

  table, th, td {
    border: 1px solid black; */
  }
</style>
<!-- Content Wrapper. Contains page content -->
<table width="100%">
  <tr>
      <td><font><strong><center><u>SK PENCABUTAN</u></center></strong></font></td>
  </tr>
  <tr>
      
  </tr>
</table>
<br>
<div class="content-wrapper">
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <!-- /.box-header -->
          <div class="box-body">
            <div class="col-sm-9">
              <table width="100%" class="header">
                <tr>
                  <td width="100"><strong>Nama Outlet</strong></td>
                  <td>:</td>
                  <td>&nbsp;&nbsp;&nbsp;<?php echo $this->input->get('nama_outlet'); ?></td>
                </tr>
               <!--  <tr>
                  <td><strong>Alamat</strong></td>
                  <td>:</td>
                  <td>&nbsp;&nbsp;&nbsp;<?php //echo $alamat; ?></td>
                </tr> -->
              </table>
            </div>
            <br>
          <table style="border-collapse: collapse; border: 0px solid black;" width="100%" class="produk">
              <thead>
                <tr style="border-collapse: collapse; border: 1px solid black; border-top: none; border-left: none; border-right: none;">
                  <th style="border-collapse: collapse; border: 0px solid black;">No</th>
                  <th style="border-collapse: collapse; border: 0px solid black;">Nama Barang</th>
                  <th style="border-collapse: collapse; border: 0px solid black;">Jumlah</th>
                </tr>
              </thead>
              <tbody id="cartBody">
                <tr>
                  <td class="text-center" width="30"></td>
                  <td></td>
                  <td class="text-center" width="150"></td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
  <table width="100%" class="header">
    <tr>
      <td align="center">OUTLET</td>
      <td align="center"><br><br><br></td>
      <td align="center">SALES</td>
    </tr>
    <tr>
      <td align="center">__________</td>
      <td align="center">&nbsp;</td>
      <td align="center">__________</td>
    </tr>
  </table>
</font>
</div>

<script type="text/javascript">
  showCart();
  function showCart(){    
    // $("#cartBody").empty();    
    var mycart_sk = JSON.parse(localStorage.getItem('mycart_sk'));
    console.log(mycart_sk);
    for (var i in mycart_sk){
      var item = mycart_sk[i];
      var row = '<tr>'+
                  '<td class="text-center" width="30" align="center">'+[parseInt(i)+1]+'</td>'+
                  '<td>'+item.nama_produk+'</td>'+
                  '<td width="150" class="text-center" width="150">'+item.jumlah+' pcs</td>'+
                '</tr>';
      $("#cartBody").append(row);
    }
  }
</script>