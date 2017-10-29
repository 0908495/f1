@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Welcome, write your blog entry down below</div>

                    <div class="panel-body">
                        <form method="post">
                            <textarea name="blog" rows="10" cols="30">Your blog post</textarea>
                            <input type="submit" name="submit" value="Submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
