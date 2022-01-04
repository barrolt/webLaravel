@extends('mainOprec')
@section('title', 'Alumni')

@section('container')
<div class="container">
	<br>
	<div class="row">
		<h2> Form Edit </h2>
	</div>
	<hr>	
	 
   <br> 

	<div class = "container " align="left">
	 <div class= "col-sm-8">
		<form method="post" action="/lecture/{{ $lecture->id }}">
		
		{{ csrf_field() }}
		{{ method_field('PUT') }} 

			<div class="form-group">
			    <label for="id_dosen">ID Dosen</label>
			    <input type="text" class="form-control" id="id_dosen" 
				name="id_dosen" placeholder="id..."  value="{{ $lecture->id_dosen  }}" required >
			<div class="form-group">
			    <label for="nidn">NIDN</label>
			    <input type="text" class="form-control" id="nidn" 
				name="nidn" placeholder="nidn..."  value="{{ $lecture->nidn  }}" required >

			  </div>
			<div class="form-group">
			    <label for="nama">Nama</label>
			    <input type="text" class="form-control" id="nama" 
				name="nama" placeholder="nama..." value="{{ $lecture->nama  }}" required>
			  </div>
			<div class="form-group">
			    <label for="gender">Gender</label>
			    <input type="text"  class="form-control " id="gender" 
				name="gender" placeholder="gender..." value="{{ $lecture->gender  }}" required>
			  </div>
			<div class="form-group">
			    <label for="program_studi">Program Studi</label>
			    <input type="text" class="form-control " id="program_studi"
				name="program_studi" placeholder="prodi..." value="{{ $lecture->program_studi }}" >
			  </div>
			<div class="form-group">
			    <label for="alamat">Alamat</label>
			    <input type="text" class="form-control" id="alamat"
				name="alamat" placeholder="alamat..." value="{{ $lecture->alamat }}" >
			  </div>
			<div class="form-group">
			    <label for="email">Email</label>
			    <input type="email" class="form-control" id="email"
				name="email" placeholder="@...." value="{{ $lecture->email  }}" >
			  </div>

			 </div>

		<button type="submit" class="btn btn-primary btn-lg">Update</button>
		<br>
		</form>
	 </div>
	</div>
	<br>

</div>
@endsection

@section('script')
@endsection


