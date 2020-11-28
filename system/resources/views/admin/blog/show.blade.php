@extends('admin.template.base')

	@section('content')

	<div class="container">
	<div class="row">
		<div class="col-md-12 mt-3">
			<div class="card">
				<div class="card-header">
					Detail Blog <hr>
				</div>
				<div class="card-body">
					<h3>{{$blog->judul}}</h3>
					<hr>
					<p>
				
					</p>
					<p>
						{!! nl2br($blog->konten) !!}
					</p>
				</div>
			</div>	
		</div>
	</div>
</div>


	@endsection