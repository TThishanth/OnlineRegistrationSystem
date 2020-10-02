@extends('layouts.admin')

@section('header')
    <i class="fa fa-check-square-o"></i> Hostel Registration Submissions
@endsection

@section('content')

    <div style="float: right;">
        <input id="myInput" type="text/number" placeholder="Search.."> 
        <button type="submit"><i class="fa fa-search"></i></button>
    </div>
    <br><br>

    @include('inc.flashMsg')

    <div class="table-responsive">
        <table class="w3-table w3-bordered w3-centered table-hover">
            <thead>
                <tr>
                    <th> ID </th>
                    <th> Receipt Image </th>
                    <th> Full Name </th>
                    <th> Name with Initials </th>
                    <th> Registration No </th>
                    <th> Sex </th>
                    <th> Permanent Address </th>
                    <th> Present Address </th>
                    <th> Contact Number </th>
                    <th> Have you been registered for this year </th>
                    <th> Give date of payment of registration fees for the course </th>
                    <th> Faculty </th>
                    <th> Year </th>
                    <th> Department </th>
                    <th> Amount paid </th>
                    <th> Date of payment </th>
                    <th> Receipt No </th>
                    <th> Submitted_at </th>
                    <th> Approve/Un-approve </th>
                    <th> Delete Submission </th>
                </tr>
            </thead>
            <tbody class="text-nowrap" id="myTable">

            @if($hostels)
                @foreach($hostels as $hostel)
                    @if($hostel->sex == 'Male')
                        <tr>
                            <td> {{ $hostel->id }} </td>
                            <td> <a href="{{ $hostel->photo ? $hostel->photo->file : 'https://via.placeholder.com/400' }}"> <img height="50" src="{{ $hostel->photo ? $hostel->photo->file : 'https://via.placeholder.com/400' }}" alt=""> </a></td>
                            <td> {{ $hostel->fullName }} </td>
                            <td> {{ $hostel->name }} </td>
                            <td> {{ $hostel->regNo }} </td>
                            <td> {{ $hostel->sex }} </td>
                            <td> {{ $hostel->address }} </td>
                            <td> {{ $hostel->presentAddress }} </td>
                            <td> {{ $hostel->contactNo }} </td>
                            <td> {{ $hostel->registered }} </td>
                            <td> {{ $hostel->paymentDate }} </td>
                            <td> {{ $hostel->faculty }} </td>
                            <td> {{ $hostel->year }} </td>
                            <td> {{ $hostel->department }} </td>
                            <td> {{ $hostel->amount }} </td>
                            <td> {{ $hostel->amountPayDate }} </td>
                            <td> {{ $hostel->receiptNo }} </td>
                            <td> {{ $hostel->updated_at }} </td>
                            <td>
                                @if($hostel->is_active == 1)

                                    {!! Form::open(['method' => 'PATCH' , 'action' => ['AdminHostelsController@update', $hostel->id]]) !!}

                                        <input type="hidden" name="is_active" value="0">

                                        <div class="form-group">
                                            {{ Form::submit('Un-approve',['class' => 'btn btn-success']) }}
                                        </div>  
                                    
                                    {!! Form::close() !!}

                                @else

                                    {!! Form::open(['method' => 'PATCH' , 'action' => ['AdminHostelsController@update', $hostel->id]]) !!}

                                        <input type="hidden" name="is_active" value="1">

                                        <div class="form-group">
                                            {{ Form::submit('Approve',['class' => 'btn btn-info']) }}
                                        </div>  

                                    {!! Form::close() !!}

                                @endif

                            </td>
                            <td>

                                {!! Form::open(['method' => 'DELETE' , 'action' => ['AdminHostelsController@destroy', $hostel->id]]) !!}

                                    <div class="form-group">
                                        {{ Form::submit('Delete',['class' => 'btn btn-danger']) }}
                                    </div>  

                                {!! Form::close() !!}

                            </td>
                        </tr>
                    @endif    
                @endforeach
            @endif 
            </tbody>
        </table>
    </div>

@endsection



