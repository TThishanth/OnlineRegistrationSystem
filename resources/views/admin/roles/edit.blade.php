@extends('layouts.admin')

@section('header')
    <i class="fa fa-list-alt"></i> Edit Roles
@endsection

@section('content')
    
    <div class="col-6">

        @include('inc.errors') 

        {!! Form::model($role , ['method' => 'PATCH' , 'action' => ['AdminRolesController@update', $role->id],'files'=>true]) !!}
                
            <div class="form-groups">
                {{ Form::label('name', 'Role Name :') }}
                {{ Form::text('name', null , ['class' => 'form-control']) }}
            </div>

            <div class="mt-4 subButton">
                {{ Form::submit('Update Role',['class' => 'btn btn-primary']) }}
            </div>

        {!! Form::close() !!}

        <div class="delButton">
            {!! Form::open(['method' => 'DELETE' , 'action' => ['AdminRolesController@destroy', $role->id]]) !!}

                <div class="my-5">
                    {{ Form::submit('Delete Role',['class' => 'btn btn-danger']) }}
                </div>

            {!! Form::close() !!}
        </div>
        
    </div>

@endsection