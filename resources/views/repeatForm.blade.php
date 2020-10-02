@extends('layouts.app')

@section('content')

    <div class="container py-4 py-sm-5 my-0 my-sm-4 px-3 px-sm-5" id="repeatForm">

        @include('inc.errors')

        {!! Form::open(['method' => 'POST' , 'action' => 'AdminRepeatsController@store','files'=>true]) !!}

            <h3 class="text-center"> SABARAGAMUWA UNIVERSITY OF SRILANKA </h3>
            <h3 class="text-center"> FACULTY OF APPLIED SCIENCES </h3>
            <br>
            <h3>
                <div class="row" style="justify-content: center;">

                    YEAR 
                    <div class="col-6 col-sm-2">
                        {{ Form::select('year',['' => 'Choose', 'I' => 'I', 'II' => 'II', 'III'=>'III', 'IV'=>'IV'], null , ['class' => 'form-control']) }}
                    </div>
                    SEMESTER 
                    <div class="col-6 col-sm-2">
                        {{ Form::select('semester',['' => 'Choose', 'I' => 'I', 'II' => 'II'], null , ['class' => 'form-control']) }}
                    </div>
                    (REPEAT) EXAMINATION

                </div>
            </h3>
            <br>
            <h3 class="text-center"><u> EXAMINATION APPLICATION FORM </u></h3>

            <div class="container py-4 py-sm-5">

                <div class="row">
                    <p> 
                        01. &emsp;  
                        <div class="col-12 col-sm-3">
                            {{ Form::label('regNo', 'Registration No :') }}
                            {{ Form::text('regNo', null , ['class' => 'form-control']) }}
                        </div>
                        
                        <div class="col-12 col-sm-3"> 
                            {{ Form::label('indexNo', 'Index No :') }}
                            {{ Form::text('indexNo', null , ['class' => 'form-control']) }}  
                        </div>  

                        <div class="col-12 col-sm-3">
                            {{ Form::label('medium', 'Medium :') }}
                            {{ Form::text('medium', null , ['class' => 'form-control']) }}  
                        </div>
                    </p>
                </div>

                <div class="row pt-4 pt-sm-5">
                    <p> 
                        02. &emsp; 
                        <div class="col-12 col-sm-6">
                            {{ Form::label('fullName', 'Full Name (In English Block Letters) * Mr/Ms :') }}
                            {{ Form::text('fullName', null , ['class' => 'form-control']) }}  
                        </div>
                    </p>
                </div>

                <div class="row pt-4 pt-sm-5">
                    <p> 
                        03. &emsp; <div style="padding-left: 14px;">Please select the subject/subjects that you expect to offer for the Examination.</div>

                        <div class="container ml-0 ml-sm-5" style="padding-right: 0;">
                        
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"> Info </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="pills-CIS-tab" data-toggle="pill" href="#pills-CIS" role="tab" aria-controls="pills-CIS" aria-selected="false"> CIS </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="pills-FST-tab" data-toggle="pill" href="#pills-FST" role="tab" aria-controls="pills-FST" aria-selected="false"> FST </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="pills-NR-tab" data-toggle="pill" href="#pills-NR" role="tab" aria-controls="pills-NR" aria-selected="false"> NR </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="pills-PST-tab" data-toggle="pill" href="#pills-PST" role="tab" aria-controls="pills-PST" aria-selected="false"> PST </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="pills-SSM-tab" data-toggle="pill" href="#pills-SSM" role="tab" aria-controls="pills-SSM" aria-selected="false"> SSM </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="pills-PED-tab" data-toggle="pill" href="#pills-PED" role="tab" aria-controls="pills-PED" aria-selected="false"> PED </a>
                                </li>

                            </ul>

                            <div class="tab-content" id="pills-tabContent">

                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <div class="px-3 py-4" style="border-top: 1px solid #dee2e6; border-bottom: 1px solid #dee2e6; border-left: 1px solid #dee2e6; border-right: 1px solid #dee2e6;">
                                        <p> 
                                            <b> Follow this informations while select your repeat subjects </b><br>
                                            01. Select your Department <br>
                                            02. Select your Year and Semester that you need to repeat <br>
                                            03. Select subjects that you need to repeat
                                        </p>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="pills-CIS" role="tabpanel" aria-labelledby="pills-CIS-tab">
                                    @include('courses.cis')
                                </div>

                                <div class="tab-pane fade" id="pills-FST" role="tabpanel" aria-labelledby="pills-FST-tab">
                                    @include('courses.fst')
                                </div>

                                <div class="tab-pane fade" id="pills-NR" role="tabpanel" aria-labelledby="pills-NR-tab">
                                    @include('courses.nr')
                                </div>

                                <div class="tab-pane fade" id="pills-PST" role="tabpanel" aria-labelledby="pills-PST-tab">
                                    @include('courses.pst')
                                </div>

                                <div class="tab-pane fade" id="pills-SSM" role="tabpanel" aria-labelledby="pills-SSM-tab">
                                    @include('courses.ssm')
                                </div>

                                <div class="tab-pane fade" id="pills-PED" role="tabpanel" aria-labelledby="pills-PED-tab">
                                    @include('courses.ped')
                                </div>

                            </div>       

                        </div>
                    </p>
                </div>

                <div class="row pt-4 pt-sm-5">
                    <p> 
                        04. &emsp; 
                        <div class="col-12 col-sm-6">
                            {{ Form::label('address', 'Permanent Address :') }}
                            {{ Form::textarea('address', null , ['class' => 'form-control','rows'=>3]) }}  
                        </div>
                    </p>
                </div>

                <div class="row pt-4 pt-sm-5">
                    <p> 
                        05. &emsp; 
                        <div class="col-12 col-sm-6">
                            {{ Form::label('addressEx', 'Address during the period of Examination :') }}
                            {{ Form::textarea('addressEx', null , ['class' => 'form-control','rows'=>3]) }}  
                        </div>
                    </p>
                </div>

                <div class="row pt-4 pt-sm-5">
                    <p> 
                        06. &emsp; 
                        <div class="col-12 col-sm-6">
                            {{ Form::label('contactNo', 'Contact Number :') }}
                            {{ Form::text('contactNo', null , ['class' => 'form-control']) }}  
                        </div>
                    </p>
                </div>

                <div class="row pt-4 pt-sm-5">
                    <p> 
                        07. &emsp; 
                        <div class="col-12 col-sm-10">
                            {{ Form::label('admissionDate', 'Date of admission to the University :') }}
                            {{ Form::date('admissionDate', \Carbon\Carbon::now()) }}  
                        </div>
                    </p>
                </div>

                <div class="row pt-4 pt-sm-5">
                    <p> 
                        08. &emsp; 
                            <div class="pl-3">
                                {{ Form::label('registered', 'Have you been registered for this year :') }}
                            </div>
                            <div class="col-12 col-sm-2">
                                {{ Form::select('registered', ['' => 'Choose', 'Yes' => 'Yes', 'No' => 'No'], null, ['class' => 'form-control']) }}  
                            </div>
                    </p>
                </div>

                <div class="row pt-4 pt-sm-5">
                    <p> 
                        09. &emsp; 
                        <div class="col-12 col-sm-10">
                            {{ Form::label('paymentDate', 'Give date of payment of registration fees for the course :') }}
                            {{ Form::date('paymentDate', \Carbon\Carbon::now()) }}  
                        </div>
                    </p>
                </div>

                <div class="row pt-4 pt-sm-5">
                    <p> 
                        10. &emsp; 
                        <div class="col-12 col-sm-10">
                            {{ Form::label('reasons', 'Have you postponed sitting this examination earlier due to illness (supported by Medical Certificate) or any other reasons? If so give particulars :') }}
                            {{ Form::textarea('reasons', null , ['class' => 'form-control','rows'=>3]) }}  
                        </div>
                    </p>
                </div>

                <div class="row pt-4 pt-sm-5">
                    <p> 
                        11. &emsp; 
                        <div class="col-12 col-sm-10 pl-3">
                            {{ Form::label('amount', 'Amount of fees paid. (for the first time need not pay examination fees).') }}
                        </div>
                        <div class="col-12 col-sm-4 pl-sm-5 ml-sm-2">
                            Amount : {{ Form::text('amount', null , ['class' => 'form-control']) }}
                            <br>
                            Date of payment : {{ Form::date('amountPayDate', \Carbon\Carbon::now()) }}
                            <br> <br>
                            Receipt No. : {{ Form::text('receiptNo', null , ['class' => 'form-control']) }} 
                            <br>
                            Add image of paid receipt :  {{ Form::file('photo_id', null , ['class' => 'form-control']) }}
                        </div>
                    </p>
                </div>

                <div class="row pt-4 pt-sm-5">
                    <p style="padding-left: 14px;"> 
                        I certify that the above information is correct. I am aware that my application shall be rejected, if any of the information given above is incorrect.
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