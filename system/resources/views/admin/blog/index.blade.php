@extends('admin.template.base')

	@section('content')
	
	<div class="row">
		<div class="col-md-12 mt-3">
			<div class="card">
				<div class="card-body">
					Blog
					<a href="{{url('blog/create')}}" class="btn btn-sm btn-primary" style="float: right"><i class="fa fa-plus"></i> Buat Blog</a>
				</div>
				<div class="card-body mt-3">
					<table class="table bg-warning">
						<thead>
							<th>No</th>
							<th>Judul</th>
							<th>Kategori</th>
							<th>Aksi</th>
						</thead>
						<tbody>
							@foreach($list_blog as $blog)
							<tr>
								<td>{{$loop->iteration}}</td>
								<td>{{$blog->judul}}</td>
								<td>{{$blog->kategori}}</td>
								<td width="200px">
									<a href="{{url('blog', $blog->id)}}" class="btn btn-warning"> <i class="fa fa-info"></i></a>
									<a href="" class="btn btn-primary"> <i class="fa fa-edit"></i></a>
									<a href="" class="btn btn-danger"> <i class="fa fa-trash"></i></a>

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