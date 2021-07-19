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
  <form role="form" action="<?php echo base_url('supplier/create_basic') ?>" method="post" id="createSupplierForm">

<div class="modal-body">

  <div class="form-group">
    <label for="supplier_name">Supplier Name</label>
    <input type="text" class="form-control" id="supplier_name" name="supplier_name" placeholder="Enter Supplier name" autocomplete="off">
  </div>
  <div class="form-group">
    <label for="contact_person">Contact person</label>
    <input type="text" class="form-control" id="contact_person" name="contact_person" placeholder="Enter Contact person" autocomplete="off">
  </div>
  <div class="form-group">
    <label for="supplier_address">Supplier Address</label>
    <input type="text" class="form-control" id="supplier_address" name="supplier_address" placeholder="Enter Supplier Address" autocomplete="off">
  </div>
  <div class="form-group">
    <label for="phone">Supplier phone</label>
    <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Supplier phone" autocomplete="off">
  </div>
  <div class="form-group">
    <label for="email">Supplier email</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Supplier email" autocomplete="off">
  </div>
  <div class="form-group">
    <label for="gstin">Supplier Gstin</label>
    <input type="text" class="form-control" id="gstin" name="gstin" placeholder="Enter Supplier Gstin" autocomplete="off">
  </div>
  
</div>

<div class="modal-footer">
  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
  <button type="submit" class="btn btn-primary">Save changes</button>
</div>

</form>
</div>
<!-- /.content-wrapper -->




   




