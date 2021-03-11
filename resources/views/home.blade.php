@extends('layouts.app')

@section('title')
    Besi Study Consultancy | Home
@endsection

@section('content')

{{-- < Slider Start > --}}

<section class="my-slider">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="assets/images/slider/slider1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
                <button class="btn btn-danger">Submit</button>
              </div>
          </div>
          <div class="carousel-item">
            <img src="assets/images/slider/slider2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
                <button class="btn btn-danger">Submit</button>
              </div>
          </div>
          <div class="carousel-item">
            <img src="assets/images/slider/slider3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
                <button class="btn btn-danger">Submit</button>
              </div>
          </div>
        </div>
      </div>
</section>

{{-- </ Slider Ends > --}}


<section class="">
    <div class="container pt-5 pb-5">
        <div class="row">
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-2 col-">
                <div class="home-single-content shadow-lg p-5 m-2 rounded-3">
                    <a href="http://"><i class="fas fa-search"></i></a>
                    <h2 class="p-2">Course search</h2>
                    <p>Could your ideal course be in Australia, Canada, New Zealand, the UK or the US?</p>
                </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-2 col-">
                <div class="home-single-content shadow-lg p-5 m-2 rounded-3">
                    <a href="http://"><i class="far fa-comment-dots"></i></a>
                    <h2 class="p-2">See with us</h2>
                    <p>Got questions? We can help. Book a free appointment with one of our expert teams.</p>
                </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-2 col-">
                <div class="home-single-content shadow-lg p-5 m-2 rounded-3">
                    <a href="http://"><i class="fas fa-globe"></i></a>
                    <h2 class="p-2">Why BESI</h2>
                    <p>As international education experts, we can turn your dreams into plan our expert teams.</p>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- < Students Stories Start > --}}

<section class="students-stories pt-5 pb-5">
    <div class="container">
        <h2 class="pb-3">Our students share their stories...</h2>
        <div class="row">
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-2 col-">
                <div class="student-stories-single-content shadow-lg p-5 m-2 rounded-3">
                    <img src="assets/images/stories/video1.jpg" alt="" srcset="">
                </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-2 col-">
                <div class="student-stories-single-content shadow-lg p-5 m-2 rounded-3">
                    <img src="assets/images/stories/video2.jpg" alt="" srcset="">
                </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-2 col-">
                <div class="student-stories-single-content shadow-lg p-5 m-2 rounded-3">
                    <img src="assets/images/stories/video3.jpg" alt="" srcset="">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- </ Students Stories Ends > --}}

{{-- What student Says Start--}}



{{-- What student Says end--}}


@endsection
