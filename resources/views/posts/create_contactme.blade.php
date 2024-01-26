



@extends('layouts.app')

@section('cssarea')

    .center{
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .main-data{
        display: flex;
        justify-content: space-between;
        
        flex-direction: row;
        
    }

@endsection

@section('content')
    @include('includes.messages')

    <div class="main-data">
        <div class="main1">
            <h1 > Contact Me </h1>
            <p> Fill Out the form to contact Me! </p>
        </div>
        <div class="main2">
            <button onclick=redirectto() ; type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" >Go Back</button>
        </div>
    </div>
    <div class="form-floating center">
    {!! Form::open(['action' => '\App\Http\Controllers\PostController@store', 'method' => 'Post' ]) !!}

        <div class="mb-3">
            {{Form::label('Name', 'Name', )}}
            {{Form::text('Name', '', ['class' => "form-control", 'id' => "floatingInputGroup1" , 'placeholder' => 'Your Name'])}}
        </div>
        <div class="mb-3">
            {{Form::label('Email', 'Email')}}
            {{Form::text('Email', '', ['class'   => 'form-control', 'placeholder' => 'Obama@hotmail.com'])}}
        </div>
        <div class="mb-3">
            {{Form::label('Message', 'Data')}}
            {{Form::textarea('Message', '', ['class'   => 'form-control', 'placeholder' => 'Your Message'])}}
        </div>


        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}   
    </div>
@endsection


@section('jsarea')

function redirectto(){
    window.location.href = "/posts";
}




@endsection