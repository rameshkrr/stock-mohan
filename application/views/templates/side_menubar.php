<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        
        <li id="dashboardMainMenu">
          <a href="<?php echo base_url('dashboard') ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>

        <?php if($user_permission): ?>
          <?php if(in_array('createUser', $user_permission) || in_array('updateUser', $user_permission) || in_array('viewUser', $user_permission) || in_array('deleteUser', $user_permission)): ?>
            <li class="treeview" id="mainUserNav">
            <a href="#">
              <i class="fa fa-users"></i>
              <span>Users</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <?php if(in_array('createUser', $user_permission)): ?>
              <li id="createUserNav"><a href="<?php echo base_url('users/create') ?>"><i class="fa fa-circle-o"></i> Add User</a></li>
              <?php endif; ?>

              <?php if(in_array('updateUser', $user_permission) || in_array('viewUser', $user_permission) || in_array('deleteUser', $user_permission)): ?>
              <li id="manageUserNav"><a href="<?php echo base_url('users') ?>"><i class="fa fa-circle-o"></i> Manage Users</a></li>
            <?php endif; ?>
            </ul>
          </li>
          <?php endif; ?>

          <?php if(in_array('createGroup', $user_permission) || in_array('updateGroup', $user_permission) || in_array('viewGroup', $user_permission) || in_array('deleteGroup', $user_permission)): ?>
            <li class="treeview" id="mainGroupNav">
              <a href="#">
                <i class="fa fa-user-plus"></i>
                <span>Groups</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <?php if(in_array('createGroup', $user_permission)): ?>
                  <li id="addGroupNav"><a href="<?php echo base_url('groups/create') ?>"><i class="fa fa-circle-o"></i> Add Group</a></li>
                <?php endif; ?>
                <?php if(in_array('updateGroup', $user_permission) || in_array('viewGroup', $user_permission) || in_array('deleteGroup', $user_permission)): ?>
                <li id="manageGroupNav"><a href="<?php echo base_url('groups') ?>"><i class="fa fa-circle-o"></i> Manage Groups</a></li>
                <?php endif; ?>
              </ul>
            </li>
          <?php endif; ?>


         

          <?php if(in_array('createSupplier', $user_permission) || in_array('updateSupplier', $user_permission) || in_array('viewSupplier', $user_permission) || in_array('deleteSupplier', $user_permission)): ?>            
            <li id="supplierNav"> 
              <a href="<?php echo base_url('supplier/') ?>"> 
                <i class="glyphicon glyphicon-tags"></i> <span>Supplier </span>
              </a>
            </li>
            
          <?php endif; ?>

          <?php if(in_array('createCategory', $user_permission) || in_array('updateCategory', $user_permission) || in_array('viewCategory', $user_permission) || in_array('deleteCategory', $user_permission)): ?>
            <li id="categoryNav">
              <a href="<?php echo base_url('category/') ?>">
                <i class="fa fa-contao"></i> <span>Category</span>
              </a>
            </li>
          <?php endif; ?>

      


   <?php if(in_array('createStore', $user_permission) || in_array('updateStore', $user_permission) || in_array('viewStore', $user_permission) || in_array('deleteStore', $user_permission)): ?>
            <li class="treeview" id="mainGroupNav">
              <a href="#">
               <i class="ion ion-android-home"></i>
                <span>Stores</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <?php if(in_array('createStore', $user_permission)): ?>
                  <li id="addGroupNav"><a href="<?php echo base_url('stores/') ?>"><i class="fa fa-circle-o"></i> Manage Stores</a></li>
                <?php endif; ?>
               
              </ul>
            </li>
          <?php endif; ?>

          <?php if(in_array('createBrand', $user_permission) || in_array('updateBrand', $user_permission) || in_array('viewBrand', $user_permission) || in_array('deleteBrand', $user_permission)): ?>
            <li id="brandNav"> 
              <a href="<?php echo base_url('brands/') ?>"> 
                <i class="fa fa-font-awesome"></i> <span>Brands </span>
              </a>
            </li>
          <?php endif; ?>

          <?php if(in_array('createAttribute', $user_permission) || in_array('updateAttribute', $user_permission) || in_array('viewAttribute', $user_permission) || in_array('deleteAttribute', $user_permission)): ?>
          <li id="attributeNav">
            <a href="<?php echo base_url('attributes/') ?>">
              <i class="fa fa-sliders"></i> <span>Attributes</span>
            </a>
          </li>
          <?php endif; ?>

          <?php if(in_array('createProduct', $user_permission) || in_array('updateProduct', $user_permission) || in_array('viewProduct', $user_permission) || in_array('deleteProduct', $user_permission)): ?>
            <li class="treeview" id="mainProductNav">
              <a href="#">
                <i class="fa fa-cube"></i>
                <span>Inventory</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <?php if(in_array('createProduct', $user_permission)): ?>
                  <li id="addProductNav"><a href="<?php echo base_url('products/create') ?>"><i class="fa fa-circle-o"></i> Add Product</a></li>
                <?php endif; ?>
                <?php if(in_array('updateProduct', $user_permission) || in_array('viewProduct', $user_permission) || in_array('deleteProduct', $user_permission)): ?>
                <li id="manageProductNav"><a href="<?php echo base_url('products') ?>"><i class="fa fa-circle-o"></i> Manage Products</a></li>
                <?php endif; ?>
              </ul>
            </li>
          <?php endif; ?>


          <?php if(in_array('createOrder', $user_permission) || in_array('updateOrder', $user_permission) || in_array('viewOrder', $user_permission) || in_array('deleteOrder', $user_permission)): ?>
            <li class="treeview" id="mainOrdersNav">
              <a href="#">
                <i class="fa fa-dollar"></i>
                <span>Orders</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <?php if(in_array('createOrder', $user_permission)): ?>
                  <li id="addOrderNav"><a href="<?php echo base_url('orders/create') ?>"><i class="fa fa-circle-o"></i> Add Order</a></li>
                <?php endif; ?>
                <?php if(in_array('updateOrder', $user_permission) || in_array('viewOrder', $user_permission) || in_array('deleteOrder', $user_permission)): ?>
                <li id="manageOrdersNav"><a href="<?php echo base_url('orders') ?>"><i class="fa fa-circle-o"></i> Manage Orders</a></li>
                <?php endif; ?>
				<?php if(in_array('createOrder', $user_permission)): ?>
                  <li id="addOrderNavCus"><a href="<?php echo base_url('orders/customers') ?>"><i class="fa fa-circle-o"></i> Manage Customers</a></li>
                <?php endif; ?>
				
              </ul>
            </li>
          <?php endif; ?>



          <?php if(in_array('createCredit', $user_permission) || in_array('updateCredit', $user_permission) || in_array('viewCredit', $user_permission) || in_array('deleteCredit', $user_permission) || in_array('createDebit', $user_permission) || in_array('updateDebit', $user_permission) || in_array('viewDebit', $user_permission) || in_array('deleteDebit', $user_permission)): ?>
            <li class="treeview" id="mainGroupNavAccount">
              <a href="#">
                <i class="fa fa-calculator"></i>
                <span>Accounts</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">                
                <li id="addGroupNavAccount"><a href="<?php echo base_url('account/debit/') ?>"><i class="fa fa-circle-o"></i> Debit Note</a></li>
                <li id="manageGroupNavAccount"><a href="<?php echo base_url('account/credit/') ?>"><i class="fa fa-circle-o"></i> Credit Note</a></li>
              </ul>
            </li>
          <?php endif; ?>



			  
			    <?php if(in_array('viewReports', $user_permission)): ?>
            <li class="treeview" id="mainGroupNavReport">
              <a href="#">
                <i class="glyphicon glyphicon-stats"></i>
                <span>Reports</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
			  
			  
			  <ul class="treeview-menu">
                <?php if(in_array('viewReports', $user_permission)): ?>
                  <li id="addGroupNavStockreport"><a href="<?php echo base_url('salesreport/') ?>"><i class="fa fa-circle-o"></i> Sales Report</a></li>
                <?php endif; ?>
                <?php if(in_array('viewReports', $user_permission) || in_array('viewGroup', $user_permission) || in_array('deleteGroup', $user_permission)): ?>
                <li id="manageGroupNavReport"><a href="<?php echo base_url('stockreport/') ?>"><i class="fa fa-circle-o"></i> Stock Report</a></li>
                <?php endif; ?>
              </ul>
			  
			  
            </li>
          <?php endif; ?>


                  
		 <?php if(in_array('updateCompany', $user_permission)): ?>
            <li class="treeview" id="mainGroupNav">
              <a href="#">
                <i class="fa fa-gear"></i>
                <span>Tools</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
               
<?php if(in_array('updateSetting', $user_permission)): ?>
                  <li id="addGroupNav"><a href="<?php echo base_url('users/setting/') ?>"><i class="fa fa-circle-o"></i> Setting</a></li>
                <?php endif; ?>
<?php if(in_array('updateCompany', $user_permission)): ?>
                  <li id="addGroupNav"><a href="<?php echo base_url('users/profile/') ?>"><i class="fa fa-circle-o"></i> Update Profile</a></li>
                <?php endif; ?>
			   <?php if(in_array('updateCompany', $user_permission)): ?>
                  <li id="addGroupNav"><a href="<?php echo base_url('company/') ?>"><i class="fa fa-circle-o"></i> Update Company</a></li>
                <?php endif; ?>
				  
									
				
				
				
				
                
              </ul>
            </li>
          <?php endif; ?>

		
		
		
		
		

        <!-- <li class="header">Settings</li> -->

       

        <?php endif; ?>
        <!-- user permission info -->
        <li><a href="<?php echo base_url('auth/logout') ?>"><i class="glyphicon glyphicon-log-out"></i> <span>Logout</span></a></li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>