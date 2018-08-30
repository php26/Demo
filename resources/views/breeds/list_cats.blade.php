@extends('layouts.master')
@section('content')
<h1>List Cats By Breed ID. {{ $breed_id }}</h1>

<table style="width:100%">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Breed ID</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
@foreach($cats as $cat)
    <tr>
        <td>{{$cat->id}}</td>
        <td>{{$cat->name}}</td>
        <td>{{$cat->breed_id}}</td>
        <td><a href="#"> Edit</td>
        <td>
        <form action="#" method="POST">
        <input type="hidden" name="_method" value="DELETE">
        {{csrf_field()}}
            <button type="submit">Delete</button>
        </form>
        </td>
    </tr>
@endforeach
</table>






@endsection