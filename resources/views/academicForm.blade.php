@extends('layouts.app')

@section('header')
    <script type="text/javascript">
        $ (document).ready(function(){
            $ ("#newrows").click(function(){
                var addcontrols = "<tr>"
                    addcontrols += "<td> <input type='text' name='Exyear[]'> </td>"
                    addcontrols += "<td> <input type='text' name='indexNo[]'> </td>"
                    addcontrols += "<td> <input type='text' name='Examination[]'> </td>"
                    addcontrols += "<td> <input type='text' name='medium[]'> </td>"
                    addcontrols += "<td> <input type='text' name='Results[]'> </td>"
                    addcontrols += "</tr>";

                    $("#table #tbody").append(addcontrols);
            });
        });
    </script>
@endsection

@section('content')

    <div class="container py-4 py-sm-5 my-0 my-sm-4 px-3 px-sm-5" id="repeatForm">

        @include('inc.errors')
    
        {!! Form::open(['method' => 'POST' , 'id' => 'academicForm', 'action' => 'AdminAcademicsController@store', 'files'=>true]) !!}
        
            <h3 class="text-center"> SABARAGAMUWA UNIVERSITY OF SRILANKA </h3>
            <br>
            <h4 class="text-center"> Application for Registration for the Academic year </h4>
            
            <div class="container py-4 py-sm-5">

                <div class="row">
                    <p> 
                        01. &emsp;  
                        <div class="col-12 col-sm-4">
                            {{ Form::label('fullName', 'Full Name :') }}
                            {{ Form::text('fullName', null , ['class' => 'form-control']) }}
                        </div>
                        
                        <div class="col-12 col-sm-4 pt-3 pt-sm-0"> 
                            {{ Form::label('name', 'Name with Initials :') }}
                            {{ Form::text('name', null , ['class' => 'form-control']) }}  
                        </div>  
                    </p>
                </div>

                <div class="row pt-4 pt-sm-5">
                    <p> 
                        02. &emsp; 
                        <div class="col-12 col-sm-4">
                            {{ Form::label('regNo', 'Registration No :') }}
                            {{ Form::text('regNo', null , ['class' => 'form-control']) }}  
                        </div>
                    </p>
                </div>

                <div class="row pt-4 pt-sm-5">
                    <p> 
                        03. &emsp; 
                        <div class="col-11 ml-3 ml-sm-5">
                            <div class="row">
                                a) &emsp; 
                                <div class="col-12 col-sm-8">
                                    {{ Form::label('address', 'Permanent Address :') }}
                                    {{ Form::textarea('address', null , ['class' => 'form-control','rows'=>3]) }}  
                                </div>
                    
                                <div class="col-12 col-sm-8 pt-3" id="subTel">
                                    {{ Form::label('hNumber', 'Tele. No :') }}
                                    {{ Form::text('hNumber', null , ['class' => 'form-control']) }}  
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                b) &emsp; 
                                <div class="col-12 col-sm-8">
                                    {{ Form::label('presentAddress', 'Present Address :') }}
                                    {{ Form::textarea('presentAddress', null , ['class' => 'form-control','rows'=>3]) }}  
                                </div>

                                <div class="col-12 col-sm-8 pt-3" id="subTel">
                                    {{ Form::label('pNumber', 'Tele. No :') }}
                                    {{ Form::text('pNumber', null , ['class' => 'form-control']) }}  
                                </div> 
                            </div>
                            <br>
                            <div class="row">
                                c) &emsp; 
                                <div class="col-12 col-sm-8">
                                    {{ Form::label('contactAddress', 'Contact Address :') }}
                                    {{ Form::textarea('contactAddress', null , ['class' => 'form-control','rows'=>3]) }}  
                                </div>

                                <div class="col-12 col-sm-8 pt-3" id="subTel">
                                    {{ Form::label('cNumber', 'Tele. No :') }}
                                    {{ Form::text('cNumber', null , ['class' => 'form-control']) }}  
                                </div> 
                            </div>
                        </div>
                    </p>
                </div>

                <div class="row pt-4 pt-sm-5">
                    <p> 
                        04. &emsp; 
                        <div class="col-12 col-sm-4">
                            {{ Form::label('faculty', 'Faculty :') }}
                            {{ Form::select('faculty',['' => 'Choose', 'Applied Sciences' => 'Applied Sciences'], null , ['class' => 'form-control']) }}
                        </div>
                        
                        <div class="col-12 col-sm-4 pt-3 pt-sm-0"> 
                            {{ Form::label('year', 'Year :') }}
                            {{ Form::select('year',['' => 'Choose', 'First Year' => 'First Year', 'Second Year' => 'Second Year', 'Third Year' => 'Third Year', 'Fourth Year' => 'Fourth Year'], null , ['class' => 'form-control']) }}  
                        </div>
                        
                        <div class="col-10 ml-3 ml-sm-5 pt-5">
                            <div class="row">
                                4.1 &emsp; 
                                <div class="col-12 col-sm-8">
                                    {{ Form::label('department', 'Department :') }}
                                    {{ Form::text('department', null , ['class' => 'form-control']) }}  
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                4.2 &emsp; 
                                <div class="col-12 col-sm-8">
                                    {{ Form::label('studyProgramme', 'Study Programme :') }}
                                    {{ Form::text('studyProgramme', null , ['class' => 'form-control']) }}  
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                4.3 &emsp; <div style="padding-left: 14px;"> Subjects intending to study in the first Semester : </div>
                                
                                <div class="container ml-0 ml-sm-5" style="padding-right: 0;">
                        
                                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

                                        <li class="nav-item">
                                            <a class="nav-link active" id="pills-Fsemhome-tab" data-toggle="pill" href="#pills-Fsemhome" role="tab" aria-controls="pills-Fsemhome" aria-selected="true"> Info </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-FsemCIS-tab" data-toggle="pill" href="#pills-FsemCIS" role="tab" aria-controls="pills-FsemCIS" aria-selected="false"> CIS </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-FsemFST-tab" data-toggle="pill" href="#pills-FsemFST" role="tab" aria-controls="pills-FsemFST" aria-selected="false"> FST </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-FsemNR-tab" data-toggle="pill" href="#pills-FsemNR" role="tab" aria-controls="pills-FsemNR" aria-selected="false"> NR </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-FsemPST-tab" data-toggle="pill" href="#pills-FsemPST" role="tab" aria-controls="pills-FsemPST" aria-selected="false"> PST </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-FsemSSM-tab" data-toggle="pill" href="#pills-FsemSSM" role="tab" aria-controls="pills-FsemSSM" aria-selected="false"> SSM </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-FsemPED-tab" data-toggle="pill" href="#pills-FsemPED" role="tab" aria-controls="pills-FsemPED" aria-selected="false"> PED </a>
                                        </li>

                                    </ul>

                                    <div class="tab-content" id="pills-tabContent">

                                        <div class="tab-pane fade show active" id="pills-Fsemhome" role="tabpanel" aria-labelledby="pills-Fsemhome-tab">
                                            <div class="px-3 py-4" style="border-top: 1px solid #dee2e6; border-bottom: 1px solid #dee2e6; border-left: 1px solid #dee2e6; border-right: 1px solid #dee2e6;">
                                                <p> 
                                                    <b> Follow this informations while select your repeat subjects </b><br>
                                                    01. Select your Department <br>
                                                    02. Select your Year and Semester that you need for this question <br>
                                                    03. You can select all subjects with header checkbox
                                                </p>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="pills-FsemCIS" role="tabpanel" aria-labelledby="pills-FsemCIS-tab">
                                            @include('academicFsemCourses.cis')
                                        </div>

                                        <div class="tab-pane fade" id="pills-FsemFST" role="tabpanel" aria-labelledby="pills-FsemFST-tab">
                                            @include('academicFsemCourses.fst')
                                        </div>

                                        <div class="tab-pane fade" id="pills-FsemNR" role="tabpanel" aria-labelledby="pills-FsemNR-tab">
                                            @include('academicFsemCourses.nr')
                                        </div>

                                        <div class="tab-pane fade" id="pills-FsemPST" role="tabpanel" aria-labelledby="pills-FsemPST-tab">
                                            @include('academicFsemCourses.pst')
                                        </div>

                                        <div class="tab-pane fade" id="pills-FsemSSM" role="tabpanel" aria-labelledby="pills-FsemSSM-tab">
                                            @include('academicFsemCourses.ssm')
                                        </div>

                                        <div class="tab-pane fade" id="pills-FsemPED" role="tabpanel" aria-labelledby="pills-FsemPED-tab">
                                            @include('academicFsemCourses.ped')
                                        </div>

                                    </div>       

                                </div>
                            </div>
                            <br>
                            <div class="row">
                                4.4 &emsp; <div style="padding-left: 14px;"> Subjects intending to study in the second Semester : </div>
                                
                                <div class="container ml-0 ml-sm-5" style="padding-right: 0;">
                        
                                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

                                        <li class="nav-item">
                                            <a class="nav-link active" id="pills-Ssemhome-tab" data-toggle="pill" href="#pills-Ssemhome" role="tab" aria-controls="pills-Ssemhome" aria-selected="true"> Info </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-SsemCIS-tab" data-toggle="pill" href="#pills-SsemCIS" role="tab" aria-controls="pills-SsemCIS" aria-selected="false"> CIS </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-SsemFST-tab" data-toggle="pill" href="#pills-SsemFST" role="tab" aria-controls="pills-SsemFST" aria-selected="false"> FST </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-SsemNR-tab" data-toggle="pill" href="#pills-SsemNR" role="tab" aria-controls="pills-SsemNR" aria-selected="false"> NR </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-SsemPST-tab" data-toggle="pill" href="#pills-SsemPST" role="tab" aria-controls="pills-SsemPST" aria-selected="false"> PST </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-SsemSSM-tab" data-toggle="pill" href="#pills-SsemSSM" role="tab" aria-controls="pills-SsemSSM" aria-selected="false"> SSM </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-SsemPED-tab" data-toggle="pill" href="#pills-SsemPED" role="tab" aria-controls="pills-SsemPED" aria-selected="false"> PED </a>
                                        </li>

                                    </ul>

                                    <div class="tab-content" id="pills-tabContent">

                                        <div class="tab-pane fade show active" id="pills-Ssemhome" role="tabpanel" aria-labelledby="pills-Ssemhome-tab">
                                            <div class="px-3 py-4" style="border-top: 1px solid #dee2e6; border-bottom: 1px solid #dee2e6; border-left: 1px solid #dee2e6; border-right: 1px solid #dee2e6;">
                                                <p> 
                                                    <b> Follow this informations while select your repeat subjects </b><br>
                                                    01. Select your Department <br>
                                                    02. Select your Year and Semester that you need for this question <br>
                                                    03. You can select all subjects with header checkbox
                                                </p>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="pills-SsemCIS" role="tabpanel" aria-labelledby="pills-SsemCIS-tab">
                                            @include('academicSsemCourses.cis')
                                        </div>

                                        <div class="tab-pane fade" id="pills-SsemFST" role="tabpanel" aria-labelledby="pills-SsemFST-tab">
                                            @include('academicSsemCourses.fst')
                                        </div>

                                        <div class="tab-pane fade" id="pills-SsemNR" role="tabpanel" aria-labelledby="pills-SsemNR-tab">
                                            @include('academicSsemCourses.nr')
                                        </div>

                                        <div class="tab-pane fade" id="pills-SsemPST" role="tabpanel" aria-labelledby="pills-SsemPST-tab">
                                            @include('academicSsemCourses.pst')
                                        </div>

                                        <div class="tab-pane fade" id="pills-SsemSSM" role="tabpanel" aria-labelledby="pills-SsemSSM-tab">
                                            @include('academicSsemCourses.ssm')
                                        </div>

                                        <div class="tab-pane fade" id="pills-SsemPED" role="tabpanel" aria-labelledby="pills-SsemPED-tab">
                                            @include('academicSsemCourses.ped')
                                        </div>

                                    </div>       

                                </div>
                            </div>
                        </div>
                    </p>
                </div>

                <div class="row pt-4 pt-sm-5">
                    <p> 
                        05. &emsp; <div style="padding-left: 14px;">Particulars of the examinations you sat at the University :</div>

                        <div class="table-responsive container ml-0 ml-sm-5" style="padding-right: 0;">
                        
                            <table class="table" id="table">
                                <thead>
                                    <tr>
                                        <th>Year</th>
                                        <th>Index No.</th>
                                        <th>Examination</th>
                                        <th>Medium</th>
                                        <th>Results</th>
                                    </tr>
                                </thead>
                                <tbody id="tbody">
                                    <tr>
                                        <td> <input type="text" name="Exyear[]"> </td>
                                        <td> <input type="text" name="indexNo[]"> </td>
                                        <td> <input type="text" name="Examination[]"> </td>
                                        <td> <input type="text" name="medium[]"> </td>
                                        <td> <input type="text" name="Results[]"> </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr class="container">
                                        <td class="text-right" colspan="5"> <input type="button" value="Add New Row" id="newrows"> </td>
                                    </tr>
                                </tfoot>
                            </table>    

                        </div>
                    </p>
                </div>

                <div class="row pt-4 pt-sm-5">
                    <p> 
                        06. &emsp; 
                        <div class="col-12 col-sm-10">
                            {{ Form::label('pastExaminations', 'Particulars of any examinations which you could not sit previously :') }}
                            {{ Form::textarea('pastExaminations', null , ['class' => 'form-control','rows'=>3]) }}  
                        </div>
                    </p>
                </div>

                <div class="row pt-4 pt-sm-5">
                    <p> 
                        07. &emsp; 
                        <div class="col-12 col-sm-10 pl-3">
                            {{ Form::label('amount', 'Registration fees :') }}
                        </div>
                        <div class="col-12 col-sm-4 pl-sm-5 ml-sm-2">
                            Amount paid : {{ Form::text('amount', null , ['class' => 'form-control']) }}
                            <br>
                            Date of payment : {{ Form::date('amountPayDate', \Carbon\Carbon::now()) }}
                            <br> <br>
                            Receipt No. : {{ Form::text('receiptNo', null , ['class' => 'form-control']) }} 
                            <br>
                            Add image of paid receipt :  {{ Form::file('photo_id', null , ['class' => 'form-control']) }}
                        </div>
                    </p>
                </div>

                <div class="row mt-5" style="justify-content: flex-end;">
                    <p> 
                        <div class="col-12 col-sm-3">
                            {{ Form::submit('Submit',['class' => 'btn btn-primary']) }}
                        </div>
                    </p>
                </div>

            </div>

        {!! Form::close() !!}

    </div>

@endsection