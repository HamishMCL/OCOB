@extends('layout')
@section('title')
<title>Admin - Create Player</title>

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">
@stop
@section('nav')
   <nav>
          <div id="area">
                <h1 style="display:inline-block; margin-left: 15px; float: left;"><a href="/admin">Admin</a></h1>
            <ul>
              <li> <a href="/batting">Batting Innings</a> </li>
              <li> <a href="/bowling">Bowling Innings</a> </li>
              
            </ul>
            </div>
        
        </nav>
@stop

@section('content')
<div id="stats">

        <div style="height: 30px; width:100%;">
        </div>

        <div id="area">

      
      <h1 style="margin-top: 50px;">Create New Player</h1>
      <hr style="text-decoration: ridge;">
      
      <form   method="POST" action="{{ '/createNewPlayer' }}">

      
          <h2>Player name</h2>
          <div class="form-group">
             <input class="form-control" type="text" name="player_name"/>
          </div>
         


          <button class="btn btn-primary" type="submit">Submit</button>
          <input type="hidden" name="_token" value="{{Session::token() }}"></input>
      </form>

      </div>
</div>
@stop