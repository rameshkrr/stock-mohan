

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


<?php if(in_array('createSupplier', $user_permission)): ?>


      <form role="form" action="<?php echo base_url('account/create_debit_post') ?>" method="post" id="createBrandForm">

      <div class="modal-body">

        <div style="margin-bottom: 15px;">
          <span style="font-size: 16px;font-weight: 600;border-bottom: 1px solid #3c8dbc; color: #3c8dbc;">Basic Details</span>
        </div> 
        <div class="form-group">
            <label for="supplier_name">Supplier Name</label>
            <input type="text" class="form-control" id="supplier_name" name="supplier_name" placeholder="Enter Supplier name" autocomplete="off" required>
        </div>
        <div class="form-group">
            <label for="order_id">Order Id</label>
            <input type="text" class="form-control" id="order_id" name="order_id" placeholder="Enter Order Id" autocomplete="off" required>
        </div>
        <div class="form-group">
            <label for="supplier_address">Supplier Address</label>
            <input type="text" class="form-control" id="supplier_address" name="supplier_address" placeholder="Enter Supplier Address" autocomplete="off" required>
        </div>
        <div class="form-group">
            <label for="phone">Supplier phone</label>
            <input type="number" class="form-control" id="phone" name="phone" placeholder="Enter Supplier phone" autocomplete="off" required>
        </div>
        <div class="form-group">
            <label for="email">Supplier email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter Supplier email" autocomplete="off" required>
        </div>
        <div class="form-group">
            <label for="gstin">Supplier Gstin</label>
            <input type="text" class="form-control" id="gstin" name="gstin" placeholder="Enter Supplier Gstin" autocomplete="off" required>
        </div>       
        <div style="margin-bottom: 15px;">
          <span style="font-size: 16px;font-weight: 600;border-bottom: 1px solid #3c8dbc; color:#3c8dbc">Bank Details</span>
        </div> 
        <div class="form-group">
            <label for="acc_num">Account Number</label>
            <input type="number" class="form-control" id="acc_num" name="acc_num" placeholder="Enter Account Number" autocomplete="off" required>
        </div>
        <div class="form-group">
            <label for="name">Account Holder Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Account Holder Name" autocomplete="off" required>
        </div>
        <div class="form-group">
            <label for="ifsc">IFSC</label>
            <input type="text" class="form-control" id="ifsc" name="ifsc" placeholder="Enter IFSC" autocomplete="off" required>
        </div>
        <div class="form-group">
            <label for="acc_type">Supplier Account Type</label>
            <select name="acc_type" id="acc_type">
              <option value="Savings">Savings</option>
              <option value="Current">Current</option>
            </select>
        </div>
        <div class="form-group">
            <label for="branch">Supplier Branch</label>
            <input type="text" class="form-control" id="branch" name="branch" placeholder="Enter Branch" autocomplete="off" required>
        </div>
        </div>

        <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
        </div>


      </form>


<?php endif; ?>
