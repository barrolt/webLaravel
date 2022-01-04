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
		<form method="post" action="{{ action('oprec2sController@update', $alumni->id) }}">
		
		{{ csrf_field() }}
		{{ method_field('PUT') }} 

			<div class="form-group">
			    <label for="nim">NIM</label>
			    <input type="text" class="form-control" id="nim" 
				name="nim" placeholder="nim..."  value="{{ $alumni->nim  }}" required >
			  </div>
			<div class="form-group">
			    <label for="nama">Nama</label>
			    <input type="text" class="form-control" id="nama" 
				name="nama" placeholder="nama..." value="{{ $alumni->nama  }}" required>
			  </div>
			<div class="form-group">
			    <label for="angkatan">Angkatan</label>
			    <input type="number" step=1 class="form-control " id="angkatan" 
				name="angkatan" placeholder="angkatan..." value="{{ $alumni->angkatan  }}" required>
			  </div>
			<div class="form-group">
			    <label for="tempat_lahir">Tempat Lahir</label>
			    <input type="text" class="form-control " id="tempat_lahir"
				name="tempat_lahir" placeholder="tempat lahir..." value="{{ $alumni->tempat_lahir }}" >
			  </div>
			<div class="form-group">
			    <label for="tanggal_lahir">Tanggal Lahir</label>
			    <input type="date" class="form-control" id="tanggal_lahir"
				name="tanggal_lahir" placeholder="tanggal lahir..." value="{{ $alumni->tanggal_lahir }}" >
			  </div>
			<div class="form-group">
			    <label for="email">Email</label>
			    <input type="email" class="form-control" id="email"
				name="email" placeholder="halo@...." value="{{ $alumni->email  }}" >
			  </div>
			<div class="form-group">
			    <label for="prodi_id">Jurusan</label>
			    <select class="form-control select2" style="width:100%;"
				name="prodi_id" id="prodi_id">
				<option value="{{ $alumni->prodi_id }}">{{ $alumni->Prodi->prodi }}</option>
				@foreach ( $pro as $p)
				<option value="{{ $p->detail_id }}">{{ $p->prodi }}</option>
				@endforeach
			    </select>
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


