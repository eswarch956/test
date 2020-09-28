@extends('layouts')
@section('content')
<h1>Dashboard</h1>
@if( auth()->check() )
                <li class="nav-item">
                    <a class="nav-link" href="#">{{ auth()->user()->name }}</a>
                </li>
@endif
<a href="/logout">logout</a>
@endsection