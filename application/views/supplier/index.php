

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Manage
      <small>Supplier</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Supplier</li>
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

        <?php if(in_array('createSupplier', $user_permission)): ?>
          <button class="btn btn-primary" data-toggle="modal" data-target="#addBrandModal">Add Supplier</button>
          <br /> <br />
        <?php endif; ?>

        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Manage Supplier</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="manageTable" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>Supplier Name</th>
                <th>Contact person</th>
                <th>Supplier Address</th>
                <th>Supplier phone</th>
                <th>Supplier email</th>
                <th>Supplier Gstin</th>
                <?php if(in_array('updateSupplier', $user_permission) || in_array('deleteSupplier', $user_permission)): ?>
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

<?php if(in_array('createSupplier', $user_permission)): ?>
<!-- create brand modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="addBrandModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Add Supplier</h4>
      </div>

      <form role="form" action="<?php echo base_url('supplier/create_basic') ?>" method="post" id="createBrandForm">

      <div class="modal-body">

        <div class="form-group">
            <label for="supplier_name">Supplier Name</label>
            <input type="text" class="form-control" id="supplier_name" name="supplier_name" placeholder="Enter Supplier name" autocomplete="off" required>
        </div>
        <div class="form-group">
            <label for="contact_person">Contact person</label>
            <input type="text" class="form-control" id="contact_person" name="contact_person" placeholder="Enter Contact person" autocomplete="off" required>
        </div>
        <div class="form-group">
            <label for="supplier_address">Supplier Address</label>
            <input type="text" class="form-control" id="supplier_address" name="supplier_address" placeholder="Enter Supplier Address" autocomplete="off" required>
        </div>
        <div class="form-group">
            <label for="phone">Supplier phone</label>
            <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Supplier phone" autocomplete="off" required>
        </div>
        <div class="form-group">
            <label for="email">Supplier email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter Supplier email" autocomplete="off" required>
        </div>
        <div class="form-group">
            <label for="gstin">Supplier Gstin</label>
            <input type="text" class="form-control" id="gstin" name="gstin" placeholder="Enter Supplier Gstin" autocomplete="off" required>
        </div>
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

<?php if(in_array('updateSupplier', $user_permission)): ?>
<!-- edit brand modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="editBrandModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Edit Brand</h4>
      </div>

      <form role="form" action="<?php echo base_url('supplier/update') ?>" method="post" id="updateBrandForm">

      <div class="modal-body">

        <div class="form-group">
            <label for="supplier_name">Supplier Name</label>
            <input type="text" class="form-control" id="supplier_name2" name="supplier_name" placeholder="Enter Supplier name" autocomplete="off" required>
        </div>
        <div class="form-group">
            <label for="contact_person">Contact person</label>
            <input type="text" class="form-control" id="contact_person2" name="contact_person" placeholder="Enter Contact person" autocomplete="off"  required>
        </div>
        <div class="form-group">
            <label for="supplier_address">Supplier Address</label>
            <input type="text" class="form-control" id="supplier_address2" name="supplier_address" placeholder="Enter Supplier Address" autocomplete="off" required>
        </div>
        <div class="form-group">
            <label for="phone">Supplier phone</label>
            <input type="text" class="form-control" id="phone2" name="phone" placeholder="Enter Supplier phone" autocomplete="off" required>
        </div>
        <div class="form-group">
            <label for="email">Supplier email</label>
            <input type="email" class="form-control" id="email2" name="email" placeholder="Enter Supplier email" autocomplete="off" required>
        </div>
        <div class="form-group">
            <label for="gstin">Supplier Gstin</label>
            <input type="text" class="form-control" id="gstin2" name="gstin" placeholder="Enter Supplier Gstin" autocomplete="off" required>
        </div>
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

<?php if(in_array('deleteBrand', $user_permission)): ?>
<!-- remove brand modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="removeBrandModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Remove Brand</h4>
      </div>

      <form role="form" action="<?php echo base_url('supplier/remove') ?>" method="post" id="removeBrandForm">
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

$(document).ready(function() {

  $("#supplierNav").addClass('active');

  // initialize the datatable 
  manageTable = $('#manageTable').DataTable({
    'ajax': 'fetchSupplierData',
    'order': []
  });

  // submit the create from 
  $("#createBrandForm").unbind('submit').on('submit', function() {
    var form = $(this);

    // remove the text-danger
    $(".text-danger").remove();

    $.ajax({
      url: form.attr('action'),
      type: form.attr('method'),
      data: form.serialize(), // /converting the form data into array and sending it to server
      dataType: 'json',
      success:function(response) {

        manageTable.ajax.reload(null, false); 
        if(response.success === true) {
          $("#messages").html('<div class="alert alert-success alert-dismissible" role="alert">'+
            '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
            '<strong> <span class="glyphicon glyphicon-ok-sign"></span> </strong>'+response.messages+
          '</div>');


          // hide the modal
          $("#addBrandModal").modal('hide');

          // reset the form
          $("#createBrandForm")[0].reset();
          $("#createBrandForm .form-group").removeClass('has-error').removeClass('has-success');

        } else {

          if(response.messages instanceof Object) {
            $.each(response.messages, function(index, value) {
              var id = $("#"+index);

              id.closest('.form-group')
              .removeClass('has-error')
              .removeClass('has-success')
              .addClass(value.length > 0 ? 'has-error' : 'has-success');
              
              id.after(value);

            });
          } else {
            $("#messages").html('<div class="alert alert-warning alert-dismissible" role="alert">'+
              '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
              '<strong> <span class="glyphicon glyphicon-exclamation-sign"></span> </strong>'+response.messages+
            '</div>');
          }
        }
      }
    }); 

    return false;
  });


});

function editBrand(id)
{ 
  $.ajax({
    url: 'fetchSupplerDataById/'+id,
    type: 'post',
    dataType: 'json',
    success:function(response) {

      $("#supplier_name2").val(response.supplier_name);
      $("#contact_person2").val(response.contact_person);
      $("#supplier_address2").val(response.supplier_address);
      $("#phone2").val(response.phone);
      $("#email2").val(response.email);
      $("#gstin2").val(response.gstin);


      // submit the edit from 
      $("#updateBrandForm").unbind('submit').bind('submit', function() {
        var form = $(this);

        // remove the text-danger
        $(".text-danger").remove();

        $.ajax({
          url: form.attr('action') + '/' + id,
          type: form.attr('method'),
          data: form.serialize(), // /converting the form data into array and sending it to server
          dataType: 'json',
          success:function(response) {

            manageTable.ajax.reload(null, false); 

            if(response.success === true) {
              $("#messages").html('<div class="alert alert-success alert-dismissible" role="alert">'+
                '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                '<strong> <span class="glyphicon glyphicon-ok-sign"></span> </strong>'+response.messages+
              '</div>');


              // hide the modal
              $("#editBrandModal").modal('hide');
              // reset the form 
              $("#updateBrandForm .form-group").removeClass('has-error').removeClass('has-success');

            } else {

              if(response.messages instanceof Object) {
                $.each(response.messages, function(index, value) {
                  var id = $("#"+index);

                  id.closest('.form-group')
                  .removeClass('has-error')
                  .removeClass('has-success')
                  .addClass(value.length > 0 ? 'has-error' : 'has-success');
                  
                  id.after(value);

                });
              } else {
                $("#messages").html('<div class="alert alert-warning alert-dismissible" role="alert">'+
                  '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                  '<strong> <span class="glyphicon glyphicon-exclamation-sign"></span> </strong>'+response.messages+
                '</div>');
              }
            }
          }
        }); 

        return false;
      });

    }
  });
}

function removeBrand(id)
{
  if(id) {
    $("#removeBrandForm").on('submit', function() {

      var form = $(this);

      // remove the text-danger
      $(".text-danger").remove();

      $.ajax({
        url: form.attr('action'),
        type: form.attr('method'),
        data: { su_id:id }, 
        dataType: 'json',
        success:function(response) {

          manageTable.ajax.reload(null, false); 

          if(response.success === true) {
            $("#messages").html('<div class="alert alert-success alert-dismissible" role="alert">'+
              '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
              '<strong> <span class="glyphicon glyphicon-ok-sign"></span> </strong>'+response.messages+
            '</div>');

            // hide the modal
            $("#removeBrandModal").modal('hide');

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
