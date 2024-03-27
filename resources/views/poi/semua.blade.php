@include('header', ['alias' => 'Daftar PoI'])


<div class="container">
	<div class="row">
		

		<h1>Daftar Poi</h1>

		@if ($message = Session::get('success'))
		<div class="alert alert-success">
			<p>{{ $message }}</p>
		</div>
		@endif


		<div class="row row-cols-1 row-cols-md-6 g-4">

			@foreach ($data as $poi)

			<div class="col">
				<div class="card h-100">
					<div class="mx-4 my-4"><img src="/img/camera_photo.png" alt="" class="card-img-top"></div>
					<div class="card-body">
						<h5 class="card-title">{{ $poi->judul }}</h5>
						<a href="/poi/detail/{{ $poi->id }}" class="card-link">Detail</a>
					</div>
					<div class="card-footer">
						<small class="text-muted"><a href="/poi/kategori/{{ $poi->kategori_id }}"> {{ $poi->kategori->nama }}</a></small>
						<small class="text-muted">{{ $poi->area }}</small>
					</div>
				</div>
			</div>

			@endforeach
		</div>

	</div>
</div>


@include('footer')