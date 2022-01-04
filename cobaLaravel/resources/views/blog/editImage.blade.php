@extends ('includes.kita')
@section ('title', "Update Img")
@section ('content')

<div class="container">
	<br>
	<div class="row">
		<h2> Form Update Image</h2>
	</div>
	<hr>	
	 
   <br> 

	<div class = "container " align="left">
	 <div class= "col-sm-8">
		<form method="post" action="/kuliah/{{ $blog->id }}/updateImg" enctype="multipart/form-data">
		
		{{ csrf_field() }}
		{{ method_field('PATCH') }} 

			<div>
			<div class="form-group">
			    <label for="nama">Title</label>
			    <input type="text" class="form-control" id="title" 
				name="title" placeholder="title..." value="{{ $blog->title  }}" disabled required>
			  </div>
			<div class="form-group">
			    <label for="image">Image</label>
			    <input type="file" class="form-control" id="image" value="{{ asset('image/', $blog->image) }}" name="image">
			  </div>
			<div class="form-group">
				<img src="{{ asset('image/'. $blog->image) }}" height="10%" width="50%" alt="" srcset="">
			 </div>
			</div>
	
		<button type="submit" name="submit" class="btn btn-primary btn-lg">Save</button>
		<br>
			</div>
</div>
		</form>
	 </div>
	</div>
	<br>

</div>
	
@endsection

@section('js')
@endsection

