@extends('layout')
@section('title')
<title>Admin - Batting</title>
<link rel="stylesheet" type="text/css" href="/css/sweetalert.css">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">
@stop
@section('nav')
  <nav style=";" >
       <div id="area" >
                <h1 style="display:inline-block; margin-left: 15px;"><a href="/admin">Admin</a></h1>
            <ul>
                <li> <a href="/createNewPlayer">Create Player</a></li>
                <li> <a href="/bowling">Bowling Innings</a> </li>
            </ul>
            </div>
    </nav>

@stop


@section('content')
<div id="stats">
        <div style="height: 30px; width:50%;">
        </div>

        <div id="area">

   		
   		<h1 style="margin-top: 50px;text-decoration:underline">New Batting Innings</h1>
   		<hr>
   		
   		<form  method="POST" action='/batting' >


	   		<h2>Player</h2>
	   		<select class="form-control " name="id" v-model="player">
            <option></option>
          @foreach($players as $player)
            <option value="{{$player->player}}">{{$player->player}}</option>

          @endforeach


			</select>
			
      <div class="form-group">
          <h2>Runs</h2>
          <input class="form-control"  type="number" name="runs" v-model="runs"/>
      </div>
      <div class="form-group">
            <h2>6's</h2>
          <input class="form-control" type="number" name="sixes" v-model="sixes"/>
      </div>
      <div class="form-group">
                <h2>4's</h2>
          <input class="form-control" type="number" name="fours" v-model="fours"/>
      </div>
	      
	   
	
	      	<h2>Out</h2>
	      <!-- 	<h6>Yes</h6><input style="display: block;"type="radio" name="out" v-model="out" value="1" />
          <h6>No</h6><input  style="display: block;"type="radio" name="out" v-model="out" value="0"/ -->
          <div class="radio">
              <label><input type="radio" name="out" v-model="out" value="1">Yes</label>
          </div>

          <div class="radio">
              <label><input type="radio" name="out" v-model="out" value="0">No</label>
          </div>

	      	<button class="btn btn-primary" v-on:click="addBattingStats">Submit</button>

	      	<input type="hidden" name="_token" value="{{Session::token() }}"></input>
     	</form>

   		</div>
</div>


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.10/vue.min.js"></script>
<script src="/js/ocob.js"></script>


@stop