@extends('layouts.simple.master')
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/datatables.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/datatable-extension.css')}}">
<!-- <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/chartist.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/owlcarousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/prism.css')}}"> -->
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/sweetalert2.min.css')}}">
@endsection

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/select2.css')}}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h5>OFFICE PERFORMANCE CONTRACT</h5>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Pages</li>
<li class="breadcrumb-item active">Office Performance Contract</li>
@endsection


@section('content')
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
                                                                    <!-- <th>Final Rating</th> -->
                                                                    <th>Total Indicator</th>
                                                                    <th>Creator</th>
                                                                    <th>Date Created</th>
                                                                    
                                                                    
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                    <a href="{{route('showpc', ['year' => '2023', 'semester' => '1'])}}" class="btn btn-light btn-sm example-popover form-control " data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="View"><span class="icofont icofont-eye-alt" ></span></a>
                                                                        <!-- <a href="javascript:void(0)" class="btn btn-sm example-popover btn-primary icon-pencil form-control" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="View" ></a>
                                                                        <a href="javascript:void(0)" class="btn btn-sm example-popover btn-danger icon-trash form-control" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Delete"></a> -->
                                                                    </td>
                                                                    <td>2022</td>
                                                                    <td>2nd</td>
                                                                    <!-- <td>4.89000</td> -->
                                                                    <td>30</td>
                                                                    <td>Carolin Catalan</td>
                                                                    <td>2022/07/25</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                    <a href="{{route('showpc', ['year' => '2023', 'semester' => '2'])}}" class="btn btn-light btn-sm example-popover form-control " data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="View"><span class="icofont icofont-eye-alt" ></span></a>
                                                                        <!-- <a href="javascript:void(0)" class="btn btn-sm btn-primary icon-pencil "></a>
                                                                        <a href="javascript:void(0)" class="btn btn-sm btn-danger icon-trash "></a> -->
                                                                    </td>
                                                                    <td>2023</td>
                                                                    <td>1st</td>
                                                                    <!-- <td>4.96000</td> -->
                                                                    <td>40</td>
                                                                    <td>Carolin Catalan</td>
                                                                    <td>2023/01/25</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
							<!-- <p class="mb-0 m-t-30">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p> -->
						</div>
						<div class="tab-pane fade" id="profile-icon" role="tabpanel" aria-labelledby="profile-icon-tab">
                            <div class="col-sm-12">
                            
                                    <div class="card-body">
                                                        
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-xs">   
                                                <thead>
                                                    <tr id="final_rating">
                                                        <td colspan="5"></td>
                                                        <td><button onclick="save_opc()" class="btn btn-success btn-sm save-final-rating pull-right form-control" data-bs-original-title="Save" type="button"><span class="icon-save"></span></button></td>
                                                    </tr>
                                                </thead>             
                                                <thead>
                                                        <tr>
                                                            <th colspan="2" class="text-center"><strong>KEY RESULTS AREA</strong></th>
                                                            <th rowspan="2" class="col-sm-4 col-form-label text-center p-0"><strong>PERFORMANCE INDICATOR </br>(<i class="icofont icofont-ui-cart"></i> Quantity, <i class="icofont icofont-speech-comments"></i> Quality, <i class="icofont icofont-ui-calendar"></i> Timeliness)</strong></th>
                                                            <th rowspan="2" scope="col" class="col-sm-1 col-form-label text-center p-0"><strong>ALLOTTED BUDGET (in Php <i class="icofont icofont-cur-peso"></i>)</strong></th>
                                                            <th rowspan="2" scope="col" class="col-sm-2 col-form-label text-center p-0"><strong>ACCOUNTABILITY CENTER </br> (<i class="icofont icofont-company"></i> Division, <i class="icofont icofont-unity-hand"></i> Units, <i class="icofont icofont-user-alt-4"></i> Individuals)</strong></th>
                                                            <th rowspan="2" class="col-sm-1 text-center p-0"><button class="btn btn-primary btn-sm" type="button" data-bs-original-title="Add Performance Contract" data-bs-toggle="modal" data-bs-target="#createPCModal"><span class="fa fa-plus-square-o"></span></button></th>
                                                        </tr>
                                                    <tr align="center" > 
                                                        <th scope="col" class="col-sm-2 col-form-label text-center p-0"><strong><i class="icofont icofont-trophy"></i> Objectives, Program, Project, Activity</strong></th>
                                                        <th scope="col" class="col-sm-1 col-form-label text-center p-0"><strong><i class="icofont icofont-chart-pie"></i> Weight Allocation</strong></th>                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td colspan="1" style="background-color: rgb(128, 128, 128)" class="text-center"><strong>STRATEGIC PRIORITIES</strong></td>
                                                        <td colspan="1" style="background-color: rgb(128, 128, 128)" class="text-center"><strong>50%</strong></td>
                                                        <td colspan="1" style="background-color: rgb(128, 128, 128)" ></td>
                                                        <td colspan="1" style="background-color: rgb(128, 128, 128)" ></td>
                                                        <td colspan="1" style="background-color: rgb(128, 128, 128)" ></td>
                                                        <td colspan="1" style="background-color: rgb(128, 128, 128)" ></td>
                                                    </tr>
                                                </tbody>
                                                <tbody id="strategic2">
                                                    
                                                <!-- @foreach ($data as $d)
                                                    @if ($d->indicator_id == 1)
                                                        <tr>
                                                            <td class="p-0" >
                                                                <div class="text-center m-1">{{ $d->name }}</div>
                                                            </td>
                                                            <td class="p-0" >
                                                                <div class="row p-0 m-1">
                                                                        <div class="text-center">{{ $d->sub_weight_allocation }}</div>
                                                                </div>
                                                            </td>
                                                            <td class="p-0"><div class="row">
                                                                <div class="col-1 text-center p-0 m-1">{{ $d->sort }}</div>
                                                                <div class="col-10 p-0 m-1">
                                                                    <div class="m-1"><strong>Ql:</strong> {{ $d->quantity }}</div>
                                                                    <div class="m-1"><strong>Qn:</strong> {{ $d->quality }}</div>
                                                                    <div class="m-1"><strong>T:</strong> {{ $d->timeliness }}</div>
                                                                </div>
                                                            </div></td>
                                                            <td class="p-0">
                                                                <div class="row m-1 p-0">
                                                                        <div class="text-center"> {{ $d->alloted_budget }}</div>
                                                                </div>
                                                            </td>

                                                            <td class="p-0"><div class="row m-1">
                                                                    <div class="text-center">{{ $d->accountability_center }}</div>
                                                            </div></td>
                                                            <td></td>
                                                        </tr>
                                                    @endif
                                                @endforeach -->
                                                   
                                                </tbody>
                                                <tbody>
                                                    <tr>
                                                        <td colspan="1" style="background-color: rgb(128, 128, 128)" class="text-center"><strong>CORE FUNCTIONS</strong></td>
                                                        <td colspan="1" style="background-color: rgb(128, 128, 128)" class="text-center"><strong>35%</strong></td>
                                                        <td colspan="1" style="background-color: rgb(128, 128, 128)" ></td>   
                                                        <td colspan="1" style="background-color: rgb(128, 128, 128)" ></td>
                                                        <td colspan="1" style="background-color: rgb(128, 128, 128)" ></td>
                                                        <td colspan="1" style="background-color: rgb(128, 128, 128)" ></td>
                                                    </tr>
                                                </tbody>
                                                <tbody id="core2">
                                                    
                                                <!-- @foreach ($data as $d)
                                                    @if ($d->indicator_id == 2)
                                                    <tr>
                                                            <td class="p-0" >
                                                                <div class="text-center m-1">{{ $d->name }}</div>
                                                            </td>
                                                            <td class="p-0" >
                                                                <div class="row p-0 m-1">
                                                                        <div class="text-center">{{ $d->sub_weight_allocation }}</div>
                                                                </div>
                                                            </td>
                                                            <td class="p-0"><div class="row">
                                                                <div class="col-1 text-center p-0 m-1">{{ $d->sort }}</div>
                                                                <div class="col-10 p-0 m-1">
                                                                    <div class="m-1"><strong>Ql:</strong> {{ $d->quantity }}</div>
                                                                    <div class="m-1"><strong>Qn:</strong> {{ $d->quality }}</div>
                                                                    <div class="m-1"><strong>T:</strong> {{ $d->timeliness }}</div>
                                                                </div>
                                                            </div></td>
                                                            <td class="p-0">
                                                                <div class="row m-1 p-0">
                                                                        <div class="text-center"> {{ $d->alloted_budget }}</div>
                                                                </div>
                                                            </td>

                                                            <td class="p-0"><div class="row m-1">
                                                                    <div class="text-center">{{ $d->accountability_center }}</div>
                                                            </div></td>
                                                            <td></td>
                                                    @endif
                                                @endforeach -->
                                                </tbody>
                                                <tbody>
                                                    <tr>
                                                        <td colspan="1" style="background-color: rgb(128, 128, 128)" class="text-center"><strong>SUPPORT FUNCTIONS</strong></td>
                                                        <td colspan="1" style="background-color: rgb(128, 128, 128) " class="text-center"><strong>15%</strong></td>
                                                        <td colspan="1" style="background-color: rgb(128, 128, 128)" ></td>   
                                                        <td colspan="1" style="background-color: rgb(128, 128, 128)" ></td>
                                                        <td colspan="1" style="background-color: rgb(128, 128, 128)" ></td>
                                                        <td colspan="1" style="background-color: rgb(128, 128, 128)" ></td>      
                                                    </tr>
                                                </tbody>
                                                <tbody id="support2">
                                                    
                                                <!-- @foreach ($data as $d)
                                                    @if ($d->indicator_id == 3)
                                                        <tr>
                                                            <td class="p-0" >
                                                                <div class="text-center m-1">{{ $d->name }}</div>
                                                            </td>
                                                            <td class="p-0" >
                                                                <div class="row p-0 m-1">
                                                                        <div class="text-center">{{ $d->sub_weight_allocation }}</div>
                                                                </div>
                                                            </td>
                                                            <td class="p-0"><div class="row">
                                                                <div class="col-1 text-center p-0 m-1">{{ $d->sort }}</div>
                                                                <div class="col-10 p-0 m-1">
                                                                    <div class="m-1"><strong>Ql:</strong> {{ $d->quantity }}</div>
                                                                    <div class="m-1"><strong>Qn:</strong> {{ $d->quality }}</div>
                                                                    <div class="m-1"><strong>T:</strong> {{ $d->timeliness }}</div>
                                                                </div>
                                                            </div></td>
                                                            <td class="p-0">
                                                                <div class="row m-1 p-0">
                                                                        <div class="text-center"> {{ $d->alloted_budget }}</div>
                                                                </div>
                                                            </td>

                                                            <td class="p-0"><div class="row m-1">
                                                                    <div class="text-center">{{ $d->accountability_center }}</div>
                                                            </div></td>
                                                            <td></td>
                                                        </tr>
                                                    @endif
                                                @endforeach -->
                                                   
                                                </tbody>
                                                <tbody>
                                                    <tr id="total_weight">
                                                        <td name="total_weight" class="text-center p-1">Total Weight:</td>
                                                        <td colspan="1"></td>
                                                        <td colspan="4"></td>
                                                    </tr>
                                                </tbody>
                                                <tbody>
                                                    <tr id="final_rating">
                                                        <td colspan="5"></td>
                                                        <td><button onclick="save_opc()" class="btn btn-success btn-sm save-final-rating pull-right form-control" data-bs-original-title="Save" type="button"><span class="icon-save"></span></button></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>        
                                </div>
					        </div>
                        </div>
					</div>
			    </div>
		    </div>
        </div>

        <div class="modal fade" id="createPCModal" tabindex="-1" role="dialog" aria-labelledby="createPCModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document" style="max-width: 60%">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createPCModalLabel">Add Performance Contract</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                    <form action="" id="frm" name="frm" method="POST">
                        <div class="modal-body">
                            <div class="mb-2">
                                <div class="col-form-label">Select KRA Category</div>
                                <select id="category-id" class="form-control" >
                                    <optgroup label="Categories">
                                        <option data-name="" value=""></option>
                                        @if(!empty($category))
                                        @foreach ($category as $item)
                                        <option data-name="{{$item->name}}" value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </optgroup>
                                        @endif
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
                                        @if(!empty($indicator))
                                        @foreach ($indicator as $item)
                                        <option value="{{$item->sort}}">{{$item->sort}}</option>
                                        @endforeach
                                        @endif
                                    </optgroup>
                                </select>
                            </div>
                            <div id="indicator" class="mb-2">
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered table-xs">                
                                    <thead>
                                        <tr align="center">
                                            {{-- <th colspan="2">KEY RESULTS AREA</th> --}}
                                            <th rowspan="2" class="col-sm-4 col-form-label">Sub Weight Allocation</th>
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
                            <button class="btn btn-primary btn-sm" type="button" data-bs-dismiss="modal">Close</button>
                            <button class="btn btn-secondary btn-sm" type="submit" id="add-button">Add</button>
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
            </div>
        </div>
@endsection

@section('script')
<script src="{{asset('assets/js/select2/select2.full.min.js')}}"></script>
<!-- <script src="{{asset('assets/js/select2/select2-custom.js')}}"></script> -->
<script src="{{asset('assets/js/sweetalert2.all.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
<!-- <script src="{{asset('assets/js/datatable/datatable-extension/dataTables.buttons.min.js')}}"></script> -->
<script src="{{asset('assets/js/datatable/datatable-extension/jszip.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatable-extension/buttons.colVis.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatable-extension/pdfmake.min.js')}}"></script>
<!-- <script src="{{asset('assets/js/datatable/datatable-extension/vfs_fonts.js')}}"></script> -->
<script src="{{asset('assets/js/datatable/datatable-extension/dataTables.autoFill.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatable-extension/dataTables.select.min.js')}}"></script>
<!-- <script src="{{asset('assets/js/datatable/datatable-extension/buttons.bootstrap4.min.js')}}"></script> -->
<script src="{{asset('assets/js/datatable/datatable-extension/buttons.html5.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatable-extension/buttons.print.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatable-extension/dataTables.responsive.min.js')}}"></script>
<!-- <script src="{{asset('assets/js/datatable/datatable-extension/responsive.bootstrap4.min.js')}}"></script> -->
<script src="{{asset('assets/js/datatable/datatable-extension/dataTables.keyTable.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatable-extension/dataTables.colReorder.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatable-extension/dataTables.fixedHeader.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatable-extension/dataTables.rowReorder.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatable-extension/dataTables.scroller.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatable-extension/custom.js')}}"></script>
<!-- <script src="{{asset('assets/js/typeahead/handlebars.js')}}"></script>
<script src="{{asset('assets/js/typeahead/typeahead.bundle.js')}}"></script>
<script src="{{asset('assets/js/typeahead/typeahead.custom.js')}}"></script>
<script src="{{asset('assets/js/typeahead-search/handlebars.js')}}"></script>
<script src="{{asset('assets/js/typeahead-search/typeahead-custom.js')}}"></script> -->
<!-- <script src="{{asset('assets/js/notify/bootstrap-notify.min.js')}}"></script> -->
<script src="{{asset('assets/js/sweet-alert/sweetalert.min.js')}}"></script>
<script src="{{asset('assets/js/select2/select2.full.min.js')}}"></script>
<!-- <script src="{{asset('assets/js/select2/select2-custom.js')}}"></script> -->
<script src="{{asset('assets/js/form-validation-custom.js')}}"></script>
<script src="{{asset('assets/js/bookmark/jquery.validate.min.js')}}"></script>
<script src="{{asset('assets/js/contacts/custom.js')}}"></script>

<script>
    let data_arr = [];
    // get_activity(1);

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

    $('#createPCModal').on('show.bs.modal', function (e) {
        get_activity(0);
        $('#category-id').val('');
        $('#indicator-id').val('');
        $('#strategic1').empty();
    });

    function get_activity(cat_id) {
        let act_opt_id = $('#activity-id optgroup');
        $.get( BASE_URL + "ajax/get_activity/" + cat_id, function(res) {
            act_opt_id.empty();
            res.forEach(e => {
                act_opt_id.append('<option data-name="'+e.name+'" value="'+e.id+'">'+e.name+'</option>');
            });
        });
    }
    
    function get_indicator(indi_id) {
        let data = $('#strategic1')
        data.empty();
        $.get(BASE_URL + "ajax/get_indicator/" + indi_id, function(res){
            res.forEach(e => {
                data.append('<tr>' +
                                '<input type="hidden" name="indicator[]" value="'+e.id+'" />'+
                                '<td><input type="hidden" name="weight[]" value="'+e.sub_weight_allocation+'"/>'+e.sub_weight_allocation+'</td>'+
                                '<td><input type="hidden" name="target[]" value="'+e.target_indicator_desc+'"/>'+e.target_indicator_desc+'</td>'+
                                '<td><input type="hidden" name="qual[]" value="'+e.quantity+'"/>'+e.quantity+'</td>'+
                                '<td><input type="hidden" name="quan[]" value="'+e.quality+'"/>'+e.quality+'</td>'+
                                '<td><input type="hidden" name="time[]" value="'+e.timeliness+'"/>'+e.timeliness+'</td>'+
                                '<td><input type="text" class="form-control" name="budget[]" /></td>'+
                                '<td><input type="hidden" name="office[]" value="'+e.name+'"/>'+e.name+'</td>'+
                            '</tr>')
            })
        });
    }

    function removeActivity(indicator_code) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                const idxObj = data_arr.findIndex(object => {
                    return object.indicator_code == indicator_code;
                });

                data_arr.splice(idxObj, 1);
                $(`#indicator-id>optgroup>option[value=${indicator_code}]`).removeAttr('disabled');
                generatePCElement();
            }
        })
       
    }

    function generatePCElement() {
        let strategic_elem = $('#strategic2');
        let core_elem = $('#core2');
        let support_elem = $('#support2');

        strategic_elem.empty();
        core_elem.empty();
        support_elem.empty();
        data_arr.forEach(e => {
            for (let i = 0; i < e.indicator.length; i++) {
                let activityNameElement = '';
                let actionElement = '';
                if (i == 0) {
                    activityNameElement =  '<td class="p-0" rowspan='+e.indicator.length+'>' +
                    '<div class="text-center m-1">'+e.activity_name+'</div>' +
                    '</td>';    
                    actionElement = '<td class="p-0" rowspan='+e.indicator.length+'>' +
                    '<button onclick="removeActivity('+e.indicator_code+')" class="btn btn-sm btn-danger icon-trash m-auto d-block"></button>' +
                    '</td>';
                }

                let strategicElement = '<tr>' + activityNameElement+
                '<td class="p-0" >' +
                '<div class="row p-0 m-1">' +
                '<div class="text-center">'+e.weight[i]+'</div>' +
                '</div>' +
                '</td>' +
                '<td class="p-0"><div class="row">' +
                '<div class="col-1 text-center p-0 m-1">'+e.indicator_code+'</div>' +
                '<div class="col-10 p-0 m-1">' +
                '<div ><strong>'+e.target[i]+'</strong></div>' +
                '<div class="m-1"><strong>Ql:</strong>'+e.quan[i]+'</div>' +
                '<div class="m-1"><strong>Qn:</strong>'+e.qual[i]+'</div>' +
                '<div class="m-1"><strong>T:</strong>'+e.time[i]+'</div>' +
                '</div>' +
                '</div></td>' +
                '<td class="p-0">' +
                '<div class="row m-1 p-0">' +
                '<div class="text-center"> '+e.budget_alloted[i]+'</div>' +
                '</div>' +
                '</td>' + '<td class="p-0"><div class="row m-1">' +
                '<div class="text-center">'+e.office[i]+'</div>' +
                '</div></td>' +
                actionElement +
                '</tr>';

                switch (e.category_id) {
                    case '1':
                        strategic_elem.append(strategicElement);
                        break;
                    case '2':
                        core_elem.append(strategicElement);
                        break;
                    case '3':
                        support_elem.append(strategicElement);
                        break;
                    default:
                        console.log('error');
                        break;
                }
                
            }
            
        });
    }
    
    $("#frm").submit(function(event){
        event.preventDefault();

        if($("#indicator-id").val() == '') {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Please select indicator code!',
            })
        } else {
            let data = {
                'category_id': $('#category-id').val(),
                'activity_id': $('#activity-id').val(),
                'category_name': $('#category-id option:selected').attr('data-name'),
                'activity_name': $('#activity-id option:selected').attr('data-name'),
                'indicator_code': $('#indicator-id').val(),
                'indicator': $("input[name='indicator[]']").map(function(){return $(this).val();}).get(),
                'weight': $("input[name='weight[]']").map(function(){return $(this).val();}).get(),
                'target': $("input[name='target[]']").map(function(){return $(this).val();}).get(),
                'qual': $("input[name='qual[]']").map(function(){return $(this).val();}).get(),
                'quan': $("input[name='quan[]']").map(function(){return $(this).val();}).get(),
                'time': $("input[name='time[]']").map(function(){return $(this).val();}).get(),
                'budget_alloted': $("input[name='budget[]']").map(function(){return $(this).val();}).get(),
                'office': $("input[name='office[]']").map(function(){return $(this).val();}).get(),
            };

            let indicator_code = $('#indicator-id').val() ?? 0;

            $(`#indicator-id>optgroup>option[value=${indicator_code}]`).attr('disabled','disabled');

            data_arr.push(data);

            generatePCElement();
            $('#createPCModal').modal('toggle');
           
            
        }
    });

    function save_opc() {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, save it!'
        }).then((result) => {
            console.log(data_arr);
            if (result.isConfirmed) {
                $.ajax ({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: BASE_URL + 'performance_contract/save_indicator',
                    type: 'POST',
                    data: {data: data_arr},
                    success: function(response){
                        Swal.fire(
                            'Confirm!',
                            'Your file has been saved.',
                            'success'
                        )
                        // location.reload();
                        // $('#createPCModal').modal('hide');
                        setTimeout(() => {
                            location.reload();
                        }, 1000);
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
</script>
@endsection
