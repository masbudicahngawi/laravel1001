@include('header', ['alias' => 'Tambah PoI'])

<div class="container">
    <div class="row">
        <div class="col-lg-10">
            <h3>Tambah Data PoI</h3>
            <form method="POST" action="{{ route('poi.proses.tambah') }}" class="was-validated">
                @csrf
                <div class="mb-3">
                    <label for="judul" class="form-label">Judul</label>
                    <input type="judul" class="form-control rounded-0" id="judul" name="judul" value="{{ old('judul') }}" placeholder="Judul" required>
                    @error('judul')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Kategori</label>
                    <select class="form-select rounded-0" aria-label="Default select example" id="kategori_id" name="kategori_id"  required>
                        <option disabled>Pilih Kategori</option>

                        @foreach($data_kategori as $kategori)

                        <option value="{{ $kategori->id }}">{{ $kategori->nama }}</option>

                        @endforeach

                    </select>
                    @error('kategori')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea class="form-control rounded-0" id="deskripsi" name="deskripsi" value="{{ old('deskripsi') }}"
                    rows="3"  required></textarea>
                    @error('deskripsi')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="area" class="form-label">Area</label>
                    <select class="form-select rounded-0" aria-label="Default select example" id="area" name="area"  required>
                        <option disabled>--SOLO RAYA--</option>
                        <option value="Surakarta">Surakarta</option>
                        <option value="Sukoharjo">Sukoharjo</option>
                        <option value="Karanganyar">Karanganyar</option>
                        <option value="Boyolali">Boyolali</option>
                        <option value="Klaten">Klaten</option>
                        <option value="Sragen">Sragen</option>
                        <option value="Wonogiri">Wonogiri</option>
                        <option disabled>--PLAT AE--</option>
                        <option value="Kota Madiun">Kota Madiun</option>
                        <option value="Madiun">Madiun</option>
                        <option value="Ngawi">Ngawi</option>
                        <option value="Magetan">Magetan</option>
                        <option value="Ponorogo">Ponorogo</option>
                        <option value="Pacitan">Pacitan</option>
                    </select>
                    @error('area')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary rounded-0">Simpan</button>

            </form>

        </div>
    </div>
</div>

{{-- @include('footer') --}}