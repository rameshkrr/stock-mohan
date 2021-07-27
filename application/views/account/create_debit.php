

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Manage
      <small>Debit</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Debit</li>
    </ol>
  </section>


<?php if(in_array('createDebit', $user_permission)): ?>


      <form role="form" action="<?php echo base_url('account/create_debit') ?>" method="post" id="createBrandForm">

      <div class="modal-body">

        <div style="margin-bottom: 15px;">
          <span style="font-size: 16px;font-weight: 600;border-bottom: 1px solid #3c8dbc; color: #3c8dbc;">Debit Details</span>
        </div> 
    <div class="row">
        
<div class="col-sm-6">
        <div class="form-group">
            <label for="order_number">ORDER NO</label>
            <input type="text" class="form-control" id="order_number" name="order_number" placeholder="Enter Supplier name" autocomplete="off" required>
        </div>
</div>
</div>
<div class="row">
        <div class="col-sm-6">
        <div class="form-group">
            <label for="invoice_number">INVOICE NO</label>
            <input type="text" class="form-control" id="invoice_number" name="invoice_number" placeholder="Enter Supplier name" autocomplete="off" required>
        </div>
</div>
<div class="col-sm-6">
        <div class="form-group">
            <label for="supplier_name">SUPPLIER NAME</label>
            <input type="text" class="form-control" id="supplier_name" name="supplier_name" placeholder="Enter Supplier name" autocomplete="off" required>
        </div>
</div>
</div>
<div class="row">
        <div class="col-sm-6">
        <div class="form-group">
            <label for="total_amount">TOTAL AMT</label>
            <input type="number" class="form-control" id="total_amount" name="total_amount" autocomplete="off" required>
        </div> 
</div>
<div class="col-sm-6">
        <div class="form-group">
            <label for="due_amount">DUE DATE</label>
            <input type="date" class="form-control" id="due_amount" name="due_amount"  autocomplete="off" required>
        </div>
</div>
</div>
<div class="row">
        <div class="col-sm-6">
        <div class="form-group">
            <label for="balance_amount">BALANCE DUE</label>
            <input type="number" class="form-control" id="balance_amount" name="balance_amount" placeholder="Enter Supplier name" autocomplete="off" required>
        </div>
</div>
<div class="col-sm-6">
        <div class="form-group">
            <label for="payment_date1">PAYMENT DATE 1</label>
            <input type="date" class="form-control" id="payment_date1" name="payment_date1" placeholder="Enter Supplier name" autocomplete="off" >
        </div>
</div>
</div>
<div class="row">
        <div class="col-sm-6">
        <div class="form-group">
            <label for="payment_1">PAYMENT 1</label>
            <input type="number" class="form-control" id="payment_1" name="payment_1" placeholder="Enter Supplier name" autocomplete="off" >
        </div>
</div>
<div class="col-sm-6">
        <div class="form-group">
            <label for="payment_date2">PAYMENT DATE 2</label>
            <input type="date" class="form-control" id="payment_date2" name="supplier_name" placeholder="Enter Supplier name" autocomplete="off" >
        </div>
</div>
</div>
<div class="row">
        <div class="col-sm-6">
        <div class="form-group">
            <label for="payment_2">PAYMENT 2</label>
            <input type="number" class="form-control" id="payment_2" name="payment_2" placeholder="Enter Supplier name" autocomplete="off" >
        </div>
</div>
<div class="col-sm-6">
        <div class="form-group">
            <label for="payment_date3">PAYMENT 3 DATE</label>
            <input type="date" class="form-control" id="payment_date3" name="payment_date3" placeholder="Enter Supplier name" autocomplete="off" >
        </div>
</div>
</div>
<div class="row">
        <div class="col-sm-6">        
        <div class="form-group">
            <label for="payment_3">PAYMENT 3</label>
            <input type="number" class="form-control" id="payment_3" name="payment_3" placeholder="Enter Supplier name" autocomplete="off" >
        </div>
</div>
<div class="col-sm-6">
        <div class="form-group">
            <label for="claims">CLAIMS</label>
            <input type="number" class="form-control" id="claims" name="claims" placeholder="Enter Supplier name" autocomplete="off" >
        </div>
</div>
</div>
<div class="row">
        <div class="col-sm-6">
        <div class="form-group">
            <label for="remarks">REMARKS</label>
            <input type="text" class="form-control" id="remarks" name="remarks" placeholder="Enter Supplier name" autocomplete="off" >
        </div>
</div>
</div>
        <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
        </div>

      


      </form>


<?php endif; ?>
