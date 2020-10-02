@extends('layouts.admin')

@section('header')
    <i class="fa fa-check-square-o"></i> Academic Registration Submissions
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
                    <th rowspan="2" style="vertical-align: middle;"> ID </th>
                    <th rowspan="2" style="vertical-align: middle;"> Receipt Image </th>
                    <th rowspan="2" style="vertical-align: middle;"> Full Name </th>
                    <th rowspan="2" style="vertical-align: middle;"> Name with Initials </th>
                    <th rowspan="2" style="vertical-align: middle;"> Registration No </th>
                    <th rowspan="2" style="vertical-align: middle;"> Permanent Address </th>
                    <th rowspan="2" style="vertical-align: middle;"> Permanent Tele.No </th>
                    <th rowspan="2" style="vertical-align: middle;"> Present Address </th>
                    <th rowspan="2" style="vertical-align: middle;"> Present Tele.No </th>
                    <th rowspan="2" style="vertical-align: middle;"> Contact Address </th>
                    <th rowspan="2" style="vertical-align: middle;"> Contact Tele.No </th>
                    <th rowspan="2" style="vertical-align: middle;"> Faculty </th>
                    <th rowspan="2" style="vertical-align: middle;"> Year </th>
                    <th rowspan="2" style="vertical-align: middle;"> Department </th>
                    <th rowspan="2" style="vertical-align: middle;"> Study Programme </th>
                    <th rowspan="2" style="vertical-align: middle;"> First semester courses </th>
                    <th rowspan="2" style="vertical-align: middle;"> Second semester courses </th>
                    <th colspan="5"> Particulars of the examinations you sat at the University </th>
                    <th rowspan="2" style="vertical-align: middle;"> Particulars of any examinations which you could not sit previously </th>
                    <th rowspan="2" style="vertical-align: middle;"> Amount paid </th>
                    <th rowspan="2" style="vertical-align: middle;"> Date of payment </th>
                    <th rowspan="2" style="vertical-align: middle;"> Receipt No </th>
                    <th rowspan="2" style="vertical-align: middle;"> Submitted_at </th>
                    <th rowspan="2" style="vertical-align: middle;"> Approve/Un-approve </th>
                    <th rowspan="2" style="vertical-align: middle;"> Delete Submission </th>
                </tr>
                <tr>
                    <th> Year </th>
                    <th> Index No. </th>
                    <th> Examination </th>
                    <th> medium </th>
                    <th> Results </th>    
                </tr>
            </thead>
            <tbody class="text-nowrap" id="myTable">

                @if($academics)
                    @foreach($academics as $academic)
                        @if($academic->is_active == 0)
                            <tr>
                                <td> {{ $academic->id }} </td>
                                <td> <a href="{{ $academic->photo ? $academic->photo->file : 'https://via.placeholder.com/400' }}"> <img height="50" src="{{ $academic->photo ? $academic->photo->file : 'https://via.placeholder.com/400' }}" alt=""> </a></td>
                                <td> {{ $academic->fullName }} </td>
                                <td> {{ $academic->name }} </td>
                                <td> {{ $academic->regNo }} </td>
                                <td> {{ $academic->address }} </td>
                                <td> {{ $academic->hNumber }} </td>
                                <td> {{ $academic->presentAddress }} </td>
                                <td> {{ $academic->pNumber }} </td>
                                <td> {{ $academic->contactAddress }} </td>
                                <td> {{ $academic->cNumber }} </td>
                                <td> {{ $academic->faculty }} </td>
                                <td> {{ $academic->year }} </td>
                                <td> {{ $academic->department }} </td>
                                <td> {{ $academic->studyProgramme }} </td>
                                <td><pre> {{ $academic->Fsemcourse }} </pre></td>
                                <td><pre> {{ $academic->Ssemcourse }} </pre></td>
                                <td><pre> {{ $academic->Exyear }} </pre></td>
                                <td><pre> {{ $academic->indexNo }} </pre></td>
                                <td><pre> {{ $academic->Examination }} </pre></td>
                                <td><pre> {{ $academic->medium }} </pre></td>
                                <td><pre> {{ $academic->Results }} </pre></td>
                                <td> {{ $academic->pastExaminations }} </td>
                                <td> {{ $academic->amount }} </td>
                                <td> {{ $academic->amountPayDate }} </td>
                                <td> {{ $academic->receiptNo }} </td>
                                <td> {{ $academic->updated_at }} </td>
                                <td>
                                    @if($academic->is_active == 1)

                                        {!! Form::open(['method' => 'PATCH' , 'action' => ['AdminAcademicsController@update', $academic->id]]) !!}

                                            <input type="hidden" name="is_active" value="0">

                                            <div class="form-group">
                                                {{ Form::submit('Un-approve',['class' => 'btn btn-success']) }}
                                            </div>  
                                        
                                        {!! Form::close() !!}

                                    @else

                                        {!! Form::open(['method' => 'PATCH' , 'action' => ['AdminAcademicsController@update', $academic->id]]) !!}

                                            <input type="hidden" name="is_active" value="1">

                                            <div class="form-group">
                                                {{ Form::submit('Approve',['class' => 'btn btn-info']) }}
                                            </div>  

                                        {!! Form::close() !!}

                                    @endif

                                </td>
                                <td>

                                    {!! Form::open(['method' => 'DELETE' , 'action' => ['AdminAcademicsController@destroy', $academic->id]]) !!}

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



