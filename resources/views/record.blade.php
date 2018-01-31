<html>
<body>
	@foreach($record as $records)
	    <p class="title">{{$records->title}}</p>
	    <p class="author">{{$records->author}}</p>
	    <p class="album">{{$records->album}}</p>
	    <p class="genre">{{$records->genre}}</p>
	    <p class="time">{{$records->time}}</p>
	@endforeach
</body>
</html>

