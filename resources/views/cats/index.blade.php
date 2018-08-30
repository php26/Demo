@extends('layouts.master')
@section('content')
<h1>List Cat</h1>
<h2><a href="/cats/create">Create cat</a></h2>

<table style="width:100%">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Breed_id</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
@foreach($cats as $cat)
    <tr>
        <td>{{$cat->id}}</td>
        <td id="{{$cat->id}}"><a href="/cats/{{$cat->id}}">{{$cat->name}}</a></td>
        <td>{{$cat->breed_id}}</td>
        <td><a href="/cats/{{$cat->id}}/edit"> Edit</td>
        <td>
            <form action="/cats/{{$cat->id}}" method="POST">
            <input type="hidden" name="_method" value="DELETE">
            {{ csrf_field()}}
            <button type="submit">Delete</button>

            </form>

        </td>
    </tr>
@endforeach
</table>

@endsection