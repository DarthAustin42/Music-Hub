<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="/css/myStyle.css">
	</head>
	<body>

		@extends('layouts.app')

		@section('currentRecords')
			<center><h1>Current Song List</h1></center>
			<table id="songList" class="table table-striped">
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
				  	@foreach($record as $records)
					  	<tr>
						    <td>{{$records->title}}</td>
						    <td>{{$records->author}}</td>
						    <td>{{$records->album}}</td>
						    <td>{{$records->genre}}</td>
						    <td>{{$records->time}}</td>
						    <td>
						        <form action="{{ url('record/'.$records->id) }}" method="POST">
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

		@section('newRecords')
			<div class="addRecord">
	            <br>
	            <hr>
	            <center><h1>Add a new song</h1></center>
	        </div>
			<div class="panel-body">
		        @include('common.errors')

		        <form action="{{ url('/record') }}" method="POST" class="form-horizontal">
		            {{ csrf_field() }}

		            <div class="form-group">
		            	<table>
						  	<tr><input type="text" name="title" id="record-title" class="form-control" placeholder="Title"></tr>
						  	<tr><input type="text" name="author" id="record-author" class="form-control" placeholder="Author"></tr>
						  	<tr><input type="text" name="album" id="record-album" class="form-control" placeholder="Album"></tr>
						  	<tr><input type="text" name="genre" id="record-genre" class="form-control" placeholder="Genre"></tr>
						  	<tr><input type="text" name="time" id="record-time" class="form-control" placeholder="Time"></tr>
					  	</table>
		            </div>

		            <div class="form-group">
	                    <center>
		                    <button type="submit" class="btn btn-default">Add Song</button>
	                    </center>
		            </div>
		        </form>
		    </div>
	    @endsection

	    @section('updateRecords')
			<div class="updateRecord">
	            <br>
	            <hr>
	            <center><h1>Update a song</h1></center>
	        </div>
			<div class="panel-body">
		        @include('common.errors')

		        <form action="{{ url('/record/'.$records->id) }}" method="POST" class="form-horizontal">
		            {{ csrf_field() }}

		            <div class="form-group">
		            	<center>
		            		<select id="recordListTitle" name="recordListTitle" onchange="changeRecord()" class="selectpicker">
		            			<option value="" selected disabled hidden>Choose Song...</option>
			            		@foreach($record as $records)
			            			<option>{{$records->title}}</option>
			            		@endforeach
			            	</select>
			            	<select id="recordList" name="recordList" class="selectpicker" hidden="true">
			            		<option value="" selected disabled hidden>Choose Song...</option>
			            		@foreach($record as $records)
			            			<option>{{$records->id}}</option>
			            		@endforeach
			            	</select>
			            </center>
		            	<br>
		            	<table>
						  	<tr><input type="text" name="title2" id="record-title2" class="form-control" placeholder="Title"></tr>
						  	<tr><input type="text" name="author2" id="record-author2" class="form-control" placeholder="Author"></tr>
						  	<tr><input type="text" name="album2" id="record-album2" class="form-control" placeholder="Album"></tr>
						  	<tr><input type="text" name="genre2" id="record-genre2" class="form-control" placeholder="Genre"></tr>
						  	<tr><input type="text" name="time2" id="record-time2" class="form-control" placeholder="Time"></tr>
					  	</table>
		            </div>

		            <div class="form-group">
	                    <center>
		                    <button type="submit" class="btn btn-default">Update Song</button>
	                    </center>
		            </div>
		        </form>
		    </div>
	    @endsection
	</body>
	<script src="/js/myScript.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>

