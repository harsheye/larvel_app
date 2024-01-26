@extends ('layouts.app')


@section ('cssarea')

ul {
    list-style: none;
}


@endsection
@section('content')
    <h1> {{$title}}</h1>
    <p> I Love Vanshika!</p>



    <ul>
        <li> <a href="/posts" > Posts </a> </li>
        <li> <a href="/posts/create" > Create</a> </li>
        <li> <a href="/posts/deletedposts" > Deleted Items</a> <li>
        
@endsection
       
 
