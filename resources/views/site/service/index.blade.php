@extends('layouts.site.main')
@section('title','Serviços')
@section('content')
<div class="page-banner bg-img bg-img-parallax overlay-dark" style="background-image: url(/site/assets/img/bg_image_3.jpg);">
    <div class="container h-100">
      <div class="row justify-content-center align-items-center h-100">
        <div class="col-lg-8">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Services</li>
            </ol>
          </nav>
          <h1 class="fg-white text-center">Serviços</h1>
        </div>
      </div>
    </div>
</div> <!-- .page-banner -->
<main>

    <div class="page-section">
        <div class="container">
          <div class="text-center">
            <div class="subhead">Nossos serviços</div>

          </div>




          <div class="row justify-content-center">

              @if ($services->count() == 0)
                  <strong>Não existem serviços disponíveis.</strong>
              @else
                  @foreach ($services as $service )

                      <div class="col-md-6 col-lg-4 col-xl-3 py-3 mb-3">
                          <div class="text-center">
                          <div class="img-fluid mb-4">
                              <img src="{{url("storage/{$service->image}")}}" alt="{{$service->title}}" style="width: 400px; height:200px;" class="img-fluid rounded">
                          </div>
                          <h5>{{$service->title}}</h5>
                          <p>{{$service->description}}</p>
                          </div>
                      </div>
                    @endforeach
              @endif







          </div>
        </div> <!-- .container -->
      </div> <!-- .page-section -->


    <!-- Testimonials -->
    <div class="page-section">
      <div class="container">
        <div class="owl-carousel testimonial-carousel">
          <div class="card-testimonial">
            <div class="content">
              The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph
            </div>
            <div class="author">
              <div class="avatar">
                <img src="/site/assets/img/person/person_1.jpg" alt="">
              </div>
              <div class="d-inline-block ml-2">
                <div class="author-name">Sam Watson</div>
                <div class="author-info">CEO - Mosh Elite Ltd.</div>
              </div>
            </div>
          </div>

          <div class="card-testimonial">
            <div class="content">
              The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph
            </div>
            <div class="author">
              <div class="avatar">
                <img src="/site/assets/img/person/person_2.jpg" alt="">
              </div>
              <div class="d-inline-block ml-2">
                <div class="author-name">Edinson Alfa</div>
                <div class="author-info">CEO - Mosh Elite Ltd.</div>
              </div>
            </div>
          </div>

          <div class="card-testimonial">
            <div class="content">
              The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph
            </div>
            <div class="author">
              <div class="avatar">
                <img src="/site/assets/img/person/person_3.jpg" alt="">
              </div>
              <div class="d-inline-block ml-2">
                <div class="author-name">May Halloway</div>
                <div class="author-info">CEO - Mosh Elite Ltd.</div>
              </div>
            </div>
          </div>

          <div class="card-testimonial">
            <div class="content">
              The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph
            </div>
            <div class="author">
              <div class="avatar">
                <img src="/site/assets/img/person/person_1.jpg" alt="">
              </div>
              <div class="d-inline-block ml-2">
                <div class="author-name">Sam Watson</div>
                <div class="author-info">CEO - Mosh Elite Ltd.</div>
              </div>
            </div>
          </div>

          <div class="card-testimonial">
            <div class="content">
              The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph
            </div>
            <div class="author">
              <div class="avatar">
                <img src="/site/assets/img/person/person_2.jpg" alt="">
              </div>
              <div class="d-inline-block ml-2">
                <div class="author-name">Edinson Alfa</div>
                <div class="author-info">CEO - Mosh Elite Ltd.</div>
              </div>
            </div>
          </div>

          <div class="card-testimonial">
            <div class="content">
              The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph
            </div>
            <div class="author">
              <div class="avatar">
                <img src="/site/assets/img/person/person_3.jpg" alt="">
              </div>
              <div class="d-inline-block ml-2">
                <div class="author-name">May Halloway</div>
                <div class="author-info">CEO - Mosh Elite Ltd.</div>
              </div>
            </div>
          </div>

        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .page-section -->

    <div class="page-section">
      <div class="container-fluid">
        <div class="row row-cols-md-3 row-cols-lg-5 justify-content-center text-center">
          <div class="py-3 px-5">
            <img src="/site/assets/img/clients/airbnb.png" alt="">
          </div>
          <div class="py-3 px-5">
            <img src="/site/assets/img/clients/google.png" alt="">
          </div>
          <div class="py-3 px-5">
            <img src="/site/assets/img/clients/mailchimp.png" alt="">
          </div>
          <div class="py-3 px-5">
            <img src="/site/assets/img/clients/paypal.png" alt="">
          </div>
          <div class="py-3 px-5">
            <img src="/site/assets/img/clients/stripe.png" alt="">
          </div>
        </div>
      </div> <!-- .container-fluid -->
    </div> <!-- .page-section -->
</main>
@endsection
