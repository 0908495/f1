@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Look up information about the tracks that are on the calendar of 2017</div>
                    <div class="panel-body">
                        <div class="col-md-8">
                            <table width="100%">
                                <tr>
                                    <th>Name</th>
                                    <th>Country</th>
                                    <th>Length in meters</th>
                                </tr>
                                @foreach ($tracks as $track)

                                    <tr>
                                        <td width="(100/3)%"> {{$track->name}} </td>
                                        <td width="(100/3)%"> {{$track->country}} </td>
                                        <td width="(100/3)%" height=218> {{$track->length}} </td>
                                    </tr>
                                @endforeach
                            </table>

                        </div>
                        <div class="col-md-4">
                            @foreach ($tracks as $track)
                                <tr>
                                    <td> <img src="{{URL::asset('/img/'.$track->image)}}"vspace="20"></td>
                                </tr>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
