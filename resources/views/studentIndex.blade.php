@extends('layouts.app')

@section('content')

<input type="text" id="search" placeholder="search">

<ul id="result">
@foreach($students as $student)
                        <li>{{ $student->name }}</li>
                    @endforeach
</ul>





<script>
$(document).ready(function() {
 function loadData(searchQuery = '') {
 $.ajax({
 url: '/StudentController',
 method: 'GET',
 data: { _token: "{{ csrf_token() }}",
    search: searchQuery },
 success: function(response) {
 $('#results').empty();
 if (response.length > 0) {
 response.forEach(item => {
 
$('#results').append(`<li>${student.name}</li>`);
 });
 } else {
 $('#results').append('<li>No items found.</li>');}
 }
 });
 }
 // Initial load
 loadData();
 // Load data on search input
 $('#search').on('input', function() {
 const searchQuery = $(this).val();
 loadData(searchQuery);
 });
});
</script>
@endsection