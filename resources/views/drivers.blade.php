@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <p>Here is an overview of the all the drivers that have been on the grid this year</p>
                        <p>Filter:</p>
                        <form method="GET">
                            <input type="checkbox" name="mercedes" value="1">
                        </form>
                        <p></p>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-8">
                                <table width="100%">
                                    <tr>
                                        <th>Name</th>
                                        <th>Age</th>
                                        <th>Country</th>
                                        <th>Team</th>
                                        <th>Number</th>
                                    </tr>
                                    @foreach ($drivers as $driver)

                                        <tr>
                                            <td width="(100/5)%"> {{$driver->name}} </td>
                                            <td width="(100/5)%"> {{$driver->age}} </td>
                                            <td width="(100/5)%"> {{$driver->country}} </td>
                                            <td width="(100/5)%"> {{$driver->team}} </td>
                                            <td width="(100/5)%" height=239> {{$driver->number}}</td>
                                        </tr>
                                    @endforeach
                                </table>

                        </div>
                        <div class="col-md-4">
                            @foreach ($drivers as $driver)
                                <tr>
                                    <td> <img src="{{URL::asset('/img/'.$driver->image)}}" height="200" width="200" vspace="20"></td>
                                </tr>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection