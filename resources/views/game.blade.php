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
	    	<div class='row'>
	    		<div class='col'></div>
	    		<div class='col'>
	    			<div class='row'>
	    				<div class='col' id="card11"></div>
	    				<div class='col'>{{ URL::asset("img/2_of_clubs.svg") }}</div>
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

	    	<div class='row'>
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


			<!-- <div class="container gameBoard">
		        <div class="row grow">
		            <div class="col-xs-4 gcol"></div>
		            <div class="col-xs-4 gcol Player">
		                <div class="container cardsHolder">
		                    <div class="row">
		                        <div class="col-xs-4 cards" id="card11"></div>
		                        <div class="col-xs-4 cards" id="card12"></div>
		                        <div class="col-xs-4 cards" id="card13"></div>
		                    </div>
		                    <div class="row">
		                        <div class="col-xs-4 cards" id="card14"></div>
		                        <div class="col-xs-4 cards" id="card15"></div>
		                        <div class="col-xs-4 cards" id="card16"></div>
		                    </div>
		                </div>
		            </div>
		            <div class="col-xs-4 gcol"></div>
		        </div>
		        <div class="row grow">
		            <div class="col-xs-4 gcol Player">
		                <div class="container cardsHolder">
		                    <div class="row">
		                        <div class="col-xs-4 cards" id="card21"></div>
		                        <div class="col-xs-4 cards" id="card22"></div>
		                        <div class="col-xs-4 cards" id="card23"></div>
		                    </div>
		                    <div class="row">
		                        <div class="col-xs-4 cards" id="card24"></div>
		                        <div class="col-xs-4 cards" id="card25"></div>
		                        <div class="col-xs-4 cards" id="card26"></div>
		                    </div>
		                </div>
		            </div>
		            <div class="col-xs-4 gcol"></div>
		            <div class="col-xs-4 gcol Player">
		                <div class="container cardsHolder">
		                    <div class="row">
		                        <div class="col-xs-4 cards" id="card31"></div>
		                        <div class="col-xs-4 cards" id="card32"></div>
		                        <div class="col-xs-4 cards" id="card33"></div>
		                    </div>
		                    <div class="row">
		                        <div class="col-xs-4 cards" id="card34"></div>
		                        <div class="col-xs-4 cards" id="card35"></div>
		                        <div class="col-xs-4 cards" id="card36"></div>
		                    </div>
		                </div>
		            </div>
		        </div>
		        <div class="row grow">
		            <div class="col-xs-4 gcol"></div>
		            <div class="col-xs-4 gcol Player">
		                <div class="container cardsHolder">
		                    <div class="row">
		                        <div class="col-xs-4 cards" id="card41"></div>
		                        <div class="col-xs-4 cards" id="card42"></div>
		                        <div class="col-xs-4 cards" id="card43"></div>
		                    </div>
		                    <div class="row">
		                        <div class="col-xs-4 cards" id="card44"></div>
		                        <div class="col-xs-4 cards" id="card45"></div>
		                        <div class="col-xs-4 cards" id="card46"></div>
		                    </div>
		                </div>
		            </div>
		            <div class="col-xs-4 gcol"></div>
		        </div>
		    </div> -->
	    @endsection
	</body>
	<script src="/js/myScript.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>

