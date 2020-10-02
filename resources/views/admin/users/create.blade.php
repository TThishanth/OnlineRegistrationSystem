@extends('layouts.admin')

@section('header')
    <i class="fa fa-user-plus"></i> Create Users
@endsection

@section('content')
    @include('inc.errors') 

    {!! Form::open(['method' => 'POST' , 'action' => 'AdminUsersController@store','files'=>true]) !!}
        
        <div class="form-groups">
            {{ Form::label('name', 'Name :') }}
            {{ Form::text('name', null , ['class' => 'form-control']) }}
        </div>
        
        <div class="form-groups mt-4">
            {{ Form::label('email', 'Email :') }}
            {{ Form::email('email', null , ['class' => 'form-control']) }}
        </div>
        
        <div class="form-groups mt-4">
            {{ Form::label('role_id', 'Role :') }}
            {{ Form::select('role_id',['' => 'Choose Options'] + $roles , null , ['class' => 'form-control']) }}
        </div>

        <div class="form-groups mt-4">
            {{ Form::label('job_id', 'Select user\'s job name :') }}
            {{ Form::select('job_id',['' => 'Choose Options'] + $jobs , null , ['class' => 'form-control']) }}
        </div>
    
        <div class="form-groups mt-4">
            {{ Form::label('password', 'Password :') }}
            {{ Form::password('password', ['class' => 'form-control']) }}
        </div>

        <div class="my-4">
            {{ Form::submit('Create User',['class' => 'btn btn-primary']) }}
        </div>

    {!! Form::close() !!}

@endsection