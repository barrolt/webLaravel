@extends ('includes.main')
@section ('title', "$blog->title")
@section ('container')
<div>
 <div class="container">
	<div class="row">
	 <div class="col-md-9">
		<div class="container">
			<p>{{ $blog->title }}</p>
			<p>{{ $blog->content }}</p>
		</div>
		 <hr>
		 <h4>Comments</h4>
		<div class="panel with-nav-tabs panel-default">
		 <div class="panel-heading" style="border-bottom: none;">
		  <ul class="nav nav-tabs">
			<li class="active"><a href="#tab1" data-toggle="tab">All Comments</a></li>
			<li><a href="#tab2" data-toggle="tab">Add Comment</a></li>
			<li><a href="#tab3" data-toggle="tab">Disqus</a></li>
		  </ul>
		 </div>

		 <div class="panel-body">
		  <div class="tab-content">
		   <div class="tab-pane  in active" id="tab1">

		@if( $blog->comments->isEmpty() )
		   <div class="text-center">No Comment</div>
		@else		   
		   @foreach ($blog->comments as $com)
		    <div class="post-item">
		     <div class="post-inner">
		      <div class="post-head clearfix">

			<div class="col-md-2">
			 <img src="//a.disquscdn.com/1504815928/images/noavatar92.png"
				style="border-radius: 120px;">
			</div>
			<div class="col-md-10">
			 <h4>{{ $com->comment }}</h4>
			 <hr>
			 <p>by | anonim</p>
			 <div class="pull-right">
			  <small>{{ date('j F Y, h:ia', strtotime($com->updated_at)) }}</small>
			 </div>
			</div>

		     </div>
		    </div>
		   </div>
		   @endforeach
		   @endif
		  </div>
		
		  <div class="tab-pane " id="tab2">

			<form action="{{ route('comment.store', $blog->id) }}" method="post">
				{{ csrf_field() }}
			 <label>Comments</label>
			  <div class="form-group">
			   <textarea type="text" name="comment" class="form-control" placeholder="add comment..."></textarea>
			  </div>
		
			<button class="btn btn-success" type="submit">Submit</button>
			</form>

		  </div>

		  <div class="tab-pane" id="tab3">
				<p style="color: #2a2a2a;" >disqus</p>
aaa
		  </div>

		 </div>
		</div>
</div>
	 </div>

	 <div class="col-md-3">
		@include ('includes.side')
	 </div>
	</div>
 </div>
<div>	
</div>	
@endsection
