
<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/datatables.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/datatable-extension.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/animate.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/chartist.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/owlcarousel.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/prism.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/sweetalert2.min.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/select2.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
<h3>DIVISION PERFORMANCE CONTRACT</h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
<li class="breadcrumb-item">Pages</li>
<li class="breadcrumb-item active">Division Performance Contract</li>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <div class="col-sm-12">
		<div class="card">
					<ul class="nav nav-tabs" id="icon-tab" role="tablist">
						<li class="nav-item"><a class="nav-link active" id="icon-home-tab" data-bs-toggle="tab" href="#icon-home" role="tab" aria-controls="icon-home" aria-selected="true"><i class="icofont icofont-list"></i>Performance Contract List</a></li>
						<li class="nav-item"><a class="nav-link" id="profile-icon-tab" data-bs-toggle="tab" href="#profile-icon" role="tab" aria-controls="profile-icon" aria-selected="false"><i class="icofont icofont-ui-add"></i>Create Performance Contract</a></li>
						<!-- <li class="nav-item"><a class="nav-link" id="contact-icon-tab" data-bs-toggle="tab" href="#contact-icon" role="tab" aria-controls="contact-icon" aria-selected="false"><i class="icofont icofont-ui-rating"></i>Performance Contract Ratings</a></li> -->
					</ul>
					<div class="tab-content" id="icon-tabContent">
						<div class="tab-pane fade show active" id="icon-home" role="tabpanel" aria-labelledby="icon-home-tab">
                           <div class="card mb-0">
                              <div class="card-body p-0">
                                 <div class="row list-persons" id="addcon">
                                    <div class="col-xl-12 col-md-12">
                                       <div class="tab-content" id="v-pills-tabContent">
                                          <div class="tab-pane contact-tab-0 tab-content-child fade show active" id="v-pills-user" role="tabpanel" aria-labelledby="v-pills-user-tab">
                                                <div class="card-body">
                                                    <div class="dt-ext table-responsive">
                                                        <table class="display table-xs" id="export-button">
                                                            <thead>
                                                                <tr><th>Action</th>
                                                                    <th>Year</th>
                                                                    <th>Semester</th>
                                                                    <th>Final Rating</th>
                                                                    <th>Adjectival Rating</th>
                                                                    <th>Creator</th>
                                                                    <th>Date Created</th>
                                                                    
                                                                    
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <a href="#" onclick="editContact(0)" class="btn btn-light btn-sm example-popover form-control" href="#" onclick="editContact(0)" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="View"><span class="icofont icofont-eye-alt" ></span></a>
                                                                        <!-- <a href="javascript:void(0)" class="btn btn-sm example-popover btn-primary icon-pencil form-control" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="View" ></a>
                                                                        <a href="javascript:void(0)" class="btn btn-sm example-popover btn-danger icon-trash form-control" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Delete"></a> -->
                                                                    </td>
                                                                    <td>2022</td>
                                                                    <td>2nd</td>
                                                                    <td>4.89000</td>
                                                                    <td>Very Satisfied</td>
                                                                    <td>Carolin Catalan</td>
                                                                    <td>2022/07/25</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                    <a class="btn btn-light btn-sm example-popover form-control" href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="View"> <span class="icofont icofont-eye-alt" ></span></a>
                                                                        <!-- <a href="javascript:void(0)" class="btn btn-sm btn-primary icon-pencil "></a>
                                                                        <a href="javascript:void(0)" class="btn btn-sm btn-danger icon-trash "></a> -->
                                                                    </td>
                                                                    <td>2023</td>
                                                                    <td>1st</td>
                                                                    <td>4.96000</td>
                                                                    <td>Very Satisfied</td>
                                                                    <td>Carolin Catalan</td>
                                                                    <td>2023/01/25</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                       </div>
                                       <div class="contact-editform">
                                            <!-- <div class="col-sm-12"> -->
                                                <!-- <div class="card"> -->
                                                    <!-- <div class="card-body"> -->
                                                        
                                                        <div class="table-responsive">
                                                        <button class="btn btn-primary btn-sm update-contact " data-bs-original-title="Cancel" type="button"><span class="icon-arrow-left"></span></button>
                                                        <button href="#" onclick="history(0)" class="btn btn-primary btn-sm" data-bs-original-title="History" data-bs-dismiss="modal" type="button"><span class="fa fa-history"></span></button>
                                                        <button href="<?php echo e(route('print')); ?>" class="btn btn-primary btn-sm" data-bs-original-title="Print" data-bs-dismiss="modal" type="button"><span class="icon-printer"></span></button>
                                                        <button class="btn btn-success btn-sm saveOfficepc pull-right" data-bs-original-title="Update" type="button"><span class="icon-save-alt"></span></button>
                                                        <button class="btn btn-danger btn-sm deleteOfficepc pull-right" data-bs-original-title="Delete this DPC" type="button"><span class="icon-trash"></span></button>
                                                        <div>
                                                            <table class="table table-bordered table-sm"> 
                                                                <tr>
                                                                    <th class="col-sm-1 col-form-label">Created by :</th>
                                                                    <th class="col-sm-2 col-form-label"></th>
                                                                    
                                                                    <th class="col-sm-1 col-form-label">ID No.:</th>
                                                                    <th class="col-sm-2 col-form-label"></th>
                                                                    
                                                                    <th class="col-sm-1 col-form-label">Date Created:</th>
                                                                    <th class="col-sm-2 col-form-label"></th>
                                                                    
                                                                <tr>
                                                                <tr>
                                                                    <th class="col-sm-1 col-form-label">Division :</th>
                                                                    <th class="col-sm-2 col-form-label"></th>
                                                                    
                                                                    <th class="col-sm-1 col-form-label">Section:</th>
                                                                    <th class="col-sm-2 col-form-label"></th>
                                                                    
                                                                    <th class="col-sm-1 col-form-label">Semester:</th>
                                                                    <th class="col-sm-2 col-form-label"></th>
                                                                    
                                                                <tr>                  
                                                             
                                                            </table>
                                                        </div>
                                                            <table class="table table-bordered table-xs">                
                                                                <thead>
                                                                    <tr align="center">
                                                                        <th colspan="2">KEY RESULTS AREA</th>
                                                                        <th rowspan="2" class="col-sm-4 col-form-label">PERFORMANCE INDICATOR </br>(<i class="icofont icofont-ui-cart"></i> Quantity, <i class="icofont icofont-speech-comments"></i> Quality, <i class="icofont icofont-ui-calendar"></i> Timeliness)</th>
                                                                        <th rowspan="2" scope="col" class="col-sm-1 col-form-label">ALLOTTED BUDGET (in Php <i class="icofont icofont-cur-peso"></i>)</th>
                                                                        <th rowspan="2" scope="col" class="col-sm-3 col-form-label">ACCOUNTABILITY CENTER </br> (<i class="icofont icofont-company"></i> Division, <i class="icofont icofont-unity-hand"></i> Units, <i class="icofont icofont-user-alt-4"></i> Individuals)</th>
                                                                        <th rowspan="2" scope="col" class="col-sm-1 col-form-label"><button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><span class="fa fa-plus-square-o"></span></button></th>
                                                                        
                                                                    </tr>
                                                                    <tr align="center" > 
                                                                        <th scope="col" class="col-sm-2 col-form-label"><i class="icofont icofont-trophy"></i> Objectives, Program, Project, Activity</th>
                                                                        <th scope="col" class="col-sm-1 col-form-label"><i class="icofont icofont-chart-pie"></i> Weight Allocation</th>                        
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td colspan="1" style="background-color: rgb(128, 128, 128)" >STRATEGIC PRIORITIES</td>
                                                                        <td colspan="1" style="background-color: rgb(128, 128, 128)" >50%</td>
                                                                        <td colspan="6" style="background-color: rgb(128, 128, 128)" ></td>
                                                                    </tr>
                                                                </tbody>
                                                                <tbody id="strategic2"></tbody>
                                                                <tbody>
                                                                    <tr>
                                                                        <td colspan="1" style="background-color: rgb(128, 128, 128)">CORE FUNCTIONS</td>
                                                                        <td colspan="1" style="background-color: rgb(128, 128, 128)" >35%</td>
                                                                        <td colspan="5" style="background-color: rgb(128, 128, 128)" ></td>                       
                                                                    </tr>
                                                                </tbody>
                                                                <tbody>
                                                                    <tr>
                                                                        <td colspan="1" style="background-color: rgb(128, 128, 128)">SUPPORT FUNCTIONS</td>
                                                                        <td colspan="1" style="background-color: rgb(128, 128, 128)" >15%</td>
                                                                        <td colspan="5" style="background-color: rgb(128, 128, 128)" ></td>    
                                                                    </tr>
                                                                </tbody>
                                                                <tbody>
                                                                    <tr id="total_weight">
                                                                        <td colspan="1"></td>
                                                                        <td name="total_weight">Total Weight:</td>
                                                                        <td colspan="4"></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <button class="btn btn-success btn-sm saveOfficepc pull-right" data-bs-original-title="Update" type="button"><span class="icon-save-alt"></span></button>
                                                        </div>
                                                    <!-- </div>         -->
                                                <!-- </div> -->
                                            <!-- </div> -->
                                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
						</div>
                    </div>
                    <div class="tab-pane fade" id="profile-icon" role="tabpanel" aria-labelledby="profile-icon-tab">
                            <div class="col-sm-12">
                                <!-- <div class="card"> -->
                                    <div class="card-body">
                                                        <!-- <div class="row">
                                                            <div class="col-md-4 mb-3">
                                                            </div>
                                                            <div class="col-md-2 mb-3">
                                                                <select class="form-select form-control" name="select">
                                                                    <option value="opt1">Select Year</option>
                                                                    <option value="opt2">2022</option>
                                                                    <option value="opt3">2023</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-2 mb-3">
                                                                <select class="form-select form-control" name="select">
                                                                    <option value="0"><h5>Select Semester</h5></option>
                                                                    <option value="1"><h5>First Semester</h5></option>
                                                                    <option value="2"><h5>Second Semester</h5></option>
                                                                </select>
                                                            </div>
                                                        </div> -->
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-xs"> 
                                                <thead>
                                                    <tr id="final_rating">
                                                        <td colspan="5"></td>
                                                        <td name="total_weight"><button class="btn btn-success btn-sm save-final-rating pull-right form-control" type="button"><span class="icon-save"></span></button></td>
                                                        <!-- <td colspan="4"></td> -->
                                                    </tr>
                                                </thead>               
                                                <thead>
                                                    <tr align="center">
                                                        <th colspan="2">KEY RESULTS AREA</th>
                                                        <th rowspan="2" class="col-sm-4 col-form-label">PERFORMANCE INDICATOR </br>(<i class="icofont icofont-ui-cart"></i> Quantity, <i class="icofont icofont-speech-comments"></i> Quality, <i class="icofont icofont-ui-calendar"></i> Timeliness)</th>
                                                        <th rowspan="2" scope="col" class="col-sm-1 col-form-label">ALLOTTED BUDGET (in Php <i class="icofont icofont-cur-peso"></i>)</th>
                                                        <th rowspan="2" scope="col" class="col-sm-3 col-form-label">ACCOUNTABILITY CENTER </br> (<i class="icofont icofont-company"></i> Division, <i class="icofont icofont-unity-hand"></i> Units, <i class="icofont icofont-user-alt-4"></i> Individuals)</th>
                                                        <th rowspan="2" scope="col" class="col-sm-1 col-form-label"><button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#createPCmodal"><span class="fa fa-plus-square-o"></span></button></th>
                                                        
                                                    </tr>
                                                    <tr align="center" > 
                                                        <th scope="col" class="col-sm-2 col-form-label"><i class="icofont icofont-trophy"></i> Objectives, Program, Project, Activity</th>
                                                        <th scope="col" class="col-sm-1 col-form-label"><i class="icofont icofont-chart-pie"></i> Weight Allocation</th>                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td colspan="1" style="background-color: rgb(128, 128, 128)" >STRATEGIC PRIORITIES</td>
                                                        <td colspan="1" style="background-color: rgb(128, 128, 128)" >50%</td>
                                                        <td colspan="6" style="background-color: rgb(128, 128, 128)" ></td>
                                                    </tr>
                                                </tbody>
                                                <tbody id="strategic2"></tbody>
                                                <tbody>
                                                    <tr>
                                                        <td colspan="1" style="background-color: rgb(128, 128, 128)">CORE FUNCTIONS</td>
                                                        <td colspan="1" style="background-color: rgb(128, 128, 128)" >35%</td>
                                                        <td colspan="5" style="background-color: rgb(128, 128, 128)" ></td>                       
                                                    </tr>
                                                </tbody>
                                                <tbody>
                                                    <tr>
                                                        <td colspan="1" style="background-color: rgb(128, 128, 128)">SUPPORT FUNCTIONS</td>
                                                        <td colspan="1" style="background-color: rgb(128, 128, 128)" >15%</td>
                                                        <td colspan="5" style="background-color: rgb(128, 128, 128)" ></td>    
                                                    </tr>
                                                </tbody>
                                                <tbody>
                                                    <tr id="total_weight">
                                                        <td colspan="1"></td>
                                                        <td name="total_weight">Total Weight:</td>
                                                        <td colspan="4"></td>
                                                    </tr>
                                                </tbody>
                                                <tbody>
                                                    <tr id="final_rating">
                                                        <td colspan="5"></td>
                                                        <td name="total_weight"><button class="btn btn-success btn-sm save-final-rating pull-right form-control" type="button"><span class="icon-save"></span></button></td>
                                                        <!-- <td colspan="4"></td> -->
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                            <!-- <button class="btn btn-primary pull-right" type="button" data-bs-dismiss="modal">Cancel</button> -->
                                            <!-- <button class="btn btn-success update-contact pull-right form-control" type="button">Save</button> -->
                                    </div>        
                                <!-- </div> -->
                            </div>
							<!-- <p class="mb-0 m-t-30">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p> -->
						</div>
                </div>
            </div>
		</div>
	</div>


    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document" style="max-width: 60%">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Performance Contract</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
                <form action="" id="frm" name="frm" method="POST">
                    <div class="modal-body">
                        <div class="mb-2">
                            <div class="col-form-label">Select KRA Category</div>
                            <select id="category-id" class="form-control" >
                                <optgroup label="Categories">
                                    <?php if(!empty($category)): ?>
                                    <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </optgroup>
                                    <?php endif; ?>
                            </select>
                        </div>
                        <div class="mb-2">
                            <div class="col-form-label">Select Objectives, Program, Project and Activity</div>
                            <select id="activity-id" class="form-control">
                                <optgroup label="Activity Library">
                                </optgroup>
                            </select>
                        </div>
                        <div class="mb-2">
                            <div class="col-form-label">Select Indicator Code #</div>
                            <select id="indicator-id" class="form-control">
                                <optgroup label="Code #">
                                    <option selected></option>
                                    <?php if(!empty($indicator)): ?>
                                    <?php $__currentLoopData = $indicator; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($item->sort); ?>"><?php echo e($item->sort); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </optgroup>
                            </select>
                        </div>
                        <div id="indicator" class="mb-2">
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered table-xs">                
                                <thead>
                                    <tr align="center">
                                        
                                        <th rowspan="2" class="col-sm-4 col-form-label">Target Indicator Description</th>
                                        <th rowspan="2" class="col-sm-4 col-form-label">Quantity</th>
                                        <th rowspan="2" class="col-sm-4 col-form-label">Quality</th>
                                        <th rowspan="2" class="col-sm-4 col-form-label">Timeliness</th>
                                        <th rowspan="2" scope="col" class="col-sm-1 col-form-label">ALLOTTED BUDGET (in Php)</th>
                                        <th rowspan="2" scope="col" class="col-sm-3 col-form-label">ACCOUNTABILITY CENTER (Division, Units, Individuals)</th>
                                    </tr>
                                </thead>
                                <tbody id="strategic1"></tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" type="button" data-bs-dismiss="modal">Close</button>
                        <button class="btn btn-secondary" type="submit" id="add-button">Add</button>
                    </div>   
                </form>
        </div>
        </div>
    </div>

    <div class="modal fade" id="createPCmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document" style="max-width: 60%">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Performance Contract</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
                <form action="" id="frm" name="frm" method="POST">
                    <div class="modal-body">
                        <div class="mb-2">
                            <div class="col-form-label">Select KRA Category</div>
                            <select id="category-id" class="form-control" >
                                <optgroup label="Categories">
                                    <?php if(!empty($category)): ?>
                                    <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </optgroup>
                                    <?php endif; ?>
                            </select>
                        </div>
                        <div class="mb-2">
                            <div class="col-form-label">Select Objectives, Program, Project and Activity</div>
                            <select id="activity-id" class="form-control">
                                <optgroup label="Activity Library">
                                </optgroup>
                            </select>
                        </div>
                        <div class="mb-2">
                            <div class="col-form-label">Select Indicator Code #</div>
                            <select id="indicator-id" class="form-control">
                                <optgroup label="Code #">
                                    <option selected></option>
                                    <?php if(!empty($indicator)): ?>
                                    <?php $__currentLoopData = $indicator; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($item->sort); ?>"><?php echo e($item->sort); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </optgroup>
                            </select>
                        </div>
                        <div id="indicator" class="mb-2">
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered table-xs">                
                                <thead>
                                    <tr align="center">
                                        
                                        <th rowspan="2" class="col-sm-4 col-form-label">Target Indicator Description</th>
                                        <th rowspan="2" class="col-sm-4 col-form-label">Quantity</th>
                                        <th rowspan="2" class="col-sm-4 col-form-label">Quality</th>
                                        <th rowspan="2" class="col-sm-4 col-form-label">Timeliness</th>
                                        <th rowspan="2" scope="col" class="col-sm-1 col-form-label">ALLOTTED BUDGET (in Php)</th>
                                        <th rowspan="2" scope="col" class="col-sm-3 col-form-label">ACCOUNTABILITY CENTER (Division, Units, Individuals)</th>
                                    </tr>
                                </thead>
                                <tbody id="strategic1"></tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" type="button" data-bs-dismiss="modal">Close</button>
                        <button class="btn btn-secondary" type="submit" id="add-button">Add</button>
                    </div>   
                </form>
        </div>
        </div>
    </div>

 <div id="right-history">
            <div class="modal-header p-l-20 p-r-20">
                <h6 class="modal-title w-100">Contact History<span class="pull-right"><a class="closehistory" href="#"><i class="icofont icofont-close"></i></a></span></h6>
                    </div>
                        <div class="history-details">
                            <div class="text-center">
                                <i class="icofont icofont-ui-edit"></i>
                                <p>Contact has not been modified yet.</p>
                            </div>
                        <div class="media">
                            <i class="icofont icofont-star me-3"></i>
                        <div class="media-body mt-0">
                            <h6 class="mt-0">Contact Created</h6>
                            <p class="mb-0">Contact is created via mail</p>
                        <span class="f-12">Sep 10, 2019 4:00</span>
                    </div>
                </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('assets/js/select2/select2.full.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/select2/select2-custom.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/sweetalert2.all.min.js')); ?>"></script>
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
<script src="<?php echo e(asset('assets/js/typeahead/handlebars.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/typeahead/typeahead.bundle.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/typeahead/typeahead.custom.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/typeahead-search/handlebars.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/typeahead-search/typeahead-custom.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/notify/bootstrap-notify.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/sweet-alert/sweetalert.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/select2/select2.full.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/select2/select2-custom.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/form-validation-custom.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/bookmark/jquery.validate.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/contacts/custom.js')); ?>"></script>
<script>
    get_activity(1);

    $('#category-id').change(function() {
        let cat_id = $(this).val();
        console.log(cat_id);
        get_activity(cat_id);
    });

    $('#indicator-id').change(function() {
        let indi_id = $(this).val();
        console.log(indi_id);
        get_indicator(indi_id);
    });

    

    function get_activity(cat_id) {
        let act_opt_id = $('#activity-id optgroup');
        $.get( BASE_URL + "ajax/get_activity/" + cat_id, function(res) {
            act_opt_id.empty();
            res.forEach(e => {
                act_opt_id.append('<option value="'+e.id+'">'+e.name+'</option>');
            });
        });
    }
    
    function get_indicator(indi_id) {
        let data = $('#strategic1')
        data.empty();
        $.get(BASE_URL + "ajax/get_indicator/" + indi_id, function(res){
            res.forEach(e => {
                data.append('<tr>' +
                                '<td><input type="hidden" name="indicator[]" value="'+e.id+'" />'+e.target_indicator_desc+'</td>'+
                                '<td>'+e.quantity+'</td>'+
                                '<td>'+e.quality+'</td>'+
                                '<td>'+e.timeliness+'</td>'+
                                '<td><input type="text" class="form-control" name="budget[]" /></td>'+
                                '<td>'+e.name+'</td>'+
                            '</tr>')
            })
            
        });
        
    }

    // function get_indicator(indi_id) {
    //     let data = $('#strategic2')
    //     data.empty();
    //     $.get(BASE_URL + "ajax/get_indicator/" + indi_id, function(res){
    //         res.forEach(e => {
    //             data.append('<tr>' +
    //                             '<td></td>'+
    //                             '<td></td>'+
    //                             '<td>'+e.target_indicator_desc+ '<br>' +e.quantity+ '<br>' +e.quality+ '<br>' +e.timeliness+'</td>'+
    //                             // '<td>'+e.quantity+'</td>'+
    //                             // '<td>'+e.quality+'</td>'+
    //                             // '<td>'+e.timeliness+'</td>'+
    //                             '<td><input type="text"></input></td>'+
    //                             '<td>'+e.name+'</td>'+
    //                         '</tr>')
    //         })
    //     });
    // }

    // $('#add-button').on('click', () => {
    //     alert("submit");

       
    // });

    $("#frm").submit(function(event){
        event.preventDefault();

        if($("#indicator-id").val() == '') {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Please select indicator code!',
            })
        } else {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, save it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    let data_arr = {
                        // 'category_id': $('#category-id').val(),
                        'activity_id': $('#activity-id').val(),
                        'indicator_code': $('#indicator-id').val(),
                        'indicator': $("input[name='indicator[]']").map(function(){return $(this).val();}).get(),
                        // 'budget_alloted': $("input[name='budget[]']").map(function(){return $(this).val();}).get(),
                    };
                    
                    
                    $.ajax ({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        url: 'save_indicator',
                        type: 'post',
                        data: data_arr,
                        dataType: 'json',
                        success: function(response){
                            Swal.fire(
                                'Confirm!',
                                'Your file has been saved.',
                                'success'
                            )
                        },
                        error: function(error){
                            Swal.fire(
                                'Failed!',
                                'Your file has not been saved.',
                                'error'
                            )
                        }
                    });
                   
                }
            })
        }
    });
    
        // $.ajax ({
        //     url: 'save_indicator',
        //     type: 'post',
        //     data: $("#frm").serializeArray(),
        //     dataType: 'json',
        //     success: function(response){
        //        console.log(data);
        //     }

        // })
        // $(document).ready(function() {
        // $("#frm").on('button', function(event){
        //     event.preventDefualt();
        //     $.ajax ({
        //         url: 'save_indicator',
        //         type: 'post',
        //         data: $("#frm").serializeArray(),
        //         dataType: 'json',
        //         success: function(response){
        //         console.log(response);
        //         alert("Data Saved");
        //         },
        //         error: function(error){
        //             console.log(error);
        //             alert("Data Not Saved");
        //         }
        //     });
        // });
    // });
        // $.post(BASE_URL + "save_indicator", function(res){
        //     res.forEach(e => {
        //         data.append('<tr>' +
        //                         '<td>'+e.target_indicator_desc+'</td>'+
        //                         '<td>'+e.quantity+'</td>'+
        //                         '<td>'+e.quality+'</td>'+
        //                         '<td>'+e.timeliness+'</td>'+
        //                         '<td><input type="text"></input></td>'+
        //                         '<td>'+e.name+'</td>'+
        //                     '</tr>')
        //     })
            
        // });
    // })
</script>
<?php $__env->stopSection(); ?>

<!-- <?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('assets/js/datatable/datatables/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/datatable/datatable-extension/dataTables.buttons.min.js')); ?>"></script>
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
<script src="<?php echo e(asset('assets/js/typeahead/handlebars.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/typeahead/typeahead.bundle.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/typeahead/typeahead.custom.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/typeahead-search/handlebars.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/typeahead-search/typeahead-custom.js')); ?>"></script>

<?php $__env->stopSection(); ?> -->
<?php echo $__env->make('layouts.simple.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\cubastarterkit\resources\views/pages/dpcpage/divisionpc.blade.php ENDPATH**/ ?>