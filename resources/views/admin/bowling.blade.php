@extends('layout')

@section('nav')
   <nav style="background-color: #6FCDB8;">
          <div id="area">
                <h1 style="display:inline-block; padding: 15px; float: left;"><a href="/admin">Admin</a></h1>
           	<ul>
           		<li> <a href="/createNewPlayer">Create New Player</a> </li>
           		<li> <a href="/bowling">Create New Bowling Innings</a> </li>
           		
           	</ul>
            </div>
        
  </nav>
@stop
@section('content')
  <div style="height: 30px; width:100%;">
        </div>

        <div id="area">

   		
   		<h1 style="margin-top: 50px;">Bowling</h1>
   		<hr style="text-decoration: ridge;">
   		
   		<form   method="POST" action="/bowling">
	   		<h2>Player</h2>
	   		<select name="id">
          <option></option>
				    @foreach($players as $player)
            <option value="{{$player->player}}">{{$player->player}}</option>

          @endforeach
          

			</select>
			
	      	<h2>Wickets</h2>
	      	<input type="number" name="wickets"/>
	      	<h2>Overs</h2>
	      	<input type="number" name="overs"/>
	      	<h2>Maidens</h2>
	      	<input type="number" name="maidens"/>
	      	<h2>Runs conceded</h2>
	      	<input style="display:block;margin-bottom: 5px;"stype="number" name="runs"/>
          <h2>Catches</h2>
          <input type="number" name="catches"/>
	    

	      	<button type="submit">Submit</button>
	      	<input type="hidden" name="_token" value="{{Session::token() }}"></input>
     	</form>

   		</div>

@stop