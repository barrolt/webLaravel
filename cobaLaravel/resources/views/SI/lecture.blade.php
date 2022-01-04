@extends('mainOprec')
@section('title', 'Dosen')

@section('container')
<div class="container">
	<br>
	<div class="row">
		<h2> Daftar dosen angkatan </h2>
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
		<div class="modal fade" id="formModalDosen" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Form Tambah Dosen</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>

			<form  action="/lecture" method="post">
			{{ csrf_field() }}
		      <div class="modal-body">
			<div class="form-group">
			    <label for="id_dosen">ID Dosen</label>
			    <input type="text" class="form-control" id="id_dosen" 
				placeholder="nim..." name="id_dosen" required>
			  </div>
			<div class="form-group">
			    <label for="nidn">NIDN</label>
			    <input type="text" class="form-control" id="nidn" 
				placeholder="nama..." name="nidn" required>
			  </div>

			<div class="form-group">
			    <label for="nama">Nama</label>
			    <input type="text" class="form-control" id="nama" 
				placeholder="nama..." name="nama" required>
			  </div>
			<div class="form-group">
			    <label for="gender">Gender</label>
			    <input type="text" class="form-control" id="gender" 
				placeholder="gender..." name="gender" required>
			  </div>
			<div class="form-group">
			    <label for="program_studi">Program Studi</label>
			    <input type="text" class="form-control" id="program_studi" 
				placeholder="prodi..." name="program_studi" required>
			  </div>

			<div class="form-group">
			    <label for="alamat">Alamat</label>
			    <input type="text" class="form-control " id="alamat"
				placeholder="alamat" name="alamat" required>
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

		<p class="p-2"> <a href="/lecture" type="button" class = "btn btn-success" data-toggle="modal" data-target="#formModalDosen">Tambah Dosen</a>
		</p>

	</div>

	<div class="container" id="kontenDosen">
		<table class="table table-striped display" style="width:100%"  id="table-dosen">
		  <thead>
		    <tr>
		      <th scope="col">ID Dosen</th>
		      <th scope="col">NIDN</th>
		      <th scope="col">Nama</th>
		      <th scope="col">Gender</th>
		      <th scope="col">Prodi</th>
		      <th scope="col">Alamat</th>
		      <th scope="col">Email</th>
		      <th scope="col">Action</th>
		    </tr>
		  </thead>
		  <tbody>
		@foreach ($lecture as $lec)
		    <tr>
		      <th scope="row">{{ $lec->id_dosen }}</th>
		      <td>{{ $lec->nidn }}</td>
		      <td>{{ $lec->nama }}</td>
		      <td>{{ $lec->gender }}</td>
		      <td>{{ $lec->program_studi }}</td>
		      <td>{{ $lec->alamat }}</td>
		      <td>{{ $lec->email }}</td>
		      <td><form action="/lecture/{{ $lec->id }}" class="d-inline"  method="post" >
				{{ csrf_field() }}
				{{ method_field('DELETE') }}
				<button type="submit" class="btn btn-danger d-inline">Delete</button>
			  </form>
				<a href="/lecture/{{ $lec->id }}/edit" class="btn btn-primary"  >Edit</a>
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
<script>
	$('#editModal').on('show.bs.modal', function (event) {
	
	  var button = $(event.relatedTarget) 
	  var nim = button.data('nim') 
	  var nama = button.data('nama')
	  var cat_id = button.data('catid')


	  var modal = $(this)
	  modal.find('.modal-body #nim').val(nim);
	  modal.find('.modal-body #nama').val(nama);
	  modal.find('.modal-body #cat_id').val(cat_id);
	})
</script>

@endsection

@section('script')
<script type="text/javascript">
	$(document).ready(function(){
		var t =$("#table-dosen").DataTable({
			"columnDefs" :[
				{ width: "20%", targets: [2,4]},
				{ className: "text-center", targets: [1,3]}
			]

		});

	
	});

</script>
@endsection




