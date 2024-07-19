@extends('layout.headerFooter')
@section('title','Maps')

@section('content')
<main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>MAPS</h1>
              <p class="mb-0 justify-content-center">Halaman Maps</p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Services</li>
          </ol>
        </div>
      </nav>
      <section>
        
        <div class="container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3963.3938274581546!2d106.7786087!3d-6.5978796!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c5f35267babf%3A0xb598393b6725bdd8!2sPusat%20Standardisasi%20Instrumen%20Pengelolaan%20Hutan%20Berkelanjutan!5e0!3m2!1sen!2sid!4v1720789409569!5m2!1sen!2sid" width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        
      </section>
    </div><!-- End Page Title -->

   
  </main>
@endsection