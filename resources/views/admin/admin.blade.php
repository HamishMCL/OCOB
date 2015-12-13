@extends('layout')
@section('title')
<title>Admin</title>
<link rel="stylesheet" type="text/css" href="/css/sweetalert.css">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">
@stop
@section('nav')
  <nav  >
       <div id="area" >
                <h1 style="display:inline-block; margin-left: 15px;"><a href="/">Admin</a></h1>
            <ul>
                <li> <a href="/createNewPlayer">Create Player</a></li>
                <li> <a href="/bowling">Bowling Innings</a> </li>
                <li> <a href="/batting">Batting Innings</a> </li>
            </ul>
            </div>
    </nav>

@stop


@section('content')
<div id="stats">
</div>



@stop