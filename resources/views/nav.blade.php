<nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Fifth navbar example">
	<div class="container-fluid">
		<a class="navbar-brand" href="#">The App</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarsExample05">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="{{ route('poi.semua') }}">Home</a>
				</li>
				{{-- <li class="nav-item">
					<a class="nav-link" href="#">Link</a>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
				</li> --}}
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-bs-toggle="dropdown" aria-expanded="false">{{ auth()->user()->name }}</a>
					<ul class="dropdown-menu" aria-labelledby="dropdown05">
						<a class="dropdown-item" href="{{ route('poi.tambah') }}">Tambah Data</a>
						<li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
					</ul>
				</li>
			</ul>
			{{-- <form>
				<input class="form-control" type="text" placeholder="Search" aria-label="Search">
			</form> --}}
		</div>
	</div>
</nav>