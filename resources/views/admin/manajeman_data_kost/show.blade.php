<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Kost</title>
  <link rel="stylesheet" href="{{asset ('css/show.css') }}">
</head>
<body>
  <div class="container">
    <h4>Data Kost</h4>
    <div class="manajemen_data_kost-info">
      <p>Nama Kamar : <span>{{ $kost->nama_kamar }}</span></p>
      <p>Gambar : <span>{{ $kost->image }}</span></p>
      <p>Ukuran Kamar : <span>{{ $kost->ukuran_kamar }}</span></p>
      <p>Deskripsi: <span>{{ $kost->description }}</span></p>
      <p>Harga Kamar : <span>{{ $kost->harga_kamar }}</span></p>
    </div>
  </div>
</body>
</html>
