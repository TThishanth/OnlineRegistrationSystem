@extends('layouts.admin')

@section('header')
    <i class="fa fa-user-times"></i> Edit Users
@endsection

@section('content')

    <div class="container">

        @include('inc.errors') 

        {!! Form::model($user , ['method' => 'PATCH' , 'action' => ['AdminUsersController@update', $user->id],'files'=>true]) !!}
                    
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
                {{ Form::select('role_id', $roles , null , ['class' => 'form-control']) }}
            </div>

            <div class="form-groups mt-4">
                {{ Form::label('job_id', 'Select user\'s job name :') }}
                {{ Form::select('job_id', $jobs , null , ['class' => 'form-control']) }}
            </div>
            
            <div class="form-groups mt-4">
                {{ Form::label('password', 'Password :') }}
                {{ Form::password('password', ['class' => 'form-control']) }}
            </div>

            <div class="mt-4 subButton">
                {{ Form::submit('Update User',['class' => 'btn btn-primary']) }}
            </div>

        {!! Form::close() !!}

        <div class="delButton">
            {!! Form::open(['method' => 'DELETE' , 'action' => ['AdminUsersController@destroy', $user->id]]) !!}

                <div class="my-5">
                    {{ Form::submit('Delete User',['class' => 'btn btn-danger']) }}
                </div>

            {!! Form::close() !!}
        </div>
        
    </div>

@endsection