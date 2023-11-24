<form action="{{ route('manajemen_data_kost.store') }}" method="POST">
    <h2><a href="{{ route('manajemen_data_kost.index') }}">Lihat Manajemen Data Kost</a></h2>
    @csrf

    <div>
        <label for="name">Data Kost:</label>
        <input type="text" name="name" value="{{ old('name') }}" />
        <br>
        @error('name')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="nama_kamar">Nama Kamar:</label>
        <textarea name="nama_kamar">{{ old('nama_kamar') }}</textarea>
        <br>
        @error('nama_kamar')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="Gambar">Gambar Kamar:</label>
        <textarea name="Gambar">{{ old('Gambar') }}</textarea>
        <br>
        @error('Gambar')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="ukuran_kamar">Ukuran Kamar:</label>
        <textarea name="ukuran_kamar">{{ old('ukuran_kamar') }}</textarea>
        <br>
        @error('ukuran_kamar')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="description">Deskripsi:</label>
        <textarea name="description">{{ old('description') }}</textarea>
        <br>
        @error('description')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="harga_kamar">Harga Kamar:</label>
        <input type="number" name="harga_kamar" value="{{ old('harga_kamar') }}" />
        <br>
        @error('harga_kamar')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <div>
        <input type="submit" value="Simpan">
    </div>
    <br>
</form>

