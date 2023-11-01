@extends('part.layouts')
@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url({{ asset('image/img-blank.png') }});">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Portofolio</h2>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Our Projects Section ======= -->
    <section id="projects" class="projects">
      <div class="container" data-aos="fade-up">

        <div class="portfolio-isotope" data-portfolio-layout="masonry" data-portfolio-sort="original-order">

          <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
              <div class="portfolio-content h-100">
                <img src="{{ asset('image/img-blank.png') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Remodeling 1</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="{{ asset('image/img-blank.png') }}" title="Remodeling 1"
                    data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i
                      class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i
                      class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                <div class="portfolio-content h-100">
                  <img src="{{ asset('image/img-blank.png') }}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Remodeling 1</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                    <a href="{{ asset('image/img-blank.png') }}" title="Remodeling 1"
                      data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i
                        class="bi bi-zoom-in"></i></a>
                    <a href="project-details.html" title="More Details" class="details-link"><i
                        class="bi bi-link-45deg"></i></a>
                  </div>
                </div>
              </div><!-- End Projects Item -->

              <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                <div class="portfolio-content h-100">
                  <img src="{{ asset('image/img-blank.png') }}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Remodeling 1</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                    <a href="{{ asset('image/img-blank.png') }}" title="Remodeling 1"
                      data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i
                        class="bi bi-zoom-in"></i></a>
                    <a href="project-details.html" title="More Details" class="details-link"><i
                        class="bi bi-link-45deg"></i></a>
                  </div>
                </div>
              </div><!-- End Projects Item -->

              <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                <div class="portfolio-content h-100">
                  <img src="{{ asset('image/img-blank.png') }}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Remodeling 1</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                    <a href="{{ asset('image/img-blank.png') }}" title="Remodeling 1"
                      data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i
                        class="bi bi-zoom-in"></i></a>
                    <a href="project-details.html" title="More Details" class="details-link"><i
                        class="bi bi-link-45deg"></i></a>
                  </div>
                </div>
              </div><!-- End Projects Item -->


          </div><!-- End Projects Container -->

        </div>

      </div>
    </section><!-- End Our Projects Section -->

  </main><!-- End #main -->




@endsection
