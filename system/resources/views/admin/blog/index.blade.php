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
							<th>Rilis</th>
							<th>Aksi</th>
						</thead>
						<tbody>
							@foreach($list_blog as $blog)
							<tr>
								<td>{{$loop->iteration}}</td>
								<td>{{$blog->judul}}</td>
								<td>{{$blog->kategori}}</td>
								<td>{{$blog->created_at}}</td>
								<td width="200px">
									<div class="row">
									<a href="{{url('blog', $blog->id)}}/show" class="btn btn-sm col-md-2 btn-warning"> <i class="fa fa-info"></i></a>
									<a href="{{url('/blog', $blog->id)}}/edit" class="btn btn-sm col-md-2 btn-primary"> <i class="fa fa-edit"></i></a>
									@include('utils.delete', ['url' => url('blog', $blog->id)]) 
									</div>

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