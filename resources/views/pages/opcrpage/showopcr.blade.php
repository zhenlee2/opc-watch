@extends('layouts.simple.master')
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/datatables.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/datatable-extension.css')}}">
<!-- <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/chartist.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/owlcarousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/prism.css')}}"> -->
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/sweetalert2.min.css')}}">

<!-- MOV JS -->
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/select2.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/date-picker.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/dropzone.css')}}">
@endsection

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/select2.css')}}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h5>OFFICE PERFORMANCE CONTRACT REVIEW</h5>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Pages</li>
<li class="breadcrumb-item active"> Office Performance Contract Review</li>
@endsection

@section('content')
        <div class="col-sm-12">
			<div class="card">
					<ul class="nav nav-tabs" id="icon-tab" role="tablist">
						<li class="nav-item"><a class="nav-link active" id="icon-home-tab" data-bs-toggle="tab" href="#icon-home" role="tab" aria-controls="icon-home" aria-selected="true"><i class="icofont icofont-list"></i>Performance Contract Review</a></li>
						<!-- <li class="nav-item"><a class="nav-link" id="profile-icon-tab" data-bs-toggle="tab" href="#profile-icon" role="tab" aria-controls="profile-icon" aria-selected="false"><i class="icofont icofont-ui-add"></i>Create Performance Contract</a></li> -->
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
                                                    <div class="table-responsive">
                                                        <a href="{{route('office')}}" class="btn btn-primary btn-sm update-contact btn-sm" data-bs-original-title="Cancel" type="button"><span class="icon-arrow-left"></span></a>
                                                        <button href="#" onclick="history(0)" class="btn btn-primary btn-sm" data-bs-original-title="History" data-bs-dismiss="modal" type="button"><span class="fa fa-history"></span></button>
                                                        <button href="{{route('print', ['year' => $year, 'semester' => $semester])}}" class="btn btn-primary btn-sm" data-bs-original-title="Print" data-bs-dismiss="modal" type="button"><span class="icon-printer"></span></button>
                                                        <!-- <button class="btn btn-success btn-sm saveOfficepc pull-right" data-bs-original-title="Update" type="button"><span class="icon-save-alt"></span></button> -->
                                                        <!-- <button class="btn btn-danger btn-sm deleteOfficepc pull-right" data-bs-original-title="Delete this OPC" type="button"><span class="icon-trash"></span></button> -->
                                                        <!-- <div>
                                                            <table class="table table-bordered table-xs"> 
                                                                <tr>
                                                                    <th class="col-sm-1 col-form-label p-1">Created by :</th>
                                                                    <th class="col-sm-2 col-form-label p-1">CAroline</th>
                                                                    
                                                                    <th class="col-sm-1 col-form-label p-1">ID No.:</th>
                                                                    <th class="col-sm-2 col-form-label p-1"></th>
                                                                    
                                                                    <th class="col-sm-1 col-form-label p-1">Date Created:</th>
                                                                    <th class="col-sm-2 col-form-label p-1"></th>
                                                                    
                                                                <tr>
                                                                <tr>
                                                                    <th class="col-sm-1 col-form-label p-1">Division :</th>
                                                                    <th class="col-sm-2 col-form-label p-1"></th>
                                                                    
                                                                    <th class="col-sm-1 col-form-label p-1">Section:</th>
                                                                    <th class="col-sm-2 col-form-label p-1"></th>
                                                                    
                                                                    <th class="col-sm-1 col-form-label p-1">Semester:</th>
                                                                    <th class="col-sm-2 col-form-label p-1"></th>
                                                                <tr>                  
                                                            </table>
                                                        </div> -->
                                                            <table class="table table-bordered table-xs">                
                                                                <thead>
                                                                <tr align="center">
                                                                    <th colspan="2">KEY RESULTS AREA</th>
                                                                    <th colspan="1" class="bs-0"></th>
                                                                    
                                                                    <th rowspan="2" class="col-sm-5 p-0">PERFORMANCE INDICATOR </br>(<i class="icofont icofont-ui-cart"></i> Quantity, <i class="icofont icofont-speech-comments"></i> Quality, <i class="icofont icofont-ui-calendar"></i> Timeliness)</th>
                                                                    <th rowspan="2" class="col-sm-5 p-0">ACTUAL PERFORMANCE </br>(<i class="icofont icofont-ui-cart"></i> Quantity, <i class="icofont icofont-speech-comments"></i> Quality, <i class="icofont icofont-ui-calendar"></i> Timeliness)</th>
                                                                    <th colspan="4">RATING</th>
                                                                    <th rowspan="2" class="col-sm-2 ">REMARKS</th> 
                                                                    
                                                                    <!-- <th rowspan="2" scope="col" class="col-sm-1 col-form-label"><button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Add</button></th> -->
                                                                    
                                                                </tr>
                                                                <tr align="center" > 
                                                                    <th scope="col" class="col-form-label col-2 "><i class="icofont icofont-trophy"></i> Objectives, Program, Project, Activity</th>
                                                                    <th scope="col" class="p-0"><i class="icofont icofont-chart-pie"></i> Weight Allocation</th> 
                                                                    <th scope="col" class="p-0">Code</th>
                                                                    <th scope="col" class="col-form-label p-0">Quantity</br>Score</th> 
                                                                    <th scope="col" class="col-form-label p-0">Quality</br>Score</th> 
                                                                    <th scope="col" class="col-form-label p-0">Timeliness</br>Score</th> 
                                                                    <th scope="col" class="col-form-label p-0">Weighted</br>Average</th> 

                                                                    <!-- <th rowspan="2" scope="col" class="col-sm-1 col-form-label">Quantity</br>Score</th>
                                                                    <th rowspan="2" scope="col" class="col-sm-1 col-form-label">Quality</br>Score</th>
                                                                    <th rowspan="2" scope="col" class="col-sm-1 col-form-label">Timeliness</br>Score</th>
                                                                    <th rowspan="2" scope="col" class="col-sm-1 col-form-label">Average</br>Score</th>
                                                                    <th rowspan="2" scope="col" class="col-sm-1 col-form-label">Weighted</br>Average</th>                     -->
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td colspan="1" style="background-color: rgb(128, 128, 128)" class="text-center"><strong>STRATEGIC PRIORITIES</strong></td>
                                                                        <td colspan="1" style="background-color: rgb(128, 128, 128)" class="text-center" ><strong>50%</strong></td>
                                                                        <td colspan="1" style="background-color: rgb(128, 128, 128)" ></td>
                                                                        <td colspan="1" style="background-color: rgb(128, 128, 128)" ></td>
                                                                        <td colspan="1" style="background-color: rgb(128, 128, 128)" ></td>
                                                                        <td colspan="1" style="background-color: rgb(128, 128, 128)" ></td>
                                                                        <td colspan="1" style="background-color: rgb(128, 128, 128)" ></td>
                                                                        <td colspan="1" style="background-color: rgb(128, 128, 128)" ></td>
                                                                        <td colspan="1" style="background-color: rgb(128, 128, 128)" ></td>
                                                                        <td colspan="1" style="background-color: rgb(128, 128, 128)" ></td>
                                                                    </tr>
                                                                </tbody>
                                                                <tbody id="strategic2">
                                                    
                                                @foreach ($data as $d)
                                                    @if ($d->indicator_id == 1)
                                                     
                                                        <tr>
                                                            <td class="p-0" align="center" >
                                                                <div class="text-center m-1 hidden" data-category="STRATEGIC PRIORITIES"></div>
                                                                <div class="text-center m-1 hidden" data-id="{{$d->id}}"></div>
                                                                <div class="text-center m-1" data-name="{{$d->name}}">{{ $d->name }}</div>
                                                                <ul>
                                                                    <li>
                                                                    <button class="form-control btn-xs btn-outline-primary" onclick="editRating()" id="addRating" name="addRating" data-bs-original-title="Add Rating" data-bs-toggle="modal" data-bs-target="#editModal">Add Rating</button> 
                                                                    </li>
                                                                    <li>
                                                                    <button class="form-control btn-xs btn-outline-primary" id="addRating" name="addRating" data-bs-original-title="MOVs" data-bs-toggle="modal" data-bs-target="#uploadMOVModal"><i class="fa fa-file" aria-hidden="true"></i> MOVs</button> 
                                                                    </li>
                                                                </ul>
                                                                
                                                            </td>
                                                            <td class="p-0" >
                                                                <div class="text-center sub-weight" data-sub="{{$d->sub_weight_allocation}}">{{ $d->sub_weight_allocation }}</div>
                                                            </td>
                                                            <td>
                                                            <div class="text-center" data-sort="{{$d->sort}}">{{ $d->sort }}</div>
                                                            </td>
                                                            <td class="p-0"><div class="row">
                                                            <!-- <div class="col-1 text-center p-0 m-1">{{ $d->sort }}</div> -->
                                                                    <div class="col-11">
                                                                    <div class="m-1" data-target="{{$d->target_indicator_desc}}"><strong>{{ $d->target_indicator_desc}}</strong></div>
                                                                    <div class="m-1" data-quantity="{{$d->quantity}}"><strong>Ql:</strong> {{ $d->quantity }}</div>
                                                                    <div class="m-1" data-quality="{{$d->quality}}"><strong>Qn:</strong> {{ $d->quality }}</div>
                                                                    <div class="m-1" data-timeliness="{{$d->timeliness}}"><strong>T:</strong> {{ $d->timeliness }}</div>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <!-- Target PERFORMANCE -->
                                                           
                                                            <td class="p-0">
                                                                <div class="row">
                                                                <!-- <div class="col-1 text-center p-0 m-1"></div> -->
                                                                    <div class="col-11">
                                                                        <div class="m-1" ><strong id="activity-name" name="activity-name">{{$d->accom_indicator_desc}}</strong></div>
                                                                        <div class="m-1" ><strong>Ql:</strong> <span id="actual-Quality" name="actual-Quality">{{$d->accom_quantity}}</span></div>
                                                                        <div class="m-1" ><strong>Qn:</strong> <span id="actual-Quantity" name="actual-Quantity">{{$d->accom_quality}}</span></div>
                                                                        <div class="m-1" ><strong>T:</strong> <span id="actual-Timeliness" name="actual-Timeliness">{{$d->accom_timeliness}}</span></div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                                <td class="c" id="quality-Score" name="quality-Score" style="text-align: center;">{{$d->rating_quantity}}</td>
                                                                <td id="quantity-Score" name="quantity-Score" style="text-align: center;">{{$d->rating_quality}}</td>
                                                                <td id="timeliness-Score" name="timeliness-Score" style="text-align: center;">{{$d->rating_timeliness}}</td>
                                                                <td  id="rating_average" name="rating_average" style="text-align: center;">{{$d->rating_average}}</td>
                                                                <td class="p-0" >
                                                                    <div class="m-1" ><strong></strong> <span id="remarks-val" name="remarks-val">{{$d->remarks}}</span></div>
                                                            </td>
                                                        </tr>
                                                       
                                                    @endif
                                                @endforeach
                                                   
                                                </tbody>
                                                <tbody>
                                                    <tr>
                                                        <td colspan="1" style="background-color: rgb(128, 128, 128)" class="text-center"><strong>CORE FUNCTIONS</strong></td>
                                                        <td colspan="1" style="background-color: rgb(128, 128, 128)" class="text-center"><strong>35%</strong></td>
                                                        <td colspan="1" style="background-color: rgb(128, 128, 128)" ></td>
                                                        <td colspan="1" style="background-color: rgb(128, 128, 128)" ></td>
                                                        <td colspan="1" style="background-color: rgb(128, 128, 128)" ></td>
                                                        <td colspan="1" style="background-color: rgb(128, 128, 128)" ></td>
                                                        <td colspan="1" style="background-color: rgb(128, 128, 128)" ></td>
                                                        <td colspan="1" style="background-color: rgb(128, 128, 128)" ></td>
                                                        <td colspan="1" style="background-color: rgb(128, 128, 128)" ></td>
                                                        <td colspan="1" style="background-color: rgb(128, 128, 128)" ></td>                      
                                                    </tr>
                                                </tbody>
                                                <tbody id="core2">
                                                    
                                                @foreach ($data as $d)
                                                    @if ($d->indicator_id == 2)
                                                        <tr>
                                                            <td class="p-0" align="center" >
                                                                <div class="text-center m-1 hidden" data-category="CORE FUNCTIONS"></div>
                                                                <div class="text-center m-1 hidden" data-id="{{$d->id}}"></div>
                                                                <div class="text-center m-1" data-name="{{$d->name}}">{{ $d->name }}</div>
                                                                <ul>
                                                                    <li>
                                                                    <button class="form-control btn-xs btn-outline-primary" href="#"  onclick="editRating()" data-bs-original-title="Add Rating" data-bs-toggle="modal" data-bs-target="#editModal">Add Rating</button> 
                                                                    </li>
                                                                    <li>
                                                                    <button class="form-control btn-xs btn-outline-primary" href="#"  data-bs-original-title="MOVs" data-bs-toggle="modal" data-bs-target="#uploadMOVModal">MOV</button> 
                                                                    </li>
                                                                </ul>
                                                            </td>
                                                            <td class="p-0" >
                                                                <div class="text-center sub-weight" data-sub="{{$d->sub_weight_allocation}}">{{ $d->sub_weight_allocation }}</div>
                                                            </td>
                                                            <td>
                                                                <div class="text-center" data-sort="{{$d->sort}}">{{ $d->sort }}</div>
                                                            </td>
                                                            <td class="p-0"><div class="row">
                                                            <!-- <div class="col-1 text-center p-0 m-1">{{ $d->sort }}</div> -->
                                                                    <div class="col-11">
                                                                    <div class="m-1" data-target="{{$d->target_indicator_desc}}"><strong>{{ $d->target_indicator_desc}}</strong></div>
                                                                    <div class="m-1" data-quantity="{{$d->quantity}}"><strong>Ql:</strong> {{ $d->quantity }}</div>
                                                                    <div class="m-1" data-quality="{{$d->quality}}"><strong>Qn:</strong> {{ $d->quality }}</div>
                                                                    <div class="m-1" data-timeliness="{{$d->timeliness}}"><strong>T:</strong> {{ $d->timeliness }}</div>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <!-- Target PERFORMANCE -->
                                                            
                                                                <td class="p-0">
                                                                    <div class="row">
                                                                    <!-- <div class="col-1 text-center p-0 m-1"></div> -->
                                                                        <div class="col-11">
                                                                            <div class="m-1" ><strong id="activity-name" name="activity-name">{{$d->accom_indicator_desc}}</strong></div>
                                                                            <div class="m-1" ><strong>Ql:</strong> <span id="actual-Quality" name="actualf-Quality">{{$d->accom_quantity}}</span></div>
                                                                            <div class="m-1" ><strong>Qn:</strong> <span id="actual-Quantity" name="actual-Quantity">{{$d->accom_quality}}</span></div>
                                                                            <div class="m-1" ><strong>T:</strong> <span id="actual-Timeliness" name="actual-Timeliness">{{$d->accom_timeliness}}</span></div>
                                                                            
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="c" id="quality-Score" name="quality-Score" style="text-align: center;">{{$d->rating_quantity}}</td>
                                                                <td id="quantity-Score" name="quantity-Score" style="text-align: center;">{{$d->rating_quality}}</td>
                                                                <td id="timeliness-Score" name="timeliness-Score" style="text-align: center;">{{$d->rating_timeliness}}</td>
                                                                <td  id="rating_average" name="rating_average" style="text-align: center;">{{$d->rating_average}}</td>
                                                                <td class="p-0" >
                                                                    <div class="m-1" ><strong></strong> <span id="remarks-val" name="remarks-val">{{$d->remarks}}</span></div>

                                                                    </div>
                                                                </td>
                                                        </tr>
                                                    @endif
                                                @endforeach
                                                </tbody>
                                                <tbody>
                                                    <tr>
                                                        <td colspan="1" style="background-color: rgb(128, 128, 128)" class="text-center"><strong>SUPPORT FUNCTIONS</strong></td>
                                                        <td colspan="1" style="background-color: rgb(128, 128, 128)" class="text-center"><strong>15%</strong></td>
                                                        <td colspan="1" style="background-color: rgb(128, 128, 128)" ></td>
                                                        <td colspan="1" style="background-color: rgb(128, 128, 128)" ></td>
                                                        <td colspan="1" style="background-color: rgb(128, 128, 128)" ></td>
                                                        <td colspan="1" style="background-color: rgb(128, 128, 128)" ></td>
                                                        <td colspan="1" style="background-color: rgb(128, 128, 128)" ></td>
                                                        <td colspan="1" style="background-color: rgb(128, 128, 128)" ></td>
                                                        <td colspan="1" style="background-color: rgb(128, 128, 128)" ></td>
                                                        <td colspan="1" style="background-color: rgb(128, 128, 128)" ></td>
                                                    </tr>
                                                </tbody>
                                                <tbody id="support2">
                                                    
                                                @foreach ($data as $d)
                                                    @if ($d->indicator_id == 3)
                                                        <tr>
                                                            <td class="p-0" align="center" >
                                                            <div class="text-center m-1 hidden" data-category="SUPPORT FUNCTIONS"></div>
                                                                <div class="text-center m-1 hidden" data-id="{{$d->id}}"></div>
                                                                <div class="text-center m-1" data-name="{{$d->name}}">{{ $d->name }}</div>
                                                                <ul>
                                                                    <li>
                                                                    <button class="form-control btn-xs btn-outline-primary" href="#"  onclick="editRating()" data-bs-original-title="Add Rating" data-bs-toggle="modal" data-bs-target="#editModal">Add Rating</button> 
                                                                    </li>
                                                                    <li>
                                                                    <button class="form-control btn-xs btn-outline-primary" href="#"  data-bs-original-title="MOVs" data-bs-toggle="modal" data-bs-target="#uploadMOVModal">MOV</button> 
                                                                    </li>
                                                                </ul>
                                                            </td>
                                                            <td class="p-0" >
                                                                <div class="text-center sub-weight" data-sub="{{$d->sub_weight_allocation}}">{{ $d->sub_weight_allocation }}</div>
                                                            </td>
                                                            <td>
                                                            <div class="text-center" data-sort="{{$d->sort}}">{{ $d->sort }}</div>
                                                            </td>
                                                            <td class="p-0"><div class="row">
                                                            <!-- <div class="col-1 text-center p-0 m-1">{{ $d->sort }}</div> -->
                                                                    <div class="col-11">
                                                                    <div class="m-1" data-target="{{$d->target_indicator_desc}}"><strong>{{ $d->target_indicator_desc}}</strong></div>
                                                                    <div class="m-1" data-quantity="{{$d->quantity}}"><strong>Ql:</strong> {{ $d->quantity }}</div>
                                                                    <div class="m-1" data-quality="{{$d->quality}}"><strong>Qn:</strong> {{ $d->quality }}</div>
                                                                    <div class="m-1" data-timeliness="{{$d->timeliness}}"><strong>T:</strong> {{ $d->timeliness }}</div>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <!-- Target PERFORMANCE -->
                                                            <td class="p-0">
                                                                    <div class="row">
                                                                    <!-- <div class="col-1 text-center p-0 m-1"></div> -->
                                                                        <div class="col-11">
                                                                            <div class="m-1" ><strong id="activity-name" name="activity-name">{{$d->accom_indicator_desc}}</strong></div>
                                                                            <div class="m-1" ><strong>Ql:</strong> <span id="actual-Quality" name="actualf-Quality">{{$d->accom_quantity}}</span></div>
                                                                            <div class="m-1" ><strong>Qn:</strong> <span id="actual-Quantity" name="actual-Quantity">{{$d->accom_quality}}</span></div>
                                                                            <div class="m-1" ><strong>T:</strong> <span id="actual-Timeliness" name="actual-Timeliness">{{$d->accom_timeliness}}</span></div>
                                                                            
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="c" id="quality-Score" name="quality-Score" style="text-align: center;">{{$d->rating_quantity}}</td>
                                                                <td id="quantity-Score" name="quantity-Score" style="text-align: center;">{{$d->rating_quality}}</td>
                                                                <td id="timeliness-Score" name="timeliness-Score" style="text-align: center;">{{$d->rating_timeliness}}</td>
                                                                <td  id="rating_average" name="rating_average" style="text-align: center;">{{$d->rating_average}}</td>
                                                                <td class="p-0" >
                                                                <div class="m-1" ><strong></strong> <span id="remarks-val" name="remarks-val">{{$d->remarks}}</span></div>
                                                                </td>
                                                        </tr>
                                                    @endif
                                                @endforeach
                                                   
                                                </tbody>

                                                <tbody>
                                                    <tr id="total_weight">
                                                        <!-- <td colspan=""></td> -->
                                                        <td name="total_weight" class="text-center p-1">Total Weight:</td>
                                                        <td colspan="1"></td>
                                                        <td colspan="7"></td>
                                                    </tr>
                                                </tbody>
                                                <tbody>
                                                    <tr id="total_weight">
                                                        <td colspan="4"></td>
                                                        <td colspan="2" name="" class="text-center p-1">Final Rating:</td>
                                                        <td colspan="3"></td>
                                                    </tr>
                                                </tbody>
                                                <thead>
                                                    <tr id="total_weight">
                                                        <td colspan="4"></td>
                                                        <td colspan="2" name="" class="text-center p-1">Adjectival Rating: </td>
                                                        <td colspan="3"></td>
                                                    </tr>
                                                </thead>

                                                <!-- <tbody>
                                                    <tr id="total_weight">
                                                        <td colspan="1"></td>
                                                        <td name="total_weight">Total Weight:</td>
                                                        <td colspan="4"></td>
                                                    </tr>
                                                </tbody> -->
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
					</div>
					</div>
				</div>
			</div>
		</div>

        <div class="modal fade" id="uploadMOVModal" tabindex="-1" role="dialog" aria-labelledby="uploadMOVModal" aria-hidden="true">
            <div class="modal-dialog" role="document" style="max-width: 30%">
            <div class="modal-content">
                <!-- <div class="modal-header">
                    <h5 class="modal-title text-center" id="createPCModalLabel" >Upload MOVs</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div> -->
                    <!-- <form action="" id="frm" name="frm" method="POST"> -->
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                <div class="form theme-form">
                                    <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                        <label>Upload project file</label>
                                        <form class="dropzone"  action="/upload.php">
                                            <div class="dz-message needsclick">
                                            <i class="icon-cloud-up"></i>
                                            <h6>Drop files here or click to upload.</h6>
                                            <!-- <span class="note needsclick">(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</span> -->
                                            </div>
                                        </form>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="row">
                                    <div class="col">
                                        <div><a class="btn btn-success me-3" href="#">Add</a>
                                        <a class="btn btn-danger" href="#" data-bs-dismiss="modal">Cancel</a></div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
            </div>
            </div>
        </div>

            <!--START ADD RATING MODAL -->
            <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="updatePCModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document" style="max-width: 35%">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="updatePCModalLabel">ADD ACTUAL PERFORMANCE & RATING</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                    <form action="/" id="editform" name="editform" method="POST">
                        <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                <div class="form theme-form">
                                   
                                    <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                        <label>Actual Performance</label>
                                        <textarea  name="targetIndicator" id="targetIndicator" type="text" class="form-control" rows="3"></textarea>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                        <label>Actual Quantity</label>
                                        <textarea class="form-control" name="quantity" id="quantity" type="text" rows="3"></textarea>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                        <label>Actual Quality</label>
                                        <textarea class="form-control" name="quality" id="quality" type="text" rows="3"></textarea>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                        <label>Actual Timeliness</label>
                                        <textarea class="form-control" name="timeliness" id="timeliness" type="text" rows="3"></textarea>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="mb-2">
                                            <label>Quantity Score</label>
                                                <input class="form-control" name="quantityScore" id="quantityScore" type="number" min="1" max="5" step="any">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="mb-2">
                                            <label>Quality Score</label>
                                                <input class="form-control" name="qualityScore" id="qualityScore" type="number" min="1" max="5" step="any">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="mb-2">
                                            <label>Timeliness Score</label>
                                                <input class="form-control" name="timelinessScore" id="timelinessScore" type="number" min="1" max="5" step="any">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                        <label>Remarks</label>
                                        <textarea class="form-control" name="remarks" id="remarks" type="text" rows="3"></textarea>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-primary btn-sm" type="button" data-bs-dismiss="modal">Close</button>
                                    <button class="btn btn-secondary btn-sm" type="submit"  name="editRating" id="editRating">Add</button>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </form>
            </div>
            </div>
        </div> 
        <!--END ADD RATING MODAL -->

                        <div id="right-history">
                            <div class="modal-header p-l-20 p-r-20">
                                 <h6 class="modal-title w-100">Update History<span class="pull-right"><a class="closehistory" href="#"><i class="icofont icofont-close"></i></a></span></h6>
                            </div>
                            <div class="history-details">
                                    <div class="text-center">
                                        <i class="icofont icofont-ui-edit"></i>
                                        <p>Performance has not been modified yet.</p>
                                    </div>
                                <div class="media">
                                    <i class="icofont icofont-star me-3"></i>
                                    <div class="media-body mt-0">
                                        <h6 class="mt-0">Performance Contract Created</h6>
                                        <!-- <p class="mb-0">Contact is created via mail</p> -->
                                        <span class="f-12"><p>Updated by: Joshua Quistadio</p></span>
                                        <span class="f-12">Date Updated: Sep 10, 2019 4:00</span>
                                    </div>
                                </div>

                                <div class="media">
                                    <i class="icofont icofont-star me-3"></i>
                                    <div class="media-body mt-0">
                                        <h6 class="mt-0">Performance Contract Created</h6>
                                        <!-- <p class="mb-0">Contact is created via mail</p> -->
                                        <span class="f-12"><p>Updated by: Joshua Quistadio</p></span>
                                        <span class="f-12">Date Updated: Sep 10, 2019 4:00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
@endsection

@section('script')
<script src="{{asset('assets/js/select2/select2.full.min.js')}}"></script>
<script src="{{asset('assets/js/select2/select2-custom.js')}}"></script>
<script src="{{asset('assets/js/sweetalert2.all.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
<!-- <script src="{{asset('assets/js/datatable/datatable-extension/dataTables.buttons.min.js')}}"></script> -->
<script src="{{asset('assets/js/datatable/datatable-extension/jszip.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatable-extension/buttons.colVis.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatable-extension/pdfmake.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatable-extension/vfs_fonts.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatable-extension/dataTables.autoFill.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatable-extension/dataTables.select.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatable-extension/buttons.html5.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatable-extension/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatable-extension/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatable-extension/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatable-extension/dataTables.keyTable.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatable-extension/dataTables.colReorder.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatable-extension/dataTables.fixedHeader.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatable-extension/dataTables.rowReorder.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatable-extension/dataTables.scroller.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatable-extension/custom.js')}}"></script>
<script src="{{asset('assets/js/notify/bootstrap-notify.min.js')}}"></script>
<script src="{{asset('assets/js/sweet-alert/sweetalert.min.js')}}"></script>
<script src="{{asset('assets/js/contacts/custom.js')}}"></script>

<!-- MOV JS -->
<script src="{{asset('assets/js/datepicker/date-picker/datepicker.js')}}"></script>
<script src="{{asset('assets/js/datepicker/date-picker/datepicker.en.js')}}"></script>
<script src="{{asset('assets/js/datepicker/date-picker/datepicker.custom.js')}}"></script>
<script src="{{asset('assets/js/dropzone/dropzone.js')}}"></script>
<script src="{{asset('assets/js/dropzone/dropzone-script.js')}}"></script>
<!-- <script src="{{asset('assets/js/typeahead/handlebars.js')}}"></script>
<script src="{{asset('assets/js/typeahead/typeahead.bundle.js')}}"></script>
<script src="{{asset('assets/js/typeahead/typeahead.custom.js')}}"></script>
<script src="{{asset('assets/js/typeahead-search/handlebars.js')}}"></script>
<script src="{{asset('assets/js/typeahead-search/typeahead-custom.js')}}"></script> -->

<script>

   
    function editRating(){
        console.log("Hello");
        var row = $(event.target).closest('tr');

        var category = row.find('[data-category]').data('category');
        var id = row.find('[data-id]').data('id');

        // console.log(id);

        $("#editRating").click(function(event) {
        event.preventDefault();
        // console.log("Hello");

        // Retrieve data from form fields
        var targetIndicator = $('#targetIndicator').val();
        var quantity = $('#quantity').val();
        var quality = $('#quality').val();
        var timeliness = $('#timeliness').val();
        var quantityScore = parseInt($('#quantityScore').val()) || 0; // Note: change the ID to match your actual ID
        var qualityScore = parseInt($('#qualityScore').val()) || 0; // Note: change the ID to match your actual ID
        var timelinessScore = parseInt($('#timelinessScore').val()) || 0; // Note: change the ID to match your actual ID
        var remarks = $('#remarks').val();
        // console.log(remarks);
        // if(category == "CORE FUNCTIONS"){
        //     if(id)
                // $('#activity-name').text(targetIndicator);
                // $('#actual-Quantity').text(quantity);
                // $('#actual-Quality').text(quality);
                // $('#actual-Timeliness').text(timeliness);
                // $('#quality-Score').text(qualityScore);
                // $('#quantity-Score').text(quantityScore);
                // $('#timeliness-Score').text(timelinessScore);
                // $('#remarks-val').text(remarks);
        // }

       

        var ratingaverage = (quantityScore+qualityScore+timelinessScore)/3;


        var dataToSend = {
            pcindicator_id : id,
            targetIndicator : targetIndicator,
            quantity: quantity,
            quality: quality,
            timeliness: timeliness,
            qualityScore: quantityScore,
            quantityScore: qualityScore,
            timelinessScore: timelinessScore,
            rating_average: ratingaverage,
            remarks: remarks
        }

        // console.log(dataToSend);

        // Check if dataToSend is not empty before sending the request
        if (Object.keys(dataToSend).length > 0) {
            Swal.fire({
                title: 'Are you sure you want to Update?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, Update it!'
            }).then((result) => {
                // console.log(dataToSend);
                if (result.isConfirmed) {
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        url: BASE_URL + 'performance_contract_review/save_rating',
                        type: 'POST',
                        data: dataToSend,
                        success: function(response) {
                            Swal.fire(
                                'Confirm!',
                                'Your file has been saved.',
                                'success'
                            ).then(() => {
                                location.reload();
                            });
                        },
                        error: function(error) {
                            Swal.fire(
                                'Failed!',
                                'Your file has no changes',
                                'error'
                            );
                        }
                    });
                }
            });
        } else {
            console.log('Data to send is empty');
        }
    });
        

        // // Now you can use the retrieved data as needed
        // console.log('Actual Performance:', targetIndicator);
        // console.log('Actual Quantity:', quantity);
        // console.log('Actual Quality:', quality);
        // console.log('Actual Timeliness:', timeliness);
        // console.log('Quantity Score:', quantityScore);
        // console.log('Quality Score:', qualityScore);
        // console.log('Timeliness Score:', timelinessScore);
        // console.log('Remarks:', remarks);

        // $('#activity-name').text(targetIndicator);
        // $('#actual-Quantity').text(quantity);
        // $('#actual-Quality').text(quality);
        // $('#actual-Timeliness').text(timeliness);
        // $('#quality-Score').text(qualityScore);
        // $('#quantity-Score').text(quantityScore);
        // $('#timeliness-Score').text(timelinessScore);
        // $('#remarks-val').text(remarks);


        // $('#editModal').modal('toggle');
        // // You can perform further actions or send the data to the server using AJAX
    
    }
    // var row = $(event.target).closest('tr');
    // Assuming you want to retrieve data when the form is submitted
//     $('#editform').submit(function(event){
//         // Prevent the default form submission
//         event.preventDefault();

        

    
// });


  
    // $("#frm").submit(function(event){
    //     event.preventDefault();

    //     if($("#indicator-id").val() == '') {
    //         Swal.fire({
    //             icon: 'error',
    //             title: 'Oops...',
    //             text: 'Please select indicator code!',
    //         })
    //     } else {
    //         Swal.fire({
    //             title: 'Are you sure?',
    //             text: "You won't be able to revert this!",
    //             icon: 'warning',
    //             showCancelButton: true,
    //             confirmButtonColor: '#3085d6',
    //             cancelButtonColor: '#d33',
    //             confirmButtonText: 'Yes, save it!'
    //         }).then((result) => {
    //             if (result.isConfirmed) {
    //                 let data_arr = {
    //                     'category_id': $('#category-id').val(),
    //                     'activity_id': $('#activity-id').val(),
    //                     'indicator_code': $('#indicator-id').val(),
    //                     'indicator': $("input[name='indicator[]']").map(function(){return $(this).val();}).get(),
    //                     'weight': $("input[name='weight[]']").map(function(){return $(this).val();}).get(),
    //                     'target': $("input[name='target[]']").map(function(){return $(this).val();}).get(),
    //                     'qual': $("input[name='qual[]']").map(function(){return $(this).val();}).get(),
    //                     'quan': $("input[name='quan[]']").map(function(){return $(this).val();}).get(),
    //                     'time': $("input[name='time[]']").map(function(){return $(this).val();}).get(),
    //                     'budget_alloted': $("input[name='budget[]']").map(function(){return $(this).val();}).get(),
    //                     'office': $("input[name='office[]']").map(function(){return $(this).val();}).get(),
    //                 };
    //                 $.ajax ({
    //                     headers: {
    //                         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //                     },
    //                     url: BASE_URL + 'performance_contract/save_indicator',
    //                     type: 'post',
    //                     data: data_arr,
    //                     dataType: 'json',
    //                     success: function(response){
    //                         Swal.fire(
    //                             'Confirm!',
    //                             'Your file has been saved.',
    //                             'success'
    //                         )
    //                         $('#createPCModal').modal('toggle');
    //                         setTimeout(() => {
    //                             location.reload();
    //                         }, 1000);
    //                     },
    //                     error: function(error){
    //                         Swal.fire(
    //                             'Failed!',
    //                             'Your file has not been saved.',
    //                             'error'
    //                         )
    //                     }
    //                 });
    //             }
    //         })
    //     }
    // });
</script>
@endsection
