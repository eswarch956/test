@foreach($blogs as $blog)
<h1> {{ $blog->title }} </h1>
<p>{{ $blog->description}}</p>
<hr/>
@endforeach