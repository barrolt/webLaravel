@extends ('includes.kita')
@section ('title', "Database")
@section ('content')

	<div class="container" id="konten">
	 <div class="row">
	  <div class="col-sm-9 float-left d-block"> 
		<form action="" method="POST" align="center">
			<input type="text" name="cari" placeholder="Masukkan Kata Kunci" autofocus>
			<button class="btn btn-secondary"name="submit">Cari</button>
			<br>
		</form>
	  </div>
	  <div class="col-sm-3 float-right d-block">
		<a href="/blog/create"><button class="btn btn-primary">NEW</button></a>
	  </div>
	 </div>
		<table class="table table-striped display" style="width:100%; margin-top: 2%;"  id="table-alumni">
		  <thead>
		    <tr>
		      <th scope="col">id</th>
		      <th scope="col">Name</th>
		      <th scope="col">Title</th>
		      <th scope="col">Update Image</th>
		    </tr>
		  </thead>
		  <tbody>
		@foreach ($blog as $p)
		    <tr>
		      <th scope="row">{{ $p->id }}</th>
		      <td>{{ $p->name }}</td>
		      <td>{{ $p->title }}</td>
		      <td><a href="/kuliah/{{ $p->id }}/editImage" type="submit" class="fa fa-edit"></a></td>
		      <td><a href="/blog/{{ $p->id }}/edit" type="submit" class="fa fa-edit"></a></td>
		      <td><a href="/kuliah/hapus/{{ $p->id }}">
				<!--<form action="/blog/{{ $p->id }}" method="post">
				{{ csrf_field() }}
				{{ method_field('DELETE') }} </form>-->
				<i type="submit" class="fa fa-trash"></i></a>
			  </td>
		    </tr>
<!--<div>
<div class="modal fade" id="{{ $p->id }}-delete">
	<div class="modal-dialog">
	 <div class="modal-content">
	  <div class="modal-header">
		<h4 class="modal-title"> Want to delete "<b>{{ $p->name }} </b>" ?</h4>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close"> 
			<span aria-hidden="true">&times; </span></button>
	   </div>
	  <div class="modal-body">
		<form action="{{ action('projectController@destroy', $p->id) }}" method="post">
		{{ csrf_field() }}
		{{ method_field('DELETE') }}
		<button type="submit" class="btn btn-danger btn-block"> YES </button>
		</form>
	  </div>
	 </div>
	</div>
</div>
</div>-->
		@endforeach

		<div class="text-center mx-auto d-block">
			{{ $blog->links() }}
		</div>

		  </tbody>
		</table>
	</div>
	
@endsection
