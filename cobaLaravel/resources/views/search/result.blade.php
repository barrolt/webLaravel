@extends ('includes.main')

@section ('yield', "Search")

@section ('container')

@if(count($blog) >0)
<div class="container">
	<div class="text-center"><h1>Hasil</h1></div>

	@foreach ($blog->all() as $b)
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
	@endforeach

</div>

@else
	<div class="container" style="margin-bottom: 22%;">
	 <div class="post-item">
	  <div class="post-inner">
		<div class="text-center"><b>Result not found</b></div>
	  </div>
	 </div>
	</div>

@endif

@endsection
