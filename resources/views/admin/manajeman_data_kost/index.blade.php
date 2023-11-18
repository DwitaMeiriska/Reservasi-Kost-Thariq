<link rel = "stylesheet" href="{{asset ('css/list.css') }}">

<h1>Manajemen Data Kost</h1>
<h2><a href="{{ route('manajemen_data_kost.create') }}">Tambah</a></h2>
@foreach ($manajemen_data_kost as $kost)
    <div class="manajemen_data_kost-item">
        <div>
            Nama Kamar  : {{ $kost->nama_kamar}}
            <br>
            Gambar : {{ $kost->image}}
            <br>
            Ukuran Kamar  : {{ $kost->ukuran_kamar}}
            <br>
            Deskripsi : {{ $kost->description }}
            <br>
            Harga Kamar: {{ $kost->harga_kamar }}
        </div>
        <div>
            <a href="{{ route('manajemen_data_kost.show', $kost->id) }}">Lihat</a>
            <a href="{{ route('manajemen_data_kost.edit', $kost->id) }}">Edit</a>

            <form action="{{ route('manajemen_data_kost.destroy', $kost->id) }}" method="post" class="delete-form">
                @csrf
                @method('DELETE')
                <input type="submit" value="Hapus">
            </form>
        </div>
    </div>
    <hr>
@endforeach
