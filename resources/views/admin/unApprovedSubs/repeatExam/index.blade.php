@extends('layouts.admin')

@section('header')
    <i class="fa fa-check-square-o"></i> Repeat Exam Submissions
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
                    <th> Year </th>
                    <th> Semester </th>
                    <th> Registration No </th>
                    <th> Index No </th>
                    <th> Medium </th>
                    <th> Full Name </th>
                    <th> subject/subjects that you expect to offer for the Examination </th>
                    <th> Permanent Address </th>
                    <th> Address during the period of Examination </th>
                    <th> Contact Number </th>
                    <th> Date of admission to the University </th>
                    <th> Have you been registered for this year </th>
                    <th> Give date of payment of registration fees for the course </th>
                    <th> Have you postponed sitting this examination earlier due to illness (supported by Medical Certificate) or any other reasons? </th>
                    <th> Amount paid </th>
                    <th> Date of payment </th>
                    <th> Receipt No </th>
                    <th> Submitted_at </th>
                    <th> Approve/Un-approve </th>
                    <th> Delete Submission </th>
                </tr>
            </thead>
            <tbody class="text-nowrap" id="myTable">

            @if($repeats)
                @foreach($repeats as $repeat)
                    @if($repeat->is_active == 0)
                        <tr>
                            <td> {{ $repeat->id }} </td>
                            <td> <a href="{{ $repeat->photo ? $repeat->photo->file : 'https://via.placeholder.com/400' }}"> <img height="50" src="{{ $repeat->photo ? $repeat->photo->file : 'https://via.placeholder.com/400' }}" alt=""> </a></td>
                            <td> {{ $repeat->year }} </td>
                            <td> {{ $repeat->semester }} </td>
                            <td> {{ $repeat->regNo }} </td>
                            <td> {{ $repeat->indexNo }} </td>
                            <td> {{ $repeat->medium }} </td>
                            <td> {{ $repeat->fullName }} </td>
                            <td><pre> {{ $repeat->course }} </pre></td>
                            <td> {{ $repeat->address }} </td>
                            <td> {{ $repeat->addressEx }} </td>
                            <td> {{ $repeat->contactNo }} </td>
                            <td> {{ $repeat->admissionDate }} </td>
                            <td> {{ $repeat->registered }} </td>
                            <td> {{ $repeat->paymentDate }} </td>
                            <td> {{ $repeat->reasons }} </td>
                            <td> {{ $repeat->amount }} </td>
                            <td> {{ $repeat->amountPayDate }} </td>
                            <td> {{ $repeat->receiptNo }} </td>
                            <td> {{ $repeat->updated_at }} </td>
                            <td>
                                @if($repeat->is_active == 1)

                                    {!! Form::open(['method' => 'PATCH' , 'action' => ['AdminRepeatsController@update', $repeat->id]]) !!}

                                        <input type="hidden" name="is_active" value="0">

                                        <div class="form-group">
                                            {{ Form::submit('Un-approve',['class' => 'btn btn-success']) }}
                                        </div>  
                                    
                                    {!! Form::close() !!}

                                @else

                                    {!! Form::open(['method' => 'PATCH' , 'action' => ['AdminRepeatsController@update', $repeat->id]]) !!}

                                        <input type="hidden" name="is_active" value="1">

                                        <div class="form-group">
                                            {{ Form::submit('Approve',['class' => 'btn btn-info']) }}
                                        </div>  

                                    {!! Form::close() !!}

                                @endif

                            </td>
                            <td>

                                {!! Form::open(['method' => 'DELETE' , 'action' => ['AdminRepeatsController@destroy', $repeat->id]]) !!}

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



