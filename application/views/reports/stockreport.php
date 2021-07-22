

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Stock
      <small>Report</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Stock report</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-md-12 col-xs-12">

        <div id="messages"></div>

        <?php if($this->session->flashdata('success')): ?>
          <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo $this->session->flashdata('success'); ?>
          </div>
        <?php elseif($this->session->flashdata('error')): ?>
          <div class="alert alert-error alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo $this->session->flashdata('error'); ?>
          </div>
        <?php endif; ?>

        <div class="box">
          <!-- <div class="box-header">
            <h3 class="box-title">Manage Orders</h3>
          </div> -->
          <!-- <div class="filters">
                <div class="container">
                    <div class="col-sm-3">
                        <div class="form-group">
                          <label for="FilterDateFrom">Date from</label>
                          <input type="date" class="form-control" id="FilterDateFrom" name="FilterDateFrom" placeholder="Enter Barcode text" autocomplete="off"/>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                          <label for="FilterDateTo">Date to</label>
                          <input type="date" class="form-control" id="FilterDateTo" name="FilterDateTo" placeholder="Enter Barcode text" autocomplete="off"/>
                        </div>
                    </div>
                 
                    <div class="col-sm-3">
                        <div class="form-group">
                            <button class="btn btn-default filter_results">Filter</button>
                            <button class="btn btn-default filter_reset">Reset</button>
                        </div>
                    </div>
                </div>
          </div> -->
          <!-- /.box-header -->
          <div class="box-body">
            <table id="manageTable" class="table table-bordered table-striped" style="width:100%;">
              <thead>
              <tr>
                <th>Image</th>
                <th>SKU</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Qty</th>
                <th>Store</th>
                <th>Availability</th>
              </tr>
              </thead>

            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- col-md-12 -->
    </div>
    <!-- /.row -->
    

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php if(in_array('deleteOrder', $user_permission)): ?>
<!-- remove brand modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="removeModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Remove Order</h4>
      </div>

      <form role="form" action="<?php echo base_url('orders/remove') ?>" method="post" id="removeForm">
        <div class="modal-body">
          <p>Do you really want to remove?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>


    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<?php endif; ?>



<script type="text/javascript">
var manageTable;
var base_url = "<?php echo base_url(); ?>";

$(document).ready(function() {

  $("#addGroupNavStockreport").addClass('active');
  $("#mainGroupNavReport").addClass('active');

  

  function getMyorders(data = {}) 
        {
            $.fn.dataTable.ext.errMode = 'none'; 
            /** My Orders Datatable */
            table = $('#manageTable').DataTable( {
                 scrollCollapse: true,
                paging:  true,
               'bDestroy': true,
                "processing": true, //Feature control the processing indicator.
                "scrollX": true,
               // "serverSide": true, //Feature control DataTables' server-side processing mode.
                "order": [], //Initial no order.
                "pageLength": 50, // Set Page Length
                "lengthMenu":[[10, 25, 50, 100], [10, 25, 50, 100,'All']],
                "deferRender": true,
                "searching": false,/** Added to disabled the search by Vrunda @25 March 2020 */
                searchDelay:1000,
                  language: {
                    sLengthMenu: "Show _MENU_ Orders",
                    emptyTable:     "No Orders Found",
                    info:           "Showing _START_ to _END_ of _TOTAL_ Orders",
                    infoEmpty:      "Showing 0 to 0 of 0 Orders",
                    infoFiltered:   "",
                    zeroRecords:    "No matching Orders found",
                    processing: '<span class="progrss"><i class="fa fa-spinner fa-spin fa-1x fa-fw"></i> Processing...</span>'
                },
                  // Load data for the table's content from an Ajax source
                  "ajax": {
                    "url": base_url + "Stockreport/fetchOrdersData",
                    "type": "POST",
                    "data":data
              }, 
                
            }
            );
            /** end */
        }
        getMyorders();
 $('.filter_results').on('click',function(e){
    var data = {
        'FilterDateFrom':$('#FilterDateFrom').val(),
        'FilterDateTo':$('#FilterDateTo').val(),
        'FilterStockRep':$('#FilterStockRep').val(),
    }
    getMyorders(data);
 });

});


// remove functions 
function removeFunc(id)
{
  if(id) {
    $("#removeForm").on('submit', function() {

      var form = $(this);

      // remove the text-danger
      $(".text-danger").remove();

      $.ajax({
        url: form.attr('action'),
        type: form.attr('method'),
        data: { order_id:id }, 
        dataType: 'json',
        success:function(response) {

          manageTable.ajax.reload(null, false); 

          if(response.success === true) {
            $("#messages").html('<div class="alert alert-success alert-dismissible" role="alert">'+
              '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
              '<strong> <span class="glyphicon glyphicon-ok-sign"></span> </strong>'+response.messages+
            '</div>');

            // hide the modal
            $("#removeModal").modal('hide');

          } else {

            $("#messages").html('<div class="alert alert-warning alert-dismissible" role="alert">'+
              '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
              '<strong> <span class="glyphicon glyphicon-exclamation-sign"></span> </strong>'+response.messages+
            '</div>'); 
          }
        }
      }); 

      return false;
    });
  }
}


</script>
