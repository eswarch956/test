<!Doctype html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
    </head>
    <body>
        @foreach($blogs as $blog)
            <h1> {{ $blog->title }} </h1>
            <p>{{ $blog->description}}</p>
            <form action="{{ route('blog.destroy', $blog->id) }}" method="post">
                @csrf 
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Delete</button>  
            </form>

            <form action="{{ route('blog.edit', $blog->id)}}" method="GET">  
                  @csrf  
                  <button class="btn btn-info" type="submit">Edit</button>  
            </form>  
            <hr/>
        @endforeach

    </body>
</html>
