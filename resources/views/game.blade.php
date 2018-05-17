<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="/css/myStyle.css">
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script>
			function getLogin() {
				alert("TEST LOGIN");
			}
			function refreshCards() {
				$('#theMainBoard').load(document.URL + ' #theMainBoard');
				window.setTimeout(refreshCards, 10000);
			}
			function shuffleDeck() {
				jQuery.ajax("/shuffle");
			}
		</script>
	</head>
	<body onload="refreshCards()">

		@extends('layouts.app')
	    @section('gameBoard')
	    <div id="theMainBoard" class="theMainBoard" style="margin:20px;">
	    	@foreach($game as $games)
	    		@if($games->id == '1')
			    	<div class='row' style="height:30vh;">
			    		<div class='col'></div>
			    		<div class='col'>
			    			<div class='row'>
			    				<div class='col' style="width:16%"><center><img src='img/{{ $games->card1 }}.svg' style="height:15vh; width:10vw;"></center></div>
			    				<div class='col' style="width:16%"><center><img src='img/{{ $games->card2 }}.svg' style="height:15vh; width:10vw;"></center></div>
			    				<div class='col' style="width:16%"><center><img src='img/{{ $games->card3 }}.svg' style="height:15vh; width:10vw;"></center></div>
		    				</div>
		    				<div class='row'>
			    				<div class='col' style="width:16%"><center><img src='img/{{ $games->card4 }}.svg' style="height:15vh; width:10vw;"></center></div>
			    				<div class='col' style="width:16%"><center><img src='img/{{ $games->card5 }}.svg' style="height:15vh; width:10vw;"></center></div>
			    				<div class='col' style="width:16%"><center><img src='img/{{ $games->card6 }}.svg' style="height:15vh; width:10vw;"></center></div>
			    			</div>
			    		</div>
			    		<div class='col'></div>
			    	</div>

			    @elseif($games->id == '2')
			    	<div class='row' style="height:30vh;">
			    		<div class='col'>
			    			<div class='row'>
			    				<div class='col' style="width:16%"><center><img src='img/{{ $games->card1 }}.svg' style="height:15vh; width:10vw;"></center></div>
			    				<div class='col' style="width:16%"><center><img src='img/{{ $games->card2 }}.svg' style="height:15vh; width:10vw;"></center></div>
			    				<div class='col' style="width:16%"><center><img src='img/{{ $games->card3 }}.svg' style="height:15vh; width:10vw;"></center></div>
		    				</div>
		    				<div class='row'>
			    				<div class='col' style="width:16%"><center><img src='img/{{ $games->card4 }}.svg' style="height:15vh; width:10vw;"></center></div>
			    				<div class='col' style="width:16%"><center><img src='img/{{ $games->card5 }}.svg' style="height:15vh; width:10vw;"></center></div>
			    				<div class='col' style="width:16%"><center><img src='img/{{ $games->card6 }}.svg' style="height:15vh; width:10vw;"></center></div>
			    			</div>
			    		</div>
			    		<div class='col'>
			    			<form action="/shuffle">
							    <input type="submit" value="Shuffle the deck!" />
							</form>
							<button onclick="shuffleDeck()">SHUFFLE</button>
			    		</div>

			   	@elseif($games->id == '3')
			    		<div class='col'>
			    			<div class='row'>
			    				<div class='col' style="width:16%"><center><img src='img/{{ $games->card1 }}.svg' style="height:15vh; width:10vw;"></center></div>
			    				<div class='col' style="width:16%"><center><img src='img/{{ $games->card2 }}.svg' style="height:15vh; width:10vw;"></center></div>
			    				<div class='col' style="width:16%"><center><img src='img/{{ $games->card3 }}.svg' style="height:15vh; width:10vw;"></center></div>
		    				</div>
		    				<div class='row'>
			    				<div class='col' style="width:16%"><center><img src='img/{{ $games->card4 }}.svg' style="height:15vh; width:10vw;"></center></div>
			    				<div class='col' style="width:16%"><center><img src='img/{{ $games->card5 }}.svg' style="height:15vh; width:10vw;"></center></div>
			    				<div class='col' style="width:16%"><center><img src='img/{{ $games->card6 }}.svg' style="height:15vh; width:10vw;"></center></div>
			    			</div>
			    		</div>
			    	</div>

			    @else
			    	<div class='row' style="height:30vh;">
			    		<div class='col'></div>
			    		<div class='col'>
			    			<div class='row'>
			    				<div class='col' style="width:16%"><center><img src='img/{{ $games->card1 }}.svg' style="height:15vh; width:10vw;"></center></div>
			    				<div class='col' style="width:16%"><center><img src='img/{{ $games->card2 }}.svg' style="height:15vh; width:10vw;"></center></div>
			    				<div class='col' style="width:16%"><center><img src='img/{{ $games->card3 }}.svg' style="height:15vh; width:10vw;"></center></div>
		    				</div>
		    				<div class='row'>
			    				<div class='col' style="width:16%"><center><img src='img/{{ $games->card4 }}.svg' style="height:15vh; width:10vw;"></center></div>
			    				<div class='col' style="width:16%"><center><img src='img/{{ $games->card5 }}.svg' style="height:15vh; width:10vw;"></center></div>
			    				<div class='col' style="width:16%"><center><img src='img/{{ $games->card6 }}.svg' style="height:15vh; width:10vw;"></center></div>
			    			</div>
			    		</div>
			    		<div class='col'></div>
			    	</div>
			    @endif
		    @endforeach
		</div>
	    @endsection
	</body>
	<script src="/js/myScript.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>

