@extends('admin.template.base')

	@section('content')
	
	<div class="row">
		<div class="col-md-12 mt-3">
			<div class="card">
				<div class="card-body">
					Kategori
					<a href="{{url('kategori/create')}}" class="btn btn-sm btn-primary" style="float: right"><i class="fa fa-plus"></i> Buat Kategori</a>
				</div>
				<div class="card-body mt-3">
					<table class="table bg-warning">
						<thead>
							<th>No</th>
							<th>Nama</th>
							<th>Aksi</th>
						</thead>
						<tbody>
							@foreach($list_kategori as $kategori)
							<tr>
								<td>{{$loop->iteration}}</td>
								<td>{{$kategori->nama}}</td>
									<td width="200px">
									<div class="row">
									@include('utils.delete', ['url' => url('kategori', $kategori->id)]) 
									</div>

								</td>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>


			</div>
		</div>
	</div>
	@endsection