@extends ('includes.kita')
@section ('title', "Create")
@section ('content')


			<div class="container">
			 <div class="row">
			  <div class="col-sm-12 mx-auto d-block  tbl tbl1">
	 <div class="container tbl_edit1">
	<form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">

		{{ csrf_field() }}

		<table class="table table-borderless" align="center" 
			style="width: 90%"  border="1">
			<thead class="thead-dark">
			 <tr>
				<th colspan="3">New Post</th>
			 </tr>
			</thead>
			<tbody>
			 <tr>
				<td>Title</td>
				<td align="center">:</td>
				<td><input class="form-control" type="text" name="title" required></td>
			 </tr>
			 <tr>
				<td>Name</td>
				<td align="center">:</td>
				<td><input class="form-control" type="text" name="name" required></td>
			 </tr>
			 <tr>
				<td>Image</td>
				<td align="center">:</td>
				<td><input type="file" name="image" class="form-control"></td>
			 </tr>
			 <tr>
				<td>Content</td>
				<td align="center">:</td>
				<td><textarea class="form-control" name="content" cols="20" rows="4" required></textarea></td>
			 </tr>

			</tbody>
			<thead class="thead-dark">
			 <tr align="right">
				<th colspan="3">
					<button type="submit" class="btn btn-success" 
						name="submit">Save</button>
				</th>
			 </tr>
			</thead>
		</table>
	</form>
	 </div>

			   </div>
			  </div>
			 </div>


@endsection

@section('js')

		<script>
                        CKEDITOR.replace( 'content' );
                </script>
 @endsection

