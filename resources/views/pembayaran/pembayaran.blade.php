@extends('part.layouts')
@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url({{ asset('image/img-blank.png') }});">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Pembayaran</h2>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Our Projects Section ======= -->
    <section id="projects" class="projects p-4">
    <div class="row">
        <div class="col-md-6 order-md-2 mb-6 mx-auto">
          <ul class="list-group ">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
                <div>
                  <h6 class="my-0">Nama Penyewa</h6>
                  <small class="text-muted">Brief description</small>
                </div>
              </li>
              <li class="list-group-item d-flex justify-content-between lh-condensed">
                <div>
                  <h6 class="my-0">Nama Kamar</h6>
                  <small class="text-muted">Brief description</small>
                </div>
              </li>
              <li class="list-group-item d-flex justify-content-between lh-condensed">
                <div>
                  <h6 class="my-0">Harga Kamar</h6>
                  <small class="text-muted">Brief description</small>
                </div>
                <span class="text-muted">$8</span>
              </li>
              <li class="list-group-item d-flex justify-content-between lh-condensed">
                <div>
                  <h6 class="my-0">Ukuran Kamar</h6>
                  <small class="text-muted">Brief description</small>
                </div>
                <span class="text-muted">$5</span>
              </li>
              <li class="list-group-item d-flex justify-content-between lh-condensed">
                <div>
                  <h6 class="my-0">Jangka Sewa</h6>
                  <small class="text-muted">Brief description</small>
                </div>
                <span class="text-muted">$5</span>
              </li>
              <li class="list-group-item d-flex justify-content-between">
                <span>Total Pembayaran (USD)</span>
                <strong>$20</strong>
              </li>
          </ul>

        </div>

        <div class="container">
      

          <div class="row">
            <div class="col-md-4 order-md-2 mb-4">
              <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="badge badge-secondary badge-pill">3</span>
              </h4>
              <ul class="list-group mb-3">
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                  <div>
                    <h6 class="my-0">Nama Kamar</h6>
                  </div>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                  <div>
                    <h6 class="my-0">Harga Kamar</h6>
                    <small class="text-muted">Brief description</small>
                  </div>
                  <span class="text-muted">$8</span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                  <div>
                    <h6 class="my-0">Third item</h6>
                    <small class="text-muted">Brief description</small>
                  </div>
                  <span class="text-muted">$5</span>
                </li>
                <li class="list-group-item d-flex justify-content-between bg-light">
                  <div class="text-success">
                    <h6 class="my-0">Promo code</h6>
                    <small>EXAMPLECODE</small>
                  </div>
                  <span class="text-success">-$5</span>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                  <span>Total (USD)</span>
                  <strong>$20</strong>
                </li>
              </ul>
    
              <form class="card p-2">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Promo code">
                  <div class="input-group-append">
                    <button type="submit" class="btn btn-secondary">Redeem</button>
                  </div>
                </div>
              </form>
            </div>
            <div class="col-md-8 order-md-1">
              <h4 class="mb-3">Billing address</h4>


              <form class="needs-validation" novalidate="" action="" method="POST">
                <div class="row">
                  <div class="mb-3">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" placeholder="Nama" value="{{ auth()->user()->name}}" required="" readonly>
                  </div>
                  <div class="mb-3">
                    <label for="nama_kost">Nama Kamar</label>
                    <input type="text" class="form-control" id="nama_kost" placeholder="Nama Kamar" value="" required="">
                  </div>
                  <div class="mb-3">
                    <label for="harga_kost">Harga Kost</label>
                    <input type="text" class="form-control" id="harga_kost" placeholder="Harga Kost" value="" required="">
                  </div>
                  <div class="mb-3">
                    <label for="tgl_sewa">Tanggal Sewa</label>
                    <input type="date" class="form-control" id="tgl_sewa" placeholder="Tanggal Sewa" value="" required="">
                  </div>
                  <div class="mb-3">
                    <label for="total_harga">Total Harga</label>
                    <input type="text" class="form-control" id="total_harga" placeholder="Total Harga" value="" required="">
                  </div>
                </div>
                
                <hr class="mb-4">
                <button class="btn btn-primary px-3" id="pesan-kost-button">Pesan Kost</button>
                <div id="status-layer" class="alert alert-success" style="display: none; position: fixed; top: 0; left: 0; right: 0; background-color: #4CAF50; color: #fff; text-align: center; padding: 10px;">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Produk</th>
                    <th>Harga</th>
                    <th>Waktu Sewa</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Kamar A01</td>
                    <td>$650</td>
                    <td>1 bulan</td>
                </tr>
            </tbody>
        </table>
    </div>
              </form>
            </div>
          </div>
    
          <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">© 2017-2018 Company Name</p>
            <ul class="list-inline">
              <li class="list-inline-item"><a href="#">Privacy</a></li>
              <li class="list-inline-item"><a href="#">Terms</a></li>
              <li class="list-inline-item"><a href="#">Support</a></li>
            </ul>
          </footer>
        </div>
        <script>
        document.getElementById('pesan-kost-button').addEventListener('click', function (e) {
            e.preventDefault();
    
            // Lakukan logika atau permintaan Ajax sesuai kebutuhan
            // Misalnya, Anda bisa melakukan permintaan Ajax ke server di sini.
    
            // Setelah berhasil, tampilkan lapisan status dengan pesan berhasil.
            var statusLayer = document.getElementById('status-layer');
            statusLayer.style.display = 'block';
        });
    </script>

    </div>     
</div> 
    </section><!-- End Our Projects Section -->

  </main><!-- End #main -->




@endsection
