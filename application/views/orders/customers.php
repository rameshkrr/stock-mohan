

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Manage
      <small>Customer</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Customer</li>
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

        <?php if(in_array('createOrder', $user_permission)): ?>
          <button class="btn btn-primary" data-toggle="modal" data-target="#addBrandModal">Add Customer</button>
          <br /> <br />
        <?php endif; ?>

        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Manage Customer</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="manageTable" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>Customer Name</th>
                <th>Customer person</th>
                <th>Customer Address</th>
                <th>Customer phone</th>
                <th>Customer email</th>
                <th>Customer Gstin</th>
                <th>Account Number</th>
                <th>Account Holder Name</th>
                <th>IFSC</th>
                <th>Account Type</th>
                <th>Branch</th>
                <th>Store</th>

                <?php if(in_array('updateOrder', $user_permission) || in_array('deleteOrder', $user_permission)): ?>
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

<?php if(in_array('createOrder', $user_permission)): ?>
<!-- create brand modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="addBrandModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Add Order</h4>
      </div>

      <form role="form" action="<?php echo base_url('orders/create_customers') ?>" method="post" id="createBrandForm">

      <div class="modal-body">
  
        <div style="margin-bottom: 15px;">
          <span style="font-size: 16px;font-weight: 600;border-bottom: 1px solid #3c8dbc; color: #3c8dbc;">Basic Details</span>
        </div> 
        <div class="form-group">
            <label for="name">Customer Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Order name" autocomplete="off" required>
        </div>
        <div class="form-group">
            <label for="contact_person">Contact person</label>
            <input type="text" class="form-control" id="contact_person" name="contact_person" placeholder="Enter Contact person" autocomplete="off" required>
        </div>
        <div class="form-group">
            <label for="address">Customer Address</label>
            <input type="text" class="form-control" id="address" name="address" placeholder="Enter Customer Address" autocomplete="off" required>
        </div>
        <div class="form-group">
            <label for="phone">Customer phone</label>
            <input type="number" class="form-control" id="phone" name="phone" placeholder="Enter Customer phone" autocomplete="off" required>
        </div>
        <div class="form-group">
            <label for="email">Customer email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter Customer email" autocomplete="off" required>
        </div>
        <div class="form-group">
            <label for="gstin">Customer Gstin</label>
            <input type="text" class="form-control" id="gstin" name="gstin" placeholder="Enter Customer Gstin" autocomplete="off" required>
        </div>       
        <div style="margin-bottom: 15px;">
          <span style="font-size: 16px;font-weight: 600;border-bottom: 1px solid #3c8dbc; color:#3c8dbc">Bank Details</span>
        </div> 
        <div class="form-group">
            <label for="acc_no">Account Number</label>
            <input type="number" class="form-control" id="acc_no" name="acc_no" placeholder="Enter Account Number" autocomplete="off" required>
        </div>
        <div class="form-group">
            <label for="acc_name">Account Holder Name</label>
            <input type="text" class="form-control" id="acc_name" name="acc_name" placeholder="Enter Account Holder Name" autocomplete="off" required>
        </div>
        <div class="form-group">
            <label for="ifsc">IFSC</label>
            <input type="text" class="form-control" id="ifsc" name="ifsc" placeholder="Enter IFSC" autocomplete="off" required>
        </div>
        <div class="form-group">
            <label for="acc_type">Customer Account Type</label>
            <select name="acc_type" id="acc_type">
              <option value="Savings">Savings</option>
              <option value="Current">Current</option>
            </select>
        </div>
        <div class="form-group">
            <label for="store">Store</label>
            <select class="form-control select_group" id="store_id" name="store_id">
              <?php foreach ($stores as $k => $v): ?>
                <option value="<?php echo $v['name'] ?>"><?php echo $v['name'] ?></option>
              <?php endforeach ?>
            </select>
          </div>
        <div class="form-group">
            <label for="branch">Customer Branch</label>
            <input type="text" class="form-control" id="branch" name="branch" placeholder="Enter Branch" autocomplete="off" required>
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

<?php if(in_array('updateOrder', $user_permission)): ?>
<!-- edit brand modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="editBrandModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Edit Brand</h4>
      </div>

      <form role="form" action="<?php echo base_url('orders/update_customer') ?>" method="post" id="updateBrandForm">

      <div class="modal-body">

        <div style="margin-bottom: 15px;">
          <span style="font-size: 16px;font-weight: 600;border-bottom: 1px solid #3c8dbc; color: #3c8dbc;">Basic Details</span>
        </div> 
        <div class="form-group">
            <label for="name">Customer Name</label>
            <input type="text" class="form-control" id="name2" name="name" placeholder="Enter Order name" autocomplete="off" required>
        </div>
        <div class="form-group">
            <label for="contact_person">Contact person</label>
            <input type="text" class="form-control" id="contact_person2" name="contact_person" placeholder="Enter Contact person" autocomplete="off" required>
        </div>
        <div class="form-group">
            <label for="address">Customer Address</label>
            <input type="text" class="form-control" id="address2" name="address" placeholder="Enter Customer Address" autocomplete="off" required>
        </div>
        <div class="form-group">
            <label for="phone">Customer phone</label>
            <input type="number" class="form-control" id="phone2" name="phone" placeholder="Enter Customer phone" autocomplete="off" required>
        </div>
        <div class="form-group">
            <label for="email">Customer email</label>
            <input type="email" class="form-control" id="email2" name="email" placeholder="Enter Customer email" autocomplete="off" required>
        </div>
        <div class="form-group">
            <label for="gstin">Customer Gstin</label>
            <input type="text" class="form-control" id="gstin2" name="gstin" placeholder="Enter Customer Gstin" autocomplete="off" required>
        </div>       
        <div style="margin-bottom: 15px;">
          <span style="font-size: 16px;font-weight: 600;border-bottom: 1px solid #3c8dbc; color:#3c8dbc">Bank Details</span>
        </div> 
        <div class="form-group">
            <label for="acc_no">Account Number</label>
            <input type="number" class="form-control" id="acc_num2" name="acc_no" placeholder="Enter Account Number" autocomplete="off" required>
        </div>
        <div class="form-group">
            <label for="acc_name">Account Holder Name</label>
            <input type="text" class="form-control" id="acc_name2" name="acc_name" placeholder="Enter Account Holder Name" autocomplete="off" required>
        </div>
        <div class="form-group">
            <label for="ifsc">IFSC</label>
            <input type="text" class="form-control" id="ifsc2" name="ifsc" placeholder="Enter IFSC" autocomplete="off" required>
        </div>
        <div class="form-group">
            <label for="acc_type">Customer Account Type</label>
            <select name="acc_type" id="acc_type">
              <option value="Savings">Savings</option>
              <option value="Current">Current</option>
            </select>
        </div>
        <div class="form-group">
            <label for="store">Store</label>
            <select class="form-control select_group" id="store_id" name="store_id">
              <?php foreach ($stores as $k => $v): ?>
                <option value="<?php echo $v['name'] ?>"><?php echo $v['name'] ?></option>
              <?php endforeach ?>
            </select>
          </div>
        <div class="form-group">
            <label for="branch">Customer Branch</label>
            <input type="text" class="form-control" id="branch2" name="branch" placeholder="Enter Branch" autocomplete="off" required>
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

      <form role="form" action="<?php echo base_url('orders/remove_customer') ?>" method="post" id="removeBrandForm">
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

  $("#OrderNav").addClass('active');

  // initialize the datatable 
  manageTable = $('#manageTable').DataTable({
    'ajax': 'fetchCustomerData',
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
    url: 'fetchCustomerDataById/'+id,
    type: 'post',
    dataType: 'json',
    success:function(response) {

      $("#name2").val(response.name);
      $("#contact_person2").val(response.contact_person);
      $("#address2").val(response.address);
      $("#phone2").val(response.phone);
      $("#email2").val(response.email);
      $("#gstin2").val(response.gstin);
      $("#acc_num2").val(response.acc_no);
      $("#acc_name2").val(response.name);
      $("#ifsc2").val(response.ifsc);
      $("#acc_type2").val(response.acc_type);
      $("#branch2").val(response.acc_type);


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
