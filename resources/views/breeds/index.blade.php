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
<script type="text/javascript">
	$(document).ready(function(){

		var token =$('meta[name="csrf-token"]').attr('content'); // lấy csrf token ở trên thẻ meta của header
		$("a").on('click', function(e){ //tạo sự kiện lúc user click vào tên breed
			e.preventDefault();  // ngăn thực hiện chuyển trang lúc click vào link
			var breed_id = $(this).attr('id');  //lấy id của breed mình click vào
			$.ajax({
				url: 'api/breeds/'+breed_id+'/cats',  // url của api lấy list cat của 1 breed
				type: 'GET', //method GET
				dataType: "json",
				success: function(result) {  //nếu gọi ajax thành công thì trả về data ỏ đây, result chứa data trả về
					console.log(result);
					html='<h1>List Cats By Breed ID. '+breed_id+'</h1>'
							+'<table style="width:100%">'
								+'<tr>'
						        +'<th>ID</th>'
						        +'<th>Name</th>'
						        +'<th>Breed ID</th>'
						        +'<th>Edit</th>'
						        +'<th>Delete</th>'
						    	+'</tr>';
					result.forEach(cat => { //foreach từng cat để tạo html list cat
						html+= '<tr>'
							        +'<td>'+cat.id+'</td>'
							        +'<td>'+cat.name+'</td>'
							        +'<td>'+cat.breed_id+'</td>'
							        +'<td><a href="#"> Edit</td>'
							        +'<td>'
							        +'<form action="#" method="POST">'
								        +'<input type="hidden" name="_method" value="DELETE">'
								        +'<input type="hidden" name="_token" value="'+token+'">'
								        +'<input type="hidden" name="_method" value="DELETE">'
								        +'<button type="submit">Delete</button>'
							        +'</form>'
        							+'</td>'
    							+'</tr>';

					});
					$('#list-cat').append(html); //nhúng đoạn html mới tạo ra vào div list-cat

				},
				error: function(error) {
				  alert(error);
				}

			})
		})

	})

</script>
@endsection