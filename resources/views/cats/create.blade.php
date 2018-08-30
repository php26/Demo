@extends('layouts.master')
@section('content')
<form action="{{route('cats.store')}}" method="POST">
	{{ csrf_field()}}
	<label for="name"> Name</label>
	<input type="text" name="name">
	<label for="breedid">Breed ID</label>
	<input type="text" name="breed_id">
	<button type="submit"> Create</button>

</form>

@endsection