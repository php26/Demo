@extends('layouts.master')
@section('content')
<form action="{{route('cats.update', $cat->id)}}" method="POST">
	{{ csrf_field()}}
	<input type="hidden" name="_method" value="PUT">
	<label for="name"> Name</label>
	<input type="text" name="name" value="{{$cat->name}}">
	<label for="breedid">Breed ID</label>
	<input type="text" name="breed_id" value="{{$cat->breed_id}}">
	<button type="submit"> Update</button>

</form>


@endsection