@extends('admin.template.base')

	@section('content')

		<div class="row ">
		<div class="col-md-12 mt-2">
			<div class="card">
				<div class="card-header">
					Buat Blog <hr>
				</div>
				<div class="card-body">
					<form action="{{url('blog')}}" method="post">
						@csrf
						<div class="form-group">
							<label for="" class="control-label">Kategori</label>
							<select class="form-control" name="kategori">
								<option>-- Pilih Kategori --</option>
								@foreach($list_kategori as $kategori)
								<option>{{$kategori->nama}}</option>
								@endforeach
							</select>
						</div>
						<div class="form-group">
							<label for="" class="control-label">Judul</label>
							<input type="text" class="form-control" name="judul">
						</div>
						<div class="form-group">
							<label for="" class="control-label">Isi Blog</label>
							<textarea name="konten" class="form-control"></textarea>
						</div>
						<button class="btn btn-primary float-right"><i class="fa fa-save"></i> Simpan</button>
					</form>
				</div>
			</div>	
		</div>
	</div>



	@endsection