@extends ('includes.main')

@section ('title', "Artikel")

@section ('container')

<div class="container">
 <div class="row" style="margin-top: 5%;">
  <div class="col-md-9">
	@foreach ($blog as $b)
	 <div class="post-item">
	  <div class="post-inner">
	   <div class="post-head clearfix">
	    <div class="col-md-4">
		<a href=""><img src="{{ asset('image/'. $b->image ) }}" style="width: 100%; height: auto;" ></a>
	    </div>
	    <div class="col-sm-8">
	     <div class="detail">
		<h3 class="handle"><a href="/blog/{{ $b->slug }}" style="color: #808080;">{{ $b->title }}</a></h3>
	     </div>
	     <div class="post-meta">
		<div>
		 <span>{{ date('j F Y', strtotime( $b->created_at )) }} </span> |
		 <span>by </span>
		 <span><a href="" style="color: black;" >{{ $b->name }}</span>
		</div>
		<div class="" style="margin-top: 3%; color: #808080;">
			{!!str_limit( $b->content, 150)!!}
		</div>

	    </div>
	   </div>
	  </div>
	 </div>
	</div>
	@endforeach

  </div>
  <div class="col-md-3">
	@include ('includes.side')
  </div>
   <div class="text-center mx-auto d-block">
	{{ $blog->links() }}
   </div>
 </div>
</div>

@endsection
