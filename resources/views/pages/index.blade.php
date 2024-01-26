@extends ('layouts.app')


@section('content')
    <div class="gradient-border" id="box">
        <div class="jumbotron text-center">
        <h1>Welcome To  {{config('app.title', 'Larvel_app')}} !</h1>
        <p>I just started the php laravel</p>
        <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register </a> </p>
        </div>
    </div>
@endsection
