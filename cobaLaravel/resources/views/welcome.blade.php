@extends ('includes.main')

@section ('title', "Welcome")

@section ('container')
<div>
		<div class="container-fluid " style="background-color: #7b68ee"  >
		 <div class="container">
		   <div class="row">
		    <div class="col-sm-6 d-block" style="margin-top:10%" >
 		     <div class="slideshow-container">

		<div class="mySlides ">
		  <div class="numberText">1 / 3</div>
		  <img src="{{ asset('image/satu.jpeg') }}" style="width:100%">
		  <div class="text">Caption Text</div>
		</div>

		<div class="mySlides ">
		  <div class="numberText">2 / 3</div>
		  <img src="{{ asset('image/satu.jpeg') }}" style="width:100%">
		  <div class="text">Caption Two</div>
		</div>

		<div class="mySlides ">
		  <div class="numberText">3 / 3</div>
		  <img src="{{ asset('image/satu.jpeg') }}" style="width:100%">
		  <div class="text">Caption Three</div>
		</div>

		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		<a class="next" onclick="plusSlides(1)">&#10095;</a>

		    </div>
		<br>

		<div style="text-align:center">
		  <span class="dot" onclick="currentSlide(1)"></span> 
		  <span class="dot" onclick="currentSlide(2)"></span> 
		  <span class="dot" onclick="currentSlide(3)"></span> 
		</div>

	<script>
	var slideIndex = 1;
	showSlides(slideIndex);

	function plusSlides(n) {
	  showSlides(slideIndex += n);
	}

	function currentSlide(n) {
	  showSlides(slideIndex = n);
	}

	function showSlides(n) {
	  var i;
	  var slides = document.getElementsByClassName("mySlides");
	  var dots = document.getElementsByClassName("dot");
	  if (n > slides.length) {slideIndex = 1}    
	  if (n < 1) {slideIndex = slides.length}
	  for (i = 0; i < slides.length; i++) {
	      slides[i].style.display = "none";  
	  }
	  for (i = 0; i < dots.length; i++) {
	      dots[i].className = dots[i].className.replace(" active", "");
	  }
	  slides[slideIndex-1].style.display = "block";  
	  dots[slideIndex-1].className += " active";
	}
	</script>
	
		</div>
			
	      <div class="col-sm-6" style="margin-top:30px">
	       <h2>TITLE</h2>
		<div class="fakeimg">fake image</div>
		 <p> teks teks
			teks tekss </p>
		 <br>
		 <h2> TITLE</h2>
		 <h5>title descirption, 27 dec</h5>
		 
	        </div>
	  </div>
	 </div>
	<br>
	</div>
	<br>
	</div>

</div>
	<div class="container-fluid">
	 <div class="container" >
	  <div class="container"style="margin: 5% 0 12% 0" >

	   <div class= "container">
		<div class="row">
		 <div class="col-sm-12 teks3">
		  <span>Artikel</span>
		 </div>
		</div>
	   </div>


	   <div class="row " >
	
	      <div class="col-sm-3 float-left d-block box" style="margin:30px 10px 10px 10px" >
		<figure >
		   <img class="img-fluid img-col1 mx-auto d-block" src="{{asset('image/mahameru.jpg')}}" alt="Chania" width="300px"
			height="240px">
		</figure>
		<div class="container-fluid">
		 <div class="teks1">
		  <span> Zaidan Basman Abiyyu</span>
		 </div>
		   <p class="teks2">Mahasiswa Turki Asal Indonesia
		   </p>
		</div>

	     </div>
	     
	      <div class="col-sm-3 mx-auto d-block box" style="margin:30px 10px 10px 10px" >
		<figure>
		  <img class="img-fluid img-col1 mx-auto d-block" src="{{asset('image/mahameru.jpg')}}" alt="Chania" width="300px"

			height="240px">
		</figure>
		<div class="container-fluid">
		 <div class="teks1">
		  <span> Zaidan Basman Abiyyu</span>
		 </div>
		   <p class="teks2">Mahasiswa Turki Asal Indonesia
		   </p>
		</div>
	     </div>

	     
	      <div class="col-sm-3 float-right d-block box " style="margin:30px 10px 10px 10px" >
		<figure>
		 <img class="img-fluid img-col1 mx-auto d-block" src="{{asset('image/mahameru.jpg')}}" alt="Chania" width="300px"
			height="240px">
		</figure>
		<div class="container-fluid">
		 <div class="teks1">
		  <span> Zaidan Basman Abiyyu</span>
		 </div>
		   <p class="teks2">Mahasiswa Turki Asal Indonesia
		   </p>
		</div>

	     </div>

	    </div>
	   </div>
	 </div>
	</div>

	<div class="row">

	<div class="container-fluid">
	 <div class="container" >
	  <div class="container"style="margin: 5% 0 12% 0" >


	@foreach($blog as $p)
		<div class="item  col-xs-4 col-lg-4">
	            <div class="thumbnail as">
	               <img class="group list-group-image" src="{{ asset('image/'.$p->image) }}" alt="" />
	                <div class="caption">
	                    <div class="c_hr">
			    <h4 class="group inner list-group-item-heading"><a href="{{ route('blog.show', $p->slug) }}" 
				style="color: #808080;">{{ str_limit($p->title, 40) }}</a></h4>
				 <small> {{ date('j F Y, h:ia', strtotime($p->updated_at)) }}</small> | by 
				<a href="#" style="color: #808080;">{{ $p->name }}</a>

	                     </div>
	                    <p class="group inner list-group-item-text">{{ str_limit($p->content, 35) }}</p>
	                    <div class="row"></div>
	                </div>                
	            </div>
		</div>
	@endforeach

	   </div>
	  </div>
	 </div>	

		<!--<div class="text-center mx-auto d-block">
			{{ $blog->links() }}
        	 </div>-->

	</div>

@endsection
		 	 
