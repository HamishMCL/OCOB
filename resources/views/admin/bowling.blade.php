@extends('layout')
@section('title')
<title>Admin - Bowling</title>

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">
@stop
@section('nav')
   <nav>
          <div id="area">
                <h1 style="display:inline-block; margin-left: 15px; float: left;"><a href="/admin">Admin</a></h1>
           	<ul>
           		<li> <a href="/createNewPlayer">Create  Player</a> </li>
           		<li> <a href="/batting">Batting Innings</a> </li>
           		
           	</ul>
            </div>
        
  </nav>
@stop
@section('content')
<div id="stats">

  <div style="height: 30px; width:100%;">
        </div>

        <div id="area">

   		
   		<h1 style="margin-top: 50px; text-decoration:underline; ">Bowling</h1>
   	
   		
   		<form   method="POST" action="/bowling">
	   		<h2>Player</h2>
	   		<select class="form-control"  name="id">
          <option></option>
				    @foreach($players as $player)
            <option value="{{$player->player}}">{{$player->player}}</option>

          @endforeach
          

			</select>
			
	      	<h2>Wickets</h2>
	      	<input class="form-control" type="number" name="wickets"/>
	      	<h2>Overs</h2>
	      	<input class="form-control" type="number" name="overs"/>
	      	<h2>Maidens</h2>
	      	<input class="form-control" type="number" name="maidens"/>
	      	<h2>Runs conceded</h2>
	      	<input class="form-control" style="display:block;margin-bottom: 5px;"stype="number" name="runs"/>
      
	    

	      	<button class="btn btn-primary" type="submit">Submit</button>
	      	<input type="hidden" name="_token" value="{{Session::token() }}"></input>
     	</form>

   		</div>
</div>
@stop