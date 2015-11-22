@extends('layout')

@section('nav')
   <nav style="background-color: #6FCDB8;">
          <div id="area">
                <h1 style="display:inline-block; padding: 15px; float: left;"><a href="/admin">Admin</a></h1>
            <ul>
              <li> <a href="">Create New Player</a> </li>
              <li> <a href="/bowling">Create New Bowling Innings</a> </li>
              
            </ul>
            </div>
        
        </nav>
@stop

@section('content')
        <div style="height: 30px; width:100%;">
        </div>

        <div id="area">

      
      <h1 style="margin-top: 50px;">Create New Player</h1>
      <hr style="text-decoration: ridge;">
      
      <form   method="POST" action="{{ '/createNewPlayer' }}">

      
          <h2>Player name</h2>
          <input type="text" name="player_name"/>


          <button type="submit">Submit</button>
          <input type="hidden" name="_token" value="{{Session::token() }}"></input>
      </form>

      </div>

@stop