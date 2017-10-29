@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Here you can read the blogs of the offical Formula 1 teams.</div>

                    <div class="panel-body">
                        @foreach ($blogs as $blog)
                            <p>{{$blog->text}}</p>
                            <p>{{$blog->team}}</p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
