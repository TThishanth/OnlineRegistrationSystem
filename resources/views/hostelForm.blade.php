@extends('layouts.app')

@section('content')

    <div class="container py-4 py-sm-5 my-0 my-sm-4 px-3 px-sm-5" id="repeatForm">

        @include('inc.errors')
    
        {!! Form::open(['method' => 'POST', 'action' => 'AdminHostelsController@store', 'files'=>true]) !!}
        
            <h3 class="text-center"> SABARAGAMUWA UNIVERSITY OF SRILANKA </h3>
            <br>
            <h3 class="text-center"> Application for Hostel Registration </h3>
            
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
                            <div class="pl-3">
                                {{ Form::label('sex', 'Sex :') }}
                            </div>
                            <div class="col-12 col-sm-2">
                                {{ Form::select('sex', ['' => 'Choose', 'Male' => 'Male', 'Female' => 'Female'], null, ['class' => 'form-control']) }}  
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
                            {{ Form::label('presentAddress', 'Present Address :') }}
                            {{ Form::textarea('presentAddress', null , ['class' => 'form-control','rows'=>3]) }}  
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
                        08. &emsp; 
                        <div class="col-12 col-sm-10">
                            {{ Form::label('paymentDate', 'Give date of payment of registration fees for the course :') }}
                            {{ Form::date('paymentDate', \Carbon\Carbon::now()) }}  
                        </div>
                    </p>
                </div>

                <div class="row pt-4 pt-sm-5">
                    <p> 
                        09. &emsp; 
                        <div class="col-12 col-sm-4">
                            {{ Form::label('faculty', 'Faculty :') }}
                            {{ Form::select('faculty',['' => 'Choose', 'Agricultural Sciences' => 'Agricultural Sciences', 'Applied Sciences' => 'Applied Sciences', 'Geomatics' => 'Geomatics', 'Management Studies' => 'Management Studies', 'Medicine' => 'Medicine', 'Social Sciences and Languages' => 'Social Sciences and Languages', 'Technology' => 'Technology'], null , ['class' => 'form-control']) }}
                        </div>
                        
                        <div class="col-12 col-sm-4 pt-3 pt-sm-0"> 
                            {{ Form::label('year', 'Year :') }}
                            {{ Form::select('year',['' => 'Choose', 'First Year' => 'First Year', 'Second Year' => 'Second Year', 'Third Year' => 'Third Year', 'Fourth Year' => 'Fourth Year'], null , ['class' => 'form-control']) }}  
                        </div>
                    </p>
                </div>
                
                <div class="row pt-4 pt-sm-5">
                    <p> 
                        10. &emsp; 
                        <div class="col-12 col-sm-6">
                            {{ Form::label('department', 'Department :') }}
                            {{ Form::text('department', null , ['class' => 'form-control']) }} 
                        </div>
                    </p>
                </div>
                        
                <div class="row pt-4 pt-sm-5">
                    <p> 
                        10. &emsp; 
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