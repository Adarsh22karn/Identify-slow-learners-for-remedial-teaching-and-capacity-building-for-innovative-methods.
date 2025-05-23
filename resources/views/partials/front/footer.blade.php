<!-- Footer Start -->
<footer class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
  <section class="container py-5">
    <div class="row g-5">
      <div class="col-lg-3 col-md-6">
        <h4 class="text-white mb-3">{{ __('Contact') }}</h4>
        <p class="mb-2"><i class="fas fa-map-marker-alt me-3"></i>{{ __('LPU, Jalandher, Punjab-144411') }}</p>
        <p class="mb-2"><i class="fas fa-phone-alt me-3"></i>{{ __('+91 9430974195') }}</p>
        <p class="mb-2"><i class="fas fa-envelope me-3"></i>{{ __('adarshkarn182@gmail.com') }}</p>
        <div class="d-flex pt-2">
          <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/profile.php?id=100088297432649" target="_blank"><i class="fab fa-facebook-f"></i></a>
          <a class="btn btn-outline-light btn-social" href="https://x.com/AdarshAkrn" target="_blank"><i class="fab fa-twitter"></i></a>
          <a class="btn btn-outline-light btn-social" href="https://www.linkedin.com/in/adarsh2/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
          <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/adarsh_infinite/" target="_blank"><i class="fab fa-instagram"></i></a>
          <a class="btn btn-outline-light btn-social" href="https://github.com/Adarsh22karn" target="_blank"><i class="fab fa-github"></i></a>
          
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <h4 class="text-white mb-3">{{ __('Quick Link') }}</h4>
        <a class="btn btn-link" href="{{ route('site.disclaimer') }}">Disclaimer</a>
        <a class="btn btn-link" href="{{ route('site.team') }}">Our Team</a>
        <a class="btn btn-link" href="{{ route('site.privacy') }}">Privacy Policy</a>
        <a class="btn btn-link" href="{{ route('site.terms') }}">Terms & Condition</a>
        <a class="btn btn-link" href="javascript:void(0)">FAQs & Help</a>
      </div>
      <div class="col-lg-3 col-md-6">
        <h4 class="text-white mb-3">{{ __('Gallery') }}</h4>
        <div class="row g-2 pt-2">
          <div class="col-4">
            <img class="img-fluid bg-light p-1" src="{{ asset('img/course-1.jpg') }}" alt="" />
          </div>
          <div class="col-4">
            <img class="img-fluid bg-light p-1" src="{{ asset('img/course-2.jpg') }}" alt="" />
          </div>
          <div class="col-4">
            <img class="img-fluid bg-light p-1" src="{{ asset('img/course-3.jpg') }}" alt="" />
          </div>
          <div class="col-4">
            <img class="img-fluid bg-light p-1" src="{{ asset('img/course-2.jpg') }}" alt="" />
          </div>
          <div class="col-4">
            <img class="img-fluid bg-light p-1" src="{{ asset('img/course-3.jpg') }}" alt="" />
          </div>
          <div class="col-4">
            <img class="img-fluid bg-light p-1" src="{{ asset('img/course-1.jpg') }}" alt="" />
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <h4 class="text-white mb-3">{{ __('Newsletter') }}</h4>
        <p>Stay Updated with Learnopia</p>
        <div class="position-relative mx-auto" style="max-width: 400px;">
          <input class="form-control border-0 w-100 py-3 ps-3 pe-5" type="text" placeholder="Your email" />
          <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">
            <i class="fas fa-paper-plane"></i>
          </button>
        </div>
      </div>
    </div>
  </section>
  <section class="container">
    <div class="copyright">
      <div class="row">
        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
          &copy; <a class="border-bottom" href="{{ route('site.home') }}">{{ config('app.name') }}</a>{{ __(', All Right Reserved') }}.
          {{ __('Created By') }} <a class="border-bottom" href="https://portofolio-website-8yvx.onrender.com">{{ __('Adarsh Karn') }}</a>
        </div>
        <div class="col-md-6 text-center text-md-end">
          <div class="footer-menu">
            <a href="{{ route('site.home') }}">Home</a>
            <a href="{{ route('site.sitemap') }}">Sitemap</a>
            <a href="javascript:void(0)">Help</a>
            <a href="{{ route('site.faq') }}">FQAs</a>
          </div>
        </div>
      </div>
    </div>
  </section>
</footer>
<!-- Footer End -->