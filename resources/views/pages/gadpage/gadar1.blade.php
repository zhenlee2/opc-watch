@extends('layouts.simple.master')
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/datatables.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/datatable-extension.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/sweetalert2.min.css')}}">
@endsection

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/select2.css')}}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h5>GENDER AND DEVELOPMENT ACCOMPLISHMENT REPORT</h5>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Pages</li>
<li class="breadcrumb-item active">GAD AR</li>
@endsection

@section('content')

<!-- <table class="title table table-bordered" style="margin-top: 0px;margin-bottom: 0px;border-color: white;">
        <thead style="line-height: 30px; ">
            <td colspan="2" style="text-align: center;font-family: Arial, sans-serif">
              <label style="font-size: 19px;font-weight: bold;">Department of Social Welfare and Development</label><br>
              <label style="font-size: 15px;">OFFICE PERFORMANCE CONTRACT</label><br>
              <label style="font-size: 15px;">FY 2023</label><br>
              <label style="font-size: 15px;">FIELD OFFICE CARAGA</label>
            </td>
        </thead>  
      </table>       -->
      <table class="table table-bordered table-xs" style="border-color: black;margin-bottom: 0px; margin-top: 0px;">                
          <thead>
              <tr style="font-size:13px; font-weight: bold; text-align: center; background-color:rgb(128, 128, 128)">
                  <th rowspan="2"class="col-sm-2 p-0">GENDER ISSUE OR GAD MANDATE</th>
                  <th rowspan="2" class="col-sm-2 p-0">RESULTS INDICATOR</th>
                  <th colspan="2" scope="col" class="col-sm p-0">RESULTS</th>
                  <th colspan="2" scope="col" class="col-sm p-0">PREXC</th>
                  <th rowspan="2" scope="col" class="col-sm p-0">ACTUAL GAD ACTIVITIES CONDUCTED</th>
                  <th colspan="2" scope="col" class="col-sm p-0">GAD BUDGET</th>
                  <th colspan="2" scope="col" class="col-sm p-0">GAD EXPENDITURE</th>
                  <th rowspan="2" scope="col" class="col-sm p-0">RESPONSIBLE UNIT / OFFICE</th>
                  <th rowspan="2" scope="col" class="col-sm p-0">VARIANCE/REMARKS</th>
              </tr>
              <tr style="font-size:13px; font-weight: bold; text-align: center; background-color:rgb(128, 128, 128)"> 
                  <th>TARGET</th>
                  <th>ACTUAL</th> 
                  <th>PAP</th>
                  <th>UACS CODE</th> 
                  <th>TOTAL AMOUNT</th>
                  <th>SOURCE</th> 
                  <th>TOTAL AMOUNT</th>
                  <th>SOURCE</th> 
              </tr>
          </thead>
        <tbody>
          <tr style="font-size:13px; font-weight: bold; background-color:aqua" >
              <td colspan="13" class="p-0">A. Client-Focused</td>
              <!-- <td colspan="1" class="p-0"></td> -->
              <!-- <td colspan="1" class="p-0"></td>
              <td colspan="1" class="p-0"></td>
              <td colspan="1" class="p-0"></td>
              <td colspan="1" class="p-0"></td>
              <td colspan="1" class="p-0"></td>
              <td colspan="1" class="p-0"></td>
              <td colspan="1" class="p-0"></td>
              <td colspan="1" class="p-0"></td>
              <td colspan="1" class="p-0"></td>
              <td colspan="1" class="p-0"></td>
              <td colspan="1" class="p-0"></td> -->
          </tr>
          <tr style="font-size:13px; font-weight: bold; border-color:black" >
              <td colspan="1" class="p-0" style="border-color:black">WEDC shall be provided with services and interventions as necessary such as, but not limited to, the following: (a) Temporary and protective custody; (b) Medical and dental services; (c) Psychological evaluation; (d) Counseling; (e) Psychiatric evaluation; (f) Legal services; (g) Productivity skills capability building; (h) Livelihood assistance; (i) Job placement; (j) Financial assistance; and (k) Transportation assistance.</td>
              <td colspan="1" class="p-0" style="border-color:black"></td>
              <td colspan="1" class="p-0" style="border-color:black"></td>
              <td colspan="1" class="p-0" style="border-color:black"></td>
              <td colspan="1" class="p-0" style="border-color:black"></td>
              <td colspan="1" class="p-0" style="border-color:black"></td>
              <td colspan="1" class="p-0" style="border-color:black"></td>
              <td colspan="1" class="p-0" style="border-color:black"></td>
              <td colspan="1" class="p-0" style="border-color:black"></td>
              <td colspan="1" class="p-0" style="border-color:black"></td>
              <td colspan="1" class="p-0" style="border-color:black"></td>
              <td colspan="1" class="p-0" style="border-color:black"></td>
              <td colspan="1" class="p-0" style="border-color:black"></td>
          </tr>
          <tr style="font-size:13px; font-weight: bold; border-color:black" >
              <td colspan="1" style="border-color:black">Undocumented overseas Filipino women are more vulnerable to abuse and exploitation. Their situations pose a bigger challenge given the absence of mechanisms and measures to reach and identify them. Being undocumented also means they have very little or no access to health services and information, as well as protection from abuse and exploitation. The enactment of RA 11299 also known as An Act Establishing the Office for the Social Welfare Attache, will serve as the arm of DSWD through its Home Office Foreign Posts in protecting the rights and promotion of the welfare of overseas Filipinos women and men and their families, especially those in distress situations.</td>
              <td colspan="1" class="p-0" style="border-color:black"></td>
              <td colspan="1" class="p-0" style="border-color:black"></td>
              <td colspan="1" class="p-0" style="border-color:black"></td>
              <td colspan="1" class="p-0" style="border-color:black"></td>
              <td colspan="1" class="p-0" style="border-color:black"></td>
              <td colspan="1" class="p-0" style="border-color:black"></td>
              <td colspan="1" class="p-0" style="border-color:black"></td>
              <td colspan="1" class="p-0" style="border-color:black"></td>
              <td colspan="1" class="p-0" style="border-color:black"></td>
              <td colspan="1" class="p-0" style="border-color:black"></td>
              <td colspan="1" class="p-0" style="border-color:black"></td>
              <td colspan="1" class="p-0" style="border-color:black"></td>
          </tr>
          <tr style="font-size:13px; font-weight: bold; border-color:black" >
              <td colspan="1" style="border-color:black">RA 9710, Rule IV. Section 12. Protection from Violence</td>
              <td colspan="1" class="p-0"></td>
              <td colspan="1" class="p-0"></td>
              <td colspan="1" class="p-0"></td>
              <td colspan="1" class="p-0"></td>
              <td colspan="1" class="p-0"></td>
              <td colspan="1" class="p-0"></td>
              <td colspan="1" class="p-0"></td>
              <td colspan="1" class="p-0"></td>
              <td colspan="1" class="p-0"></td>
              <td colspan="1" class="p-0"></td>
              <td colspan="1" class="p-0"></td>
              <td colspan="1" class="p-0" style="border-color:black"></td>
          </tr>
          <tr style="font-size:13px; font-weight: bold; border-color:black" >
              <td colspan="1" class="p-0" style="border-color:black">RA 9710 Section 10. Women Affected by Disasters, Calamities, and Other Crisis Situations. â€“ Women have the right to protection and security in times of disasters, calamities, and other crisis situations especially in all phases of relief, recovery, rehabilitation, and construction efforts. The State shall provide for immediate humanitarian assistance, allocation of resources, and early resettlement, if necessary. It shall also address the particular needs of women from a gender perspective to ensure their full protection from sexual exploitation and other sexual and gender-based violence committed against them. Responses to disaster situations shall include the provision of services, such as psychosocial support, livelihood support, education, psychological health, and comprehensive health services, including protection during pregnancy.</td>
              <td colspan="1" class="p-0"></td>
              <td colspan="1" class="p-0"></td>
              <td colspan="1" class="p-0"></td>
              <td colspan="1" class="p-0"></td>
              <td colspan="1" class="p-0"></td>
              <td colspan="1" class="p-0"></td>
              <td colspan="1" class="p-0"></td>
              <td colspan="1" class="p-0"></td>
              <td colspan="1" class="p-0"></td>
              <td colspan="1" class="p-0"></td>
              <td colspan="1" class="p-0"></td>
              <td colspan="1" class="p-0" style="border-color:black"></td>
          </tr>

          <tr><td colspan="1" class="p-0"></td></tr>
          <tr><td colspan="1" class="p-0"></td></tr>
          <tr><td colspan="1" class="p-0"></td></tr>
        </tbody>
        
    </table>
@endsection

