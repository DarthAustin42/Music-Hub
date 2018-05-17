<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="/css/myStyle.css">
	</head>
	<body>

		@extends('layouts.app')

		@section('gameBoard')
			<table id="songList">
				<thead>
				  	<tr>
				    	<th>Title</th>
					    <th>Author</th>
					    <th>Album</th>
					    <th>Genre</th>
					    <th>Time</th>
				  	</tr>
			 	</thead>
			 	<tbody>
				  	@foreach($game as $games)
					  	<tr>
						    <td>{{$games->id}}</td>
						    <td>{{$games->card1}}</td>
						    <td>{{$games->card2}}</td>
						    <td>{{$games->card3}}</td>
						    <td>{{$games->card4}}</td>
						    <td>{{$games->card5}}</td>
						    <td>{{$games->card6}}</td>
						    <td>{{$games->pointsTaken}}</td>
						    <td>
						        <form action="{{ url('game/'.$games->id) }}" method="POST">
						            {{ csrf_field() }}
						            {{ method_field('DELETE') }}

						            <button type="submit" class="btn btn-danger">Delete</button>
						        </form>
						    </td>
						</tr>
					@endforeach
				</tbody>
			</table>
	    @endsection	

	    @section('testingThis')
	    	@foreach($game as $games)
	    		<?php $c1 = 'img/{{$games->card1}}.svg'>
	    		@if($games->id == '1')
			    	<div class='row'>
			    		<div class='col'></div>
			    		<div class='col'>
			    			<div class='row'>
			    				<div class='col'>{{$games->card1}}</div>
			    				<div class='col'><img src={{ URL::asset("{{ $c1 }}") }}></div>
			    				<div class='col'>abc42</div>
			    			</div>
			    			<div class='row'>
			    				<div class='col'>abc42</div>
			    				<div class='col'>abc42</div>
			    				<div class='col'>abc42</div>
			    			</div>
			    		</div>
			    		<div class='col'></div>
			    	</div>

			    @elseif($games->id == '2')
			    	<div class='row'>
			    		<div class='col'>
			    			<div class='row'>
			    				<div class='col'>{{$games->card1}}</div>
			    				<div class='col'>abc42</div>
			    				<div class='col'>abc42</div>
			    			</div>
			    			<div class='row'>
			    				<div class='col'>abc42</div>
			    				<div class='col'>abc42</div>
			    				<div class='col'>abc42</div>
			    			</div>
			    		</div>
			    		<div class='col'></div>

			   	@elseif($games->id == '3')
			    		<div class='col'>
			    			<div class='row'>
			    				<div class='col'>abc42</div>
			    				<div class='col'>abc42</div>
			    				<div class='col'>abc42</div>
			    			</div>
			    			<div class='row'>
			    				<div class='col'>abc42</div>
			    				<div class='col'>abc42</div>
			    				<div class='col'>abc42</div>
			    			</div>
			    		</div>
			    	</div>

			    @else
			    	<div class='row'>
			    		<div class='col'></div>
			    		<div class='col'>
			    			<div class='row'>
			    				<div class='col'>abc42</div>
			    				<div class='col'>abc42</div>
			    				<div class='col'>abc42</div>
			    			</div>
			    			<div class='row'>
			    				<div class='col'>abc42</div>
			    				<div class='col'>abc42</div>
			    				<div class='col'>abc42</div>
			    			</div>
			    		</div>
			    		<div class='col'></div>
			    	</div>
			    @endif
		    @endforeach
	    @endsection
	</body>
	<script src="/js/myScript.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>

