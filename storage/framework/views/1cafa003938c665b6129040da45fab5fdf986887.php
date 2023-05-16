



<?php $__env->startSection('title', 'Project List'); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/datatables.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/datatable-extension.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/animate.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
<h3>USERS</h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
<li class="breadcrumb-item">Page</li>
<li class="breadcrumb-item active">Users</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
   <div class="row project-cards">
      <div class="col-md-12 project-list">
         <div class="card">
            <div class="row">
               <div class="col-md-6">
                  <ul class="nav nav-tabs border-tab" id="top-tab" role="tablist">
                     <li class="nav-item"><a class="nav-link active" id="top-home-tab" data-bs-toggle="tab" href="#top-home" role="tab" aria-controls="top-home" aria-selected="true"><i data-feather="user"></i>User List</a></li>
                     <li class="nav-item"><a class="nav-link" id="profile-top-tab" data-bs-toggle="tab" href="#top-profile" role="tab" aria-controls="top-profile" aria-selected="false"><i data-feather="user-plus"></i>Add User</a></li>
                     <li class="nav-item"><a class="nav-link" id="contact-top-tab" data-bs-toggle="tab" href="#top-contact" role="tab" aria-controls="top-contact" aria-selected="false"><i data-feather="info"></i>Role</a></li>
                  </ul>
               </div>
               
            </div>
         </div>
      </div>
      <div class="col-sm-12">
         <div class="card">
            <div class="card-body">
               <div class="tab-content" id="top-tabContent">
                  <div class="tab-pane fade show active" id="top-home" role="tabpanel" aria-labelledby="top-home-tab">
                     <div class="row">
                        <div class=" col-lg-12">
                            <div class="dt-ext table-responsive">
                                <table class="display table-xs" id="export-button">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>
                                            <a class="btn btn-light btn-sm example-popover form-control" href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="View"> <span class="fa fa-ellipsis-v" ></span></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>
                                            <a class="btn btn-light btn-sm example-popover form-control" href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="View"> <span class="fa fa-ellipsis-v" ></span></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    
                                </table>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="top-profile" role="tabpanel" aria-labelledby="profile-top-tab">
                     <div class="row">
                        <div class="card-body">
                            <form class="needs-validation" novalidate="">
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom01">First name</label>
                                        <input class="form-control" id="validationCustom01" type="text" placeholder="First name" required="">
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom02">Middle name</label>
                                        <input class="form-control" id="validationCustom02" type="text" placeholder="Last name" required="">
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom02">Last name</label>
                                        <input class="form-control" id="validationCustom02" type="text" placeholder="Last name" required="">
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="validationCustom04">Gender</label>
                                        <input class="form-control" id="validationCustom04" type="text" placeholder="State" required="">
                                        <div class="invalid-feedback">Please provide a valid state.</div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="validationCustom04">State</label>
                                        <input class="form-control" id="validationCustom04" type="text" placeholder="State" required="">
                                        <div class="invalid-feedback">Please provide a valid state.</div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="validationCustom04">State</label>
                                        <input class="form-control" id="validationCustom04" type="text" placeholder="State" required="">
                                        <div class="invalid-feedback">Please provide a valid state.</div>
                                    </div>
                                    <!-- <div class="col-md-4 mb-3">
                                        <label for="validationCustomUsername">Username</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text" id="inputGroupPrepend">@</span></div>
                                            <input class="form-control" id="validationCustomUsername" type="text" placeholder="Username" aria-describedby="inputGroupPrepend" required="">
                                            <div class="invalid-feedback">Please choose a username.</div>
                                        </div>
                                    </div> -->
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom03">City</label>
                                        <input class="form-control" id="validationCustom03" type="text" placeholder="City" required="">
                                        <div class="invalid-feedback">Please provide a valid city.</div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="validationCustom04">State</label>
                                        <input class="form-control" id="validationCustom04" type="text" placeholder="State" required="">
                                        <div class="invalid-feedback">Please provide a valid state.</div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="validationCustom05">Zip</label>
                                        <input class="form-control" id="validationCustom05" type="text" placeholder="Zip" required="">
                                        <div class="invalid-feedback">Please provide a valid zip.</div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-check">
                                        <div class="checkbox p-0">
                                            <input class="form-check-input" id="invalidCheck" type="checkbox" required="">
                                            <label class="form-check-label" for="invalidCheck">Agree to terms and conditions</label>
                                        </div>
                                        <div class="invalid-feedback">You must agree before submitting.</div>
                                    </div>
                                </div>
                                <button class="btn btn-primary" type="submit">Submit form</button>
                            </form>
                        </div>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="top-contact" role="tabpanel" aria-labelledby="contact-top-tab">
                     <div class="row">
                        <h2>Role</h2>
                                <form method="POST" action="/register">
                                    <?php echo e(csrf_field()); ?>

                                    <div class="form-group">
                                        <label for="name">Search User ID:</label>
                                        <input type="text" class="form-control" id="name" name="name">
                                    </div>
                            
                                    <div class="form-group">
                                    <label for="email">First name:</label>
                                        <input type="email" class="form-control" id="email" name="email">
                                    <label for="email">Middle name:</label>
                                        <input type="email" class="form-control" id="email" name="email">    
                                    <label for="email">Last name:</label>
                                        <input type="email" class="form-control" id="email" name="email">
                                    </div>
                            
                                    <div class="form-group">
                                        <label for="password">Gender:</label>
                                        <input type="password" class="form-control" id="password" name="password">
                                    </div>
                            
                                    <div class="form-group">
                                        <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                    
                                </form>
                        
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('assets/js/form-validation-custom.js')); ?>"></script>

<script src="<?php echo e(asset('assets/js/typeahead/handlebars.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/typeahead/typeahead.bundle.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/typeahead/typeahead.custom.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/typeahead-search/handlebars.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/typeahead-search/typeahead-custom.js')); ?>"></script>

<script src="<?php echo e(asset('assets/js/datatable/datatables/jquery.dataTables.min.js')); ?>"></script>
<!-- <script src="<?php echo e(asset('assets/js/datatable/datatable-extension/dataTables.buttons.min.js')); ?>"></script> -->
<script src="<?php echo e(asset('assets/js/datatable/datatable-extension/jszip.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/datatable/datatable-extension/buttons.colVis.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/datatable/datatable-extension/pdfmake.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/datatable/datatable-extension/vfs_fonts.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/datatable/datatable-extension/dataTables.autoFill.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/datatable/datatable-extension/dataTables.select.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/datatable/datatable-extension/buttons.bootstrap4.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/datatable/datatable-extension/buttons.html5.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/datatable/datatable-extension/buttons.print.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/datatable/datatable-extension/dataTables.bootstrap4.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/datatable/datatable-extension/dataTables.responsive.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/datatable/datatable-extension/responsive.bootstrap4.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/datatable/datatable-extension/dataTables.keyTable.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/datatable/datatable-extension/dataTables.colReorder.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/datatable/datatable-extension/dataTables.fixedHeader.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/datatable/datatable-extension/dataTables.rowReorder.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/datatable/datatable-extension/dataTables.scroller.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/datatable/datatable-extension/custom.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.simple.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\cubastarterkit\resources\views/pages/userlist.blade.php ENDPATH**/ ?>