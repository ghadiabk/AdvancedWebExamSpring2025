@extends('layouts.app')

@section('content')

<form action="">
    <label for="">name</label>
    <input type="text">
    <label for="">description</label>
    <input type="text">
</form>
<div>
<ul >
@foreach($courses as $course)
                        <li>{{ $course->name }} <button>delete</button></li>
                    @endforeach
</ul>
</div>
@endsection