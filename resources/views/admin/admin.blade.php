@extends('layout')
@section('title')
<title>Admin</title>
<link rel="stylesheet" type="text/css" href="/css/sweetalert.css">

@stop
@section('nav')
  <nav style="background-color: #6FCDB8;">
       <div id="area" >
                <h1 style="display:inline-block; padding: 20px"><a href="/">Admin</a></h1>
            <ul>
                <li> <a href="/createNewPlayer">Create Player</a></li>
                <li> <a href="/bowling">Creating Bowling Innings</a> </li>
            </ul>
            </div>
    </nav>

@stop


@section('content')
<div id="stats">
        <div style="height: 30px; width:100%;">
        </div>

        <div id="area">

   		
   		<h1 style="margin-top: 50px;">Batting</h1>
   		<hr style="text-decoration: ridge;">
   		
   		<form  method="POST" action='/admin' >
	   		<h2>Player</h2>
	   		<select name="id" v-model="player">
            <option></option>
          @foreach($players as $player)
            <option value="{{$player->player}}">{{$player->player}}</option>

          @endforeach


			</select>
			
	      	<h2>Runs</h2>
	      	<input type="number" name="runs" v-model="runs"/>
	      	<h2>6's</h2>
	      	<input type="number" name="sixes" v-model="sixes"/>
	      	<h2>4's</h2>
	      	<input type="number" name="fours" v-model="fours"/>
	      	<h2>Out</h2>
	      	<h6>Yes</h6><input style="display: block;"type="radio" name="out" v-model="out" value="1" />
          <h6>No</h6><input style="display: block;"type="radio" name="out" v-model="out" value="0"/>

	      	<button v-on:click="addBattingStats">Submit</button>
	      	<input type="hidden" name="_token" value="{{Session::token() }}"></input>
     	</form>

   		</div>
</div>


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.10/vue.min.js"></script>
<script src="/js/ocob.js"></script>
<script src='/js/sweetalert.min.js'></script>

@stop