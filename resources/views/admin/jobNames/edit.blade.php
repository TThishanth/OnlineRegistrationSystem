@extends('layouts.admin')

@section('header')
    <i class="fa fa-list-alt"></i> Edit Job name
@endsection

@section('content')
    
    <div class="col-6">

        @include('inc.errors') 

        {!! Form::model($job , ['method' => 'PATCH' , 'action' => ['AdminJobsController@update', $job->id],'files'=>true]) !!}
                
            <div class="form-groups">
                {{ Form::label('name', 'Job Name :') }}
                {{ Form::text('name', null , ['class' => 'form-control']) }}
            </div>

            <div class="mt-4 subButton">
                {{ Form::submit('Update Job Name',['class' => 'btn btn-primary']) }}
            </div>

        {!! Form::close() !!}

        <div class="delButton">
            {!! Form::open(['method' => 'DELETE' , 'action' => ['AdminJobsController@destroy', $job->id]]) !!}

                <div class="my-5">
                    {{ Form::submit('Delete Job Name',['class' => 'btn btn-danger']) }}
                </div>

            {!! Form::close() !!}
        </div>
        
    </div>

@endsection