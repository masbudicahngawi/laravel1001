@include('header')

<div class="container text-center mt-3 pt-3">

	<p>Istilah <b><i><?=$alias;?></i></b> merujuk pada wilayah yang terdiri dari kota/kabupaten berikut :</p>

	<ul class="list-group">
		<li class="list-group-item"><div class="alert alert-info d-inline-block">Surakarta</div></li>
		<li class="list-group-item"><div class="alert alert-info d-inline-block">Sragen</div></li>
		<li class="list-group-item"><div class="alert alert-info d-inline-block">Karanganyar</div></li>
		<li class="list-group-item"><div class="alert alert-info d-inline-block">Sukoharjo</div></li>
		<li class="list-group-item"><div class="alert alert-info d-inline-block">Boyolali</div></li>
		<li class="list-group-item"><div class="alert alert-info d-inline-block">Klaten</div></li>
		<li class="list-group-item"><div class="alert alert-info d-inline-block">Wonogiri</div></li>
	</ul>

	<p>Kuliner yang terkenal di <b><i><?=$alias;?></i></b> antara lain : </p>

	<ul class="list-group">
		@foreach ($kuliner as $item)
		<li class='list-group-item'>{{$item}}</li>
		@endforeach
	</ul>

	<script src="/js/bootstrap.bundle.min" type="text/javascript"></script>


	@include('footer')