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
	</body>
</html>

