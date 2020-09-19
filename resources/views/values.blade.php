<h1> {{ $val }}</h1>
<h2> {{ $val }} </h2>

@if($conditional_response)
<h1>this is true</h1>
@else
<h2>this is false</h2>
@endif

@foreach($arr as $ele)
    <h1>{{ $ele }}</h1>
@endforeach