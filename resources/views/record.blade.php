<html>
	<head>
		<style>
			table {
			    font-family: arial, sans-serif;
			    border-collapse: collapse;
			    width: 100%;
			}

			td, th {
			    border: 1px solid #dddddd;
			    text-align: left;
			    padding: 8px;
			}

			tr:nth-child(even) {
			    background-color: #dddddd;
			}

            input[type=text], select {
                width: 18%;
                padding: 12px 20px;
                margin: 8px 1%;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
            }

            button[type=submit] {
                width: 100%;
                background-color: #4CAF50;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }

            .addRecord {
                top: 20px;
                margin: 10px;
                margin-bottom: 0px;
                padding: 10px;
                padding-bottom: 0px;
            }
		</style>
	</head>
	<body>

		@extends('layouts.app')

		@section('currentRecords')
			<table>
				<center><h1>Current Song List</h1></center>
			  	<tr>
			    	<th>Title</th>
				    <th>Author</th>
				    <th>Album</th>
				    <th>Genre</th>
				    <th>Time</th>
			  	</tr>
			  	@foreach($record as $records)
				  	<tr>
					    <td>{{$records->title}}</td>
					    <td>{{$records->author}}</td>
					    <td>{{$records->album}}</td>
					    <td>{{$records->genre}}</td>
					    <td>{{$records->time}}</td>
					    <td>
					        <form action="{{ url('/'.$record->id) }}" method="POST">
					            {{ csrf_field() }}
					            {{ method_field('DELETE') }}

					            <button type="submit" class="btn btn-danger">
					                <i class="fa fa-trash"></i> Delete
					            </button>
					        </form>
					    </td>
					</tr>
				@endforeach
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

		        <form action="{{ url('/') }}" method="POST" class="form-horizontal">
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
		                <div class="col-sm-offset-3 col-sm-6">
		                    <button type="submit" class="btn btn-default">
		                        <i class="fa fa-plus"></i> Add Record
		                    </button>
		                </div>
		            </div>
		        </form>
		    </div>
	    @endsection
	</body>
</html>

