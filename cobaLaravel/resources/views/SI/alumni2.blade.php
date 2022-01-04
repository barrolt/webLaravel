@extends('mainOprec')
@section('title', 'Alumni')

@section('container')
<div class="container">
	<br>
	<div class="row">
		<h2> Daftar alumni angkatan 2018 </h2>
	</div>
	<hr>	
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif  
   <br> 
	<!-- Modal -->
		<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Form Daftar Alumni</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>

			<form  action="{{ action('oprec2sController@store')  }}" method="post">
			{{ csrf_field() }}
		      <div class="modal-body">
			<div class="form-group">
			    <label for="nim">NIM</label>
			    <input type="text" class="form-control" id="nim" 
				placeholder="nim..." name="nim" required>
			  </div>
			<div class="form-group">
			    <label for="nama">Nama</label>
			    <input type="text" class="form-control" id="nama" 
				placeholder="nama..." name="nama" required>
			  </div>
			<div class="form-group">
			    <label for="angkatan">Angkatan</label>
			    <input type="number" step=1 class="form-control " id="angkatan" 
				placeholder="angkatan..." name="angkatan" required>
			  </div>
			<div class="form-group">
			    <label for="tempat_lahir">Tempat Lahir</label>
			    <input type="text" class="form-control " id="tempat_lahir"
				placeholder="tempat lahir..." name="tempat_lahir" required>
			  </div>
			<div class="form-group">
			    <label for="tanggal_lahir">Tanggal Lahir</label>
			    <input type="date" class="form-control" id="tanggal_lahir"
				placeholder="tanggal lahir..." name="tanggal_lahir" required>
			  </div>
			<div class="form-group">
			    <label for="email">Email</label>
			    <input type="email" class="form-control" id="email"
				placeholder="halo@...." name="email" required>
			  </div>

			 </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
		        <button type="submit" class="btn btn-primary">Simpan</button>
		      </div>
		    </form>
		    </div>
		  </div>
		</div>
 
	<div class = "row">
		<div>
		@if (session('success'))
			<div class="alert alert-success">
				{{ session('success') }}
			</div>
			@endif
			</div>
		<br>
		<!--@if (count($errors) > 0)
		<div class="alert alert-danger">
		 <ul>
		@foreach ($errors->all() as $error)
		 <li> {{ $error }} </li>
		 @endforeach
		 </ul>
		</div>
		@endif

		@if (\Session::has('success'))
			<div class="alert alert-success">
				<p> {{ \Session::get('success') }}</p>
			</div>
		@endif-->

		<p class="p-2"> <a href="/alumni1/create" type="button" class = "btn btn-success" data-toggle="modal" data-target="#formModal">Tambah Alumni</a>
		</p>

	</div>

	<div class="container" id="konten">
		<table class="table table-striped display" style="width:100%"  id="table-alumni">
		  <thead>
		    <tr>
		      <th scope="col">id</th>
		      <th scope="col">NIM</th>
		      <th scope="col">Nama</th>
		      <th scope="col">Angkatan</th>
		      <th scope="col">TTL</th>
		      <th scope="col">Email</th>
		      <th scope="col">Action</th>
		    </tr>
		  </thead>
		  <tbody>
		@foreach ($alm as $al)
		    <tr>
		      <th scope="row">1</th>
		      <td>{{ $al->nim }}</td>
		      <td>{{ $al->nama }}</td>
		      <td>{{ $al->angkatan }}</td>
		      <td>{{ $al->tempat_lahir }} , {{ $al->tanggal_lahir }}</td>
		      <td>{{ $al->email }}</td>
		      <td><form action="{{ route('alumni.destroy', $al->id) }}" method="post" class="d-inline">
				{{ csrf_field() }}
				{{ method_field('DELETE') }}
				<button type="submit" class="btn btn-danger">Delete</button>
			  </form>
				<button type="submit" class="btn btn-primary">Edit</button>
		    </tr>
		@endforeach
	  
		  </tbody>
		</table>

<div class="modal fade" id="alertDelete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Alert!!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Apakah anda yakin ingin menghapus?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
        <button type="button" class="btn btn-danger">Ya</button>
      </div>
    </div>
  </div>
</div>

	</div>	 

	<br>
</div>
@endsection

@section('script')
<script type="text/javascript">
	$(document).ready(function(){
		var t =$("#table-alumni").DataTable({
			"columnDefs" :[
				{ width: "20%", targets: [2,4]},
				{ className: "text-center", targets: [1,3]}
			]

	});
	});

</script>
@endsection


