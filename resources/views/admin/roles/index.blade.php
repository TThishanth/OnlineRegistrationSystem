@extends('layouts.admin')

@section('header')
    <i class="fa fa-list-alt"></i> Roles
@endsection

@section('content')

<div class="row">
    <div class="col-6">
    
    @include('inc.errors') 

        {!! Form::open(['method' => 'POST' , 'action' => 'AdminRolesController@store','files'=>true]) !!}
            
            <div class="form-groups">
                {{ Form::label('name', 'Role Name :') }}
                {{ Form::text('name', null , ['class' => 'form-control']) }}
            </div>

            <div class="my-4">
                {{ Form::submit('Create Role',['class' => 'btn btn-primary']) }}
            </div>

        {!! Form::close() !!}

    </div>

    <div class="col-5 ml-auto">
        
        <div class="container">
            @include('inc.flashMsg')

            <div class="table-responsive pb-5">
                <table class="w3-table w3-bordered w3-centered table-dark table-striped table-hover">
                    <thead>
                        <tr>
                            <th> ID </th>
                            <th> Name </th>
                        </tr>
                    </thead>
                    <tbody>

                    @if($roles)
                        @foreach($roles as $role)
                            <tr>
                                <td><a href="{{ action('AdminRolesController@edit', $role->id) }}"> {{ $role->id }} </a></td>
                                <td> {{ $role->name }} </td>
                            </tr>
                        @endforeach
                    @endif 

                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

@endsection