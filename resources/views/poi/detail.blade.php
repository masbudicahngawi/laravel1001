@include('header', ['alias' => 'Detail PoI'])

<div class="row d-flex justify-content-center bg-image" style="background-image: url('/img/bg.jpg'); background-size: cover;">
	<div class="col-md-6 my-5">
		<div class="card">
			<div class="card-body">
				<form>
					@csrf
					<h5 class="card-title"  id="tag_judul" id_data="" contenteditable="true">{{ $poi->judul }}</h5>

					<div class="mx-2 my-2"><img src="/img/painting.jpg" alt="" class="card-img-top"></div>
					<div>
					{{-- <video muted=""  poster="bg_white.png" height="400" width="100%" controls>
						<source src="/img/VID_20220403_152329.mp4" type="video/mp4">
						</video>	
					</div> --}}
					<input type="hidden" id="idnya" value="{{ $idnya }}">
					<p class="card-text" id="tag_deskripsi" id_data="" contenteditable="true">{{ $poi->deskripsi }}</p>
					<div class="row" id="div_add_tag">
						<div class="col-10">
							<input type="text" class="form-control input-sm rounded-0" id="input_tag" name="input_tag" value=""/>
						</div>
						<div class="col-2">
							<button id="tombol_simpan_tag" class="btn btn-primary btn-sm form-control rounded-0">Save Tags</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

@include('footer')