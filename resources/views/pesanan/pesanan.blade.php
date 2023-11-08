@extends('part.layouts')
@section('content')

{{-- page header start --}}
<div class="container-fluid bg-secondary mb-5">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
        <h1 class="font-weight-semi-bold text-uppercase mb-3" style='color:white'>Detail Toko</h1>
    </div>
</div>
{{-- page header end --}}

{{-- shop detail start --}}
<div class="container-fluid py-5">
    <div class="row px-xl-5">
        <div class="col-lg-5 pb-5">
            <div id="product-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner border">
                    <div class="carousel-item">
                        <img class="w-100 h-100" src="{{ asset('image/img-blank.png') }}" alt="Product Image 1">
                    </div>
                    <div class="carousel-item">
                        <img class="w-100 h-100" src="{{ asset('image/img-blank.png') }}" alt="Product Image 2">
                    </div>
                    <div class="carousel-item active">
                        <img class="w-100 h-100" src="{{ asset('image/img-blank.png') }}" alt="Product Image 3">
                    </div>
                    <div class="carousel-item">
                        <img class="w-100 h-100" src="{{ asset('image/img-blank.png') }}" alt="Product Image 4">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#product-carousel" data-slide="prev">
                    <i class="fa fa-2x fa-angle-left text-dark"></i>
                </a>
                <a class="carousel-control-next" href="#product-carousel" data-slide="next">
                    <i class="fa fa-2x fa-angle-right text-dark"></i>
                </a>
            </div>
        </div>
        @foreach($listkost as $kosts)
        <div class="col-lg-7 pb-5">
            <h3 class="font-weight-semi-bold">{{$kosts->harga_kamar}}</h3>
            <div class="d-flex mb-3">
                <!-- <div class="text-primary mr-2">
                    <small class="fas fa-star"></small>
                    <small class="fas fa-star"></small>
                    <small class="fas fa-star"></small>
                    <small class="fas fa-star-half-alt"></small>
                    <small class="far fa-star"></small>
                </div> -->

            </div>
            <h3 class="font-weight-semi-bold mb-4"></h3>
            <p class="mb-4">
                {{$kosts->nama_kamar}}
            </p>
            <div class="d-flex mb-3">
                <p class="text-dark font-weight-medium mb-0 mr-6" style="margin-right:20px">Jangka Sewa</p>
                <form class="ml-6">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="size-1" name="size">
                        <label class="custom-control-label" for="size-1">1 Bulan</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="size-2" name="size">
                        <label class="custom-control-label" for="size-2">6 Bulan</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="size-3" name="size">
                        <label class="custom-control-label" for="size-3">12 Bulan</label>
                    </div>
                </form>
            </div>
          
            <div class="d-flex align-items-center mb-4 pt-2">
                <button class="btn btn-primary px-3">
                    <i class=""></i> Pesan Kost
                </button>
            </div>

        </div>
        @endforeach
    </div>
    <div class="row px-xl-5">
        <div class="col">
            <div class="nav nav-tabs justify-content-center border-secondary mb-4">
                <a class="nav-item nav-link active" id="deskripsi-tab">Deskripsi</a>
                <a class="nav-item nav-link active" id="ulasan-tab">Ulasan (0)</a>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="tab-pane-1">
                    <h4 class="mb-3">Deskripsi Produk</h4>
                    <p>
                        Eos no lorem eirmod diam diam, eos elitr et gubergren diam sea. Consetetur vero aliquyam invidunt duo dolores et duo sit. Vero diam ea vero et dolore rebum, dolor rebum eirmod consetetur invidunt sed sed et, lorem duo et eos elitr, sadipscing kasd ipsum rebum diam. Dolore diam stet rebum sed tempor kasd eirmod. Takimata kasd ipsum accusam sadipscing, eos dolores sit no ut diam consetetur duo justo est, sit sanctus diam tempor aliquyam eirmod nonumy rebum dolor accusam, ipsum kasd eos consetetur at sit rebum, diam kasd invidunt tempor lorem, ipsum lorem elitr sanctus eirmod takimata dolor ea invidunt.
                    </p>
                    <p>
                        Dolore magna est eirmod sanctus dolor, amet diam et eirmod et ipsum. Amet dolore tempor consetetur sed lorem dolor sit lorem tempor. Gubergren amet amet labore sadipscing clita clita diam clita. Sea amet et sed ipsum lorem elitr et, amet et labore voluptua sit rebum. Ea erat sed et diam takimata sed justo. Magna takimata justo et amet magna et.
                    </p>
                </div>
                <div class="tab-pane fade show active" id="tab-pane-3">
                    <h4 class="mb-4">Beri Ulasan</h4>
                    <small>
                        Alamat email Anda tidak akan dipublikasikan. Bidang yang harus diisi ditandai dengan *
                    </small>
                    <div class="d-flex my-3">
                        <p class="mb-0 mr-2">Rating Anda * :</p>
                        <div class="text-primary">
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                    <form>
                        <div class="form-group">
                            <label for="message">Ulasan Anda *</label>
                            <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="name">Nama Anda *</label>
                            <input type="text" class="form-control" id="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Alamat Email Anda *</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="form-group mb-0">
                            <input type="submit" value="Kirim Ulasan Anda" class="btn btn-primary px-3">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Ketika tombol "Ulasan (0)" ditekan, aktifkan tab ulasan
    document.getElementById('ulasan-tab').addEventListener('click', function (e) {
        e.preventDefault();
        var ulasanTab = document.getElementById('tab-pane-3');
        var deskripsiTab = document.getElementById('tab-pane-1');
        
        ulasanTab.classList.add('show', 'active');
        deskripsiTab.classList.remove('show', 'active');
    });

    // Ketika tombol "Deskripsi" ditekan, aktifkan tab deskripsi
    document.getElementById('deskripsi-tab').addEventListener('click', function (e) {
        e.preventDefault();
        var ulasanTab = document.getElementById('tab-pane-3');
        var deskripsiTab = document.getElementById('tab-pane-1');
        
        deskripsiTab.classList.add('show', 'active');
        ulasanTab.classList.remove('show', 'active');
    });
    // Menghapus kelas "show" dan "active" dari tab ulasan secara default
    var ulasanTab = document.getElementById('tab-pane-3');
    ulasanTab.classList.remove('show', 'active');
</script>


@endsection
