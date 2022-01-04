@extends ('includes.kita')
@section ('title', "EDIT")
@section ('content')

<div class="container">
	<br>
	<div class="row">
		<h2> Form Edit </h2>
	</div>
	<hr>	
	 
   <br> 

	<div class = "container " align="left">
	 <div class= "col-sm-8">
		<form method="post" action="/blog/{{ $blog->id }}" enctype="multipart/form-data">
		
		{{ csrf_field() }}
		{{ method_field('PUT') }} 

			<div class="form-group">
			    <label for="nidn">Name</label>
			    <input type="text" class="form-control" id="name" 
				name="name" placeholder="name..."  value="{{ $blog->name  }}" required > 
			<div class="form-group">
			    <label for="nama">Title</label>
			    <input type="text" class="form-control" id="title" 
				name="title" placeholder="title..." value="{{ $blog->title  }}" required>
			  </div>
			<div class="form-group">
			    <label for="image">Image</label>
				<img src="{{ asset('image/'. $blog->image) }}" height="10%" width="50%" alt="" srcset="">
			 </div>
			<div class="form-group">
			    <label for="gender">Content</label>
			    <textarea  class="form-control " id="content" name="content" 
				placeholder="content..." cols="20" rows="4" required>{{ $blog->content }}</textarea>
			  </div>
	
			 </div>
			<div>
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

		<script>
                        CKEDITOR.replace( 'content' );
                </script>

@endsection
