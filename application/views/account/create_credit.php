

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Manage
      <small>Credit</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Credit</li>
    </ol>
  </section>


<?php if(in_array('createCredit', $user_permission)): ?>


      <form role="form" action="<?php echo base_url('account/create_debit_post') ?>" method="post" id="createBrandForm">

      <div class="modal-body">

        <div style="margin-bottom: 15px;">
          <span style="font-size: 16px;font-weight: 600;border-bottom: 1px solid #3c8dbc; color: #3c8dbc;">Debit Details</span>
        </div> 
    <div class="row">
        <div class="col-sm-6">
        <div class="form-group">
            <label for="supplier_name">DATE</label>
            <input type="date" class="form-control" id="supplier_name" autocomplete="off" required>
        </div>
</div>
<div class="col-sm-6">
        <div class="form-group">
            <label for="supplier_name">ORDER NO</label>
            <input type="text" class="form-control" id="supplier_name" name="supplier_name" placeholder="Enter Supplier name" autocomplete="off" required>
        </div>
</div>
</div>
<div class="row">
        <div class="col-sm-6">
        <div class="form-group">
            <label for="supplier_name">INVOICE NO</label>
            <input type="text" class="form-control" id="supplier_name" name="supplier_name" placeholder="Enter Supplier name" autocomplete="off" required>
        </div>
</div>
<div class="col-sm-6">
        <div class="form-group">
            <label for="supplier_name">CUSTOMER NAME</label>
            <input type="text" class="form-control" id="supplier_name" name="supplier_name" placeholder="Enter Supplier name" autocomplete="off" required>
        </div>
</div>
</div>
<div class="row">
        <div class="col-sm-6">
        <div class="form-group">
            <label for="supplier_name">TOTAL AMT</label>
            <input type="number" class="form-control" id="supplier_name" name="supplier_name" autocomplete="off" required>
        </div> 
</div>
<div class="col-sm-6">
        <div class="form-group">
            <label for="supplier_name">DUE DATE</label>
            <input type="date" class="form-control" id="supplier_name" name="supplier_name"  autocomplete="off" required>
        </div>
</div>
</div>
<div class="row">
        <div class="col-sm-6">
        <div class="form-group">
            <label for="supplier_name">BALANCE DUE</label>
            <input type="number" class="form-control" id="supplier_name" name="supplier_name" placeholder="Enter Supplier name" autocomplete="off" required>
        </div>
</div>
<div class="col-sm-6">
        <div class="form-group">
            <label for="supplier_name">PAYMENT DATE</label>
            <input type="date" class="form-control" id="supplier_name" name="supplier_name" placeholder="Enter Supplier name" autocomplete="off" required>
        </div>
</div>
</div>
<div class="row">
        <div class="col-sm-6">
        <div class="form-group">
            <label for="supplier_name">PAYMENT 1</label>
            <input type="number" class="form-control" id="supplier_name" name="supplier_name" placeholder="Enter Supplier name" autocomplete="off" required>
        </div>
</div>
<div class="col-sm-6">
        <div class="form-group">
            <label for="supplier_name">PAYMENT DATE</label>
            <input type="date" class="form-control" id="supplier_name" name="supplier_name" placeholder="Enter Supplier name" autocomplete="off" required>
        </div>
</div>
</div>
<div class="row">
        <div class="col-sm-6">
        <div class="form-group">
            <label for="supplier_name">PAYMENT 2</label>
            <input type="number" class="form-control" id="supplier_name" name="supplier_name" placeholder="Enter Supplier name" autocomplete="off" required>
        </div>
</div>
<div class="col-sm-6">
        <div class="form-group">
            <label for="supplier_name">PAYMENT 3 DATE</label>
            <input type="date" class="form-control" id="supplier_name" name="supplier_name" placeholder="Enter Supplier name" autocomplete="off" required>
        </div>
</div>
</div>
<div class="row">
        <div class="col-sm-6">        
        <div class="form-group">
            <label for="supplier_name">PAYMENT 3</label>
            <input type="number" class="form-control" id="supplier_name" name="supplier_name" placeholder="Enter Supplier name" autocomplete="off" required>
        </div>
</div>
<div class="col-sm-6">
        <div class="form-group">
            <label for="supplier_name">CLAIMS</label>
            <input type="number" class="form-control" id="supplier_name" name="supplier_name" placeholder="Enter Supplier name" autocomplete="off" required>
        </div>
</div>
</div>
<div class="row">
        <div class="col-sm-6">
        <div class="form-group">
            <label for="supplier_name">REMARKS</label>
            <input type="text" class="form-control" id="supplier_name" name="supplier_name" placeholder="Enter Supplier name" autocomplete="off" required>
        </div>
</div>
</div>
        <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
        </div>

      


      </form>


<?php endif; ?>
