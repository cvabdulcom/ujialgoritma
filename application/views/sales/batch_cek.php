<div class="container">
  <br/><br/><br/>
  <div class="box-header with-border" align="center">
    <h3 class="box-title">Batch Checking</h3>
  </div>
  <!-- /.box-header -->
  <!-- form start -->
  <form role="form" id="tmbhunit" class="form-horizontal">
    <div class="box-body">
      <div class="form-group" align="center">
        <div class="input-group col-sm-10">
          <input type="text" name="no_batch" id="no_batch" class="form-control input-sm" placeholder="No Batch..." autofocus required>
          <span class="input-group-btn">
            <button type="button" class="btn btn-info btn-sm btn-flat" id="button_cek">Check</button>
          </span>
        </div>
        <br>
        <div class="input-group col-sm-10" id="cartBody">
          
        </div>
      </div>
    </div>
  </form>
</div>

<script type="text/javascript">
  $(document).ready(function(){

    $("#button_cek").click(function(){
      Check();
    });

    function showBatch(data) {    
      $("#cartBody").empty();
      for (var i in data){
        var item = data[i];
        var row = '<tr>'+
                    '<td>Tanggal : '+item.tanggal+'</td>'+
                    '<td>No Batch : '+item.no_batch+'</td>'+
                    '<td>No Surat Jalan : '+item.no_suratjalan+'</td>'+
                  '</tr>';

        $("#cartBody").append(row); //append ul dengan id cartbody
      }
    }


    function Check(){
      var no_batch = $("#no_batch").val();
      $.ajax({
        type      : "POST",
        url       : "<?php echo base_url('batch/check'); ?>",
        dataType  : "JSON",
        data      : { no_batch: no_batch },
        success   : function(data){
          if(typeof data !== 'undefined' && data.length > 0){
            showBatch(data);
          }else{
            $("#cartBody").empty();
            swal({
              title: "Batch Number Failed",
              type: "error",
              confirmButtonColor: "#e5150f",
              showCancelButton: false,
              confirmButtonText: "OK",
              closeOnConfirm: true
            }); 
          }
        }
      });
    }

  });
</script>