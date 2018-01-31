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
		</style>
	</head>
	<body>
		<table>
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
				</tr>
			@endforeach
		</table>

		<div class="panel-body">
	        <!-- Display Validation Errors -->
	        @include('common.errors')

	        <!-- New Task Form -->
	        <form action="{{ url('') }}" method="POST" class="form-horizontal">
	            {{ csrf_field() }}

	            <!-- Task Name -->
	            <div class="form-group">
	                <label class="col-sm-3 control-label">Task</label>

	                <div class="col-sm-6">
	                    <input type="text" name="name" id="task-name" class="form-control">
	                </div>
	            </div>

	            <!-- Add Task Button -->
	            <div class="form-group">
	                <div class="col-sm-offset-3 col-sm-6">
	                    <button type="submit" class="btn btn-default">
	                        <i class="fa fa-plus"></i> Add Task
	                    </button>
	                </div>
	            </div>
	        </form>
	    </div>



	</body>
</html>

