<!DOCTYPE html>
<html lang="en">

<?php include('header.php'); ?>

<body class="page-portfolio">

  <!-- ======= Header ======= -->
  <?php include('navbar.php'); ?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/mainimg.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Gallery</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Gallery</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">

          <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">Scooters</li>
            <li data-filter=".filter-product">Cars</li>
            <li data-filter=".filter-branding">Bicycles</li>
          </ul><!-- End Portfolio Filters -->

          <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="300">

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <img src="assets\gallery\activa.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Activa</h4>
                <p>very efficent on roads </p>
                <a href="assets\gallery\activa.jpg" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-product">
              <img src="assets\gallery\mahindra-thar-car-1000x1000.webp" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Mahindra Thar</h4>
                <p>Best option for travel .. sesthetic and efficent</p>
                <a href="assets\gallery\mahindra-thar-car-1000x1000.webp" title="Product 1" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-branding">
              <img src="assets\gallery\scott.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Scott- bicycle</h4>
                <p>Very good on high altitudes</p>
                <a href="assets\gallery\scott.jpg" title="Branding 1" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

           <!--  <div class="col-lg-4 col-md-6 portfolio-item filter-books">
              <img src="assets/img/portfolio/books-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Books 1</h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                <a href="assets/img/portfolio/books-1.jpg" title="Branding 1" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!- --><!--  End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <img src="assets\img\suzuki-gixxer-sf-150cc-bike.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Suzuki gixer</h4>
                <p>Very efficent and the best speed</p>
                <a href="assets\img\suzuki-gixxer-sf-150cc-bike.jpg" title="App 2" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-product">
              <img src="assets\gallery\mahidraxylo.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Mahindra xylo</h4>
                <p>Very good car option for a family holiday</p>
                <a href="assets\gallery\mahidraxylo.jpg" title="Product 2" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-branding">
              <img src="assets\gallery\trek.jpg"class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Trek-bicycle</h4>
                <p> a convertable bike .. easy to carry</p>
                <a href="assets\gallery\trek.jpg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

           <!--  <div class="col-lg-4 col-md-6 portfolio-item filter-books">
              <img src="assets/img/portfolio/books-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Books 2</h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                <a href="assets/img/portfolio/books-2.jpg" title="Branding 2" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!- --<! -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <img src="assets\gallery\vintage-european-orange-scooter-white-background-3d-rendering_101266-892.webp" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Vintage europeian</h4>
                <p>A very instagram friendy sccoter for youe travel</p>
                <a href="assets\gallery\vintage-european-orange-scooter-white-background-3d-rendering_101266-892.webp" title="App 3" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-product">
              <img src="assets\gallery\audi-a3-cabriolet.jpg"class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Audi A3</h4>
                <p>Convertable car to enjoy the views</p>
                <a href="assets\gallery\audi-a3-cabriolet.jpg" title="Product 3" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-branding">
              <img src="assets/gallery/cann.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Cannondale-bicycle</h4>
                <p>Very good gyres.. very efficient for racing</p>
                <a href="assets/gallery/cann.jpg"title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

           <!--  <div class="col-lg-4 col-md-6 portfolio-item filter-books">
              <img src="assets/img/portfolio/books-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Books 3</h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                <a href="assets/img/portfolio/books-3.jpg" title="Branding 3" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="Moreetails" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!- --><!--  End Portfolio Item  --> 

          </div><!-- End Portfolio Container -->

        </div>

      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include('footer.php'); ?>

</body>

</html>