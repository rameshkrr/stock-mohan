

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Manage
      <small>Account Debit</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Account Debit</li>
    </ol>
  </section>
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

        <?php if(in_array('createDebit', $user_permission)): ?>
          <a class="btn btn-primary" href="<?php echo base_url('account/create_debit') ?>">Add Debit</a>
          <br /> <br />
        <?php endif; ?>

        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Manage Debit</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="dibitTable" class="table table-bordered table-striped" style="width:100%;">
              <thead>
              <tr>
                <th>Supplier Name</th>
                <th>order No</th>
                <th>Invoice No</th>
                <th>Total Ammount</th>
                <th>Due Data</th>
                <th>Balance Due</th>
                <?php if(in_array('updateDebit', $user_permission) || in_array('deleteAccount', $user_permission)): ?>
                  <th>Action</th>
                <?php endif; ?>
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



<script>

var base_url = "<?php echo base_url(); ?>";
function getMyorders(data = {}) 
        {
            $.fn.dataTable.ext.errMode = 'none'; 
            /** My Orders Datatable */
            table = $('#dibitTable').DataTable( {
                 scrollCollapse: true,
                paging:  true,
               'bDestroy': true,
                "autoWidth": true,
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
                    "url": base_url + "account/fetchDebitData",
                    "type": "POST",
                    "data":data
              }, 
                
            }
            );
            /** end */
        }
        getMyorders();
</script>