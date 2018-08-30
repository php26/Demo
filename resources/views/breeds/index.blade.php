@extends('layouts.master')
@section('content')
<h1>List Breeds</h1>
<h2><a href="#">Create breed</a></h2>

<table style="width:100%">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Delete</th>
    </tr>
@foreach($breeds as $breed)
    <tr>
        <td>{{$breed->id}}</td>
        <td>
        	<a href="/breeds/{{$breed->id}}/cats" id="{{$breed->id}}"> {{$breed->name}}</a>
        </td>
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


<div id="list-cat"></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
@endsection