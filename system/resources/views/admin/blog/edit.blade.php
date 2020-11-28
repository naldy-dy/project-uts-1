@extends('admin.template.base')

	@section('content')

		<div class="row ">
		<div class="col-md-12 mt-2">
			<div class="card">
				<div class="card-header">
					Buat Blog <hr>
				</div>
				<div class="card-body">
					<form action="{{url('blog', $blog->id)}}" method="post">
						@csrf
						@method("PUT")
						<div class="form-group">
							<label for="" class="control-label">Judul</label>
							<input type="text" class="form-control" name="judul" value="{{$blog->judul}}">
						</div>
						<div class="form-group">
							<label for="" class="control-label">Isi Blog</label>
							<textarea name="konten" value="" class="form-control">{{$blog->konten}}</textarea>
						</div>
						<button class="btn btn-primary float-right"><i class="fa fa-save"></i> Simpan</button>
					</form>
				</div>
			</div>	
		</div>
	</div>



	@endsection