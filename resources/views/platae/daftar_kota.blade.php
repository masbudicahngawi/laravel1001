@include('header')

<div class="container text-center mt-3 pt-3">

	<p><b><i>{{$alias}}</i></b> meliputi wilayah kabupaten/kota berikut : </p>

	<ul class="list-group">
		<li class="list-group-item">Kota Madiun</li>
		<li class="list-group-item">Madiun</li>
		<li class="list-group-item">Ngawi</li>
		<li class="list-group-item">Magetan</li>
		<li class="list-group-item">Ponorogo</li>
		<li class="list-group-item">Pacitan</li>
	</ul>

	<p>Kuliner yang terkenal di <b><i>{{$alias}}</i></b> antara lain : </p>

	<ul class="list-group">
		@foreach ($kuliner as $item)
		<li class="list-group-item">{{$item}}</li>
		@endforeach
	</ul>

</div>
<script src="/js/bootstrap.bundle.min" type="text/javascript"></script>

@include('footer')
