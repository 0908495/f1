@extends('layouts.app')
<link href="{{ asset('css/tyres.css') }}" rel="stylesheet">

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">The F1 tyres of the current season are provided by Pirelli. Pirelli offers a total of 7 different compounds</div>
                        <div class="panel-body">
                            <div class="col-md-8">
                                <table width="100%">
                                    <tr>
                                        <th>Compound</th>
                                        <th>Condition</th>
                                    </tr>
                                    @foreach ($tyres as $tyre)
                                        <tr>
                                            <td width="(100/2)%"> {{$tyre->tyre}} </td>
                                            <td width="(100/2)%" height=239> {{$tyre->condition}} </td>
                                        </tr>
                                    @endforeach
                                </table>

                            </div>
                            <div class="col-md-4">
                                @foreach ($tyres as $tyre)
                                    <tr>
                                        <td> <img src="{{URL::asset('/img/'.$tyre->image)}}" height="200" width="200" vspace="20"></td>
                                    </tr>
                                @endforeach
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
