@extends('layouts.admin')

@section('header')
    <i class="fa fa-users"></i> Fourth Year Students
@endsection

@section('content')

    <div style="float: right;">
        <input id="myInput" type="text/number" placeholder="Search.."> 
        <button type="submit"><i class="fa fa-search"></i></button>
    </div>
    <br><br>

    @include('inc.flashMsg')

    <!-- Start of FourthYear -->
    <div class="table-responsive pb-5">
        <table class="w3-table w3-bordered table-dark table-striped table-hover">
            <thead>
                <tr>
                    <th> ID </th>
                    <th> Name </th>
                    <th> Email </th>
                    <th> Created_at </th>
                    <th> Updated_at </th>
                </tr>
            </thead>
            <tbody id="myTable">

            @if($users)
                @foreach($users as $user)
                    @if($user->job->name == 'Fourth Year Students' && $user->role->name == 'Student')
                        <tr>
                            <td> <a href="{{ action('AdminUsersController@edit', $user->id) }}"> {{ $user->id }} </a> </td>
                            <td> {{ $user->name }} </td>
                            <td> {{ $user->email }} </td>
                            <td> {{ $user->created_at->diffForHumans() }} </td>
                            <td> {{ $user->updated_at->diffForHumans() }} </td>
                        </tr>
                    @endif
                @endforeach
            @endif 

            </tbody>
        </table>
    </div>
    <!-- End of FourthYear -->

@endsection