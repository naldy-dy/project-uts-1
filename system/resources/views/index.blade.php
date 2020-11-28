<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Blog Shafa</title>

   @include('section.assets')
  </head>
  <body>
<!-- header -->
<header class="w3l-header">
	<div class="container">
	<!--/nav-->
	
    @include('section.header')
	<!--//nav-->
</header>
<!-- //header -->
<!-- /homeblock1-->
<section class="w3l-homeblock1 py-sm-5 py-4">
    <div class="container py-md-4">
        <div class="grids-area-hny main-cont-wthree-fea row">
            <div class="col-lg-3 col-6 grids-feature">
                <a href="beauty.html">
                    <div class="area-box">
                        <span class="fa fa-bath"></span>
                        <h4 class="title-head">Beauty</h4>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-6 grids-feature">
                <a href="fashion.html">
                    <div class="area-box">
                        <span class="fa fa-female"></span>
                        <h4 class="title-head">Fashion and style</h4>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-6 grids-feature mt-lg-0 mt-md-4 mt-3">
                <a href="#food">
                    <div class="area-box">
                        <span class="fa fa-cutlery"></span>
                        <h4 class="title-head">Food and wellness</h4>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-6 grids-feature mt-lg-0 mt-md-4 mt-3">
                <a href="#lifsetyle">
                    <div class="area-box">
                        <span class="fa fa-pie-chart"></span>
                        <h4 class="title-head">Lifestyle</h4>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- //homeblock1-->

<section class="w3l-testimonials" id="testimonials">
    <!-- main-slider -->
    <div class="testimonials pt-2 pb-5">
        <div class="container pb-lg-5">
            <div class="owl-testimonial owl-carousel owl-theme mb-md-0 mb-sm-5 mb-4">
                <div class="item">
                    <div class="row slider-info">
                        <div class="col-lg-8 message-info align-self">
                            <span class="label-blue mb-sm-4 mb-3">My Blog</span>
                            <h3 class="title-big mb-4">Selamat datang di blog saya, Kreasikan keinginan anda
                            </h3>
                            <p class="message">
                                
                            </p>
                        </div>
                        <div class="col-lg-4 col-md-8 img-circle mt-lg-0 mt-4">
                            <img src="{{url('public')}}/assets/images/beauty.jpg" class="img-fluid radius-image-full" alt="client image">
                        </div>
                    </div>
                </div>

                
            </div>
        </div>
    </div>
    <!-- /main-slider -->
</section>

<div class="w3l-homeblock2 py-5">
    <div class="container py-lg-5 py-md-4">
        <!-- block -->
        <div class="left-right">
            <h3 class="section-title-left mb-sm-4 mb-2"> Rekomndasi Buat Anda</h3>
            <a href="fashiom.html" class="more btn btn-small mb-sm-0 mb-4">View more</a>
        </div>
        <div class="row">

           @foreach($list_blog as $blog)
            <div class="col-lg-4 pt-3 col-md-6 item">
                <div class="card">
                    <div class="card-header p-0 position-relative">
                        <a href="#blog-single.html">
                            <img class="card-img-bottom d-block radius-image-full" src="{{url('public')}}/assets/images/fashion1.jpg"
                                alt="Card image cap">
                        </a>
                    </div>
                    <div class="card-body blog-details">
                        <a href="{{url('konten', $blog->id)}}" class="blog-desc">{{$blog->judul}}
                        </a>
                        <div class="author align-items-center">
                            <img src="{{url('public')}}/assets/images/a1.jpg" alt="" class="img-fluid rounded-circle" />
                            <ul class="blog-meta">
                                <li>
                                    <a href="author.html">Isabella ava</a> </a>
                                </li>
                                <li class="meta-item blog-lesson">
                                    <span class="meta-value ml-2"><span class="fa fa-clock-o"></span> Rilis {{$blog->created_at}}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
           @endforeach


        </div>
    </div>
</div>
<div class="w3l-homeblock2 w3l-homeblock5 py-5">
    <div class="container py-lg-5 py-md-4">
        <!-- block -->
        <div class="left-right">
            <h3 class="section-title-left mb-sm-4 mb-2"> Beauty</h3>
            <a href="beauty.html" class="more btn btn-small mb-sm-0 mb-4">View more</a>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="bg-clr-white hover-box">
                    <div class="row">
                        <div class="col-sm-5 position-relative">
                            <a href="#blog-single.html" class="image-mobile">
                                <img class="card-img-bottom d-block radius-image-full" src="{{url('public')}}/assets/images/beauty1.jpg"
                                    alt="Card image cap">
                            </a>
                        </div>
                        <div class="col-sm-7 card-body blog-details align-self">
                            <a href="#blog-single.html" class="blog-desc">Natural Spa - Where you feel unique and special
                            </a>
                            <div class="author align-items-center">
                                <img src="{{url('public')}}/assets/images/a1.jpg" alt="" class="img-fluid rounded-circle" />
                                <ul class="blog-meta">
                                    <li>
                                        <a href="author.html">Isabella ava</a> </a>
                                    </li>
                                    <li class="meta-item blog-lesson">
                                        <span class="meta-value"> July 13, 2020 </span>. <span
                                            class="meta-value ml-2"><span class="fa fa-clock-o"></span> 1 min</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mt-lg-0 mt-4">
                <div class="bg-clr-white hover-box">
                    <div class="row">
                        <div class="col-sm-5 position-relative">
                            <a href="#blog-single.html" class="image-mobile">
                                <img class="card-img-bottom d-block radius-image-full" src="{{url('public')}}/assets/images/beauty2.jpg"
                                    alt="Card image cap">
                            </a>
                        </div>
                        <div class="col-sm-7 card-body blog-details align-self">
                            <a href="#blog-single.html" class="blog-desc">How to get Beautiful coloring Highlights this weak
                            </a>
                            <div class="author align-items-center">
                                <img src="{{url('public')}}/assets/images/a2.jpg" alt="" class="img-fluid rounded-circle" />
                                <ul class="blog-meta">
                                    <li>
                                        <a href="author.html">Charlotte mia</a> </a>
                                    </li>
                                    <li class="meta-item blog-lesson">
                                        <span class="meta-value"> July 13, 2020 </span>. <span
                                            class="meta-value ml-2"><span class="fa fa-clock-o"></span> 1 min</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mt-4">
                <div class="bg-clr-white hover-box">
                    <div class="row">
                        <div class="col-sm-5 position-relative">
                            <a href="#blog-single.html" class="image-mobile">
                                <img class="card-img-bottom d-block radius-image-full" src="{{url('public')}}/assets/images/beauty3.jpg"
                                    alt="Card image cap">
                            </a>
                        </div>
                        <div class="col-sm-7 card-body blog-details align-self">
                            <a href="#blog-single.html" class="blog-desc">New Hair Styles can look fabulous and shiny
                            </a>
                            <div class="author align-items-center">
                                <img src="{{url('public')}}/assets/images/a3.jpg" alt="" class="img-fluid rounded-circle" />
                                <ul class="blog-meta">
                                    <li>
                                        <a href="author.html">Elizabeth</a> </a>
                                    </li>
                                    <li class="meta-item blog-lesson">
                                        <span class="meta-value"> July 13, 2020 </span>. <span
                                            class="meta-value ml-2"><span class="fa fa-clock-o"></span> 1 min</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mt-4">
                <div class="bg-clr-white hover-box">
                    <div class="row">
                        <div class="col-sm-5 position-relative">
                            <a href="#blog-single.html" class="image-mobile">
                                <img class="card-img-bottom d-block radius-image-full" src="{{url('public')}}/assets/images/beauty4.jpg"
                                    alt="Card image cap">
                            </a>
                        </div>
                        <div class="col-sm-7 card-body blog-details align-self">
                            <a href="#blog-single.html" class="blog-desc">How our dreams should shine and spray beauty to us.</a>
                            <div class="author align-items-center">
                                <img src="{{url('public')}}/assets/images/a1.jpg" alt="" class="img-fluid rounded-circle" />
                                <ul class="blog-meta">
                                    <li>
                                        <a href="author.html">Isabella ava</a> </a>
                                    </li>
                                    <li class="meta-item blog-lesson">
                                        <span class="meta-value"> July 13, 2020 </span>. <span
                                            class="meta-value ml-2"><span class="fa fa-clock-o"></span> 1 min</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="w3l-subscribe py-5">
    <div class="container py-lg-5 py-md-4">
        <div class="w3l-subscribe-content text-center bg-clr-white py-md-5 py-2">
            <div class="py-5">
                <h3 class="section-title-left mb-2">Subscribe to our newsletter!</h3>
                <p class="mb-md-5 mb-4">We'll send you the best of our blog just once a month. We promise. </p>
                <form action="#" method="GET" class="subscribe">
                    <input type="email" class="subscribe_input" name="search" placeholder="Email address" required="">
                    <button class="btn btn-style btn-primary">Subscribe</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- footer-28 block -->
<section class="app-footer">
  <footer class="footer-28 py-5">
    <div class="footer-bg-layer">
      <div class="container py-lg-3">
        <div class="row footer-top-28">
          <div class="col-lg-4 footer-list-28 copy-right mb-lg-0 mb-sm-5 mt-sm-0 mt-4">
            <a class="navbar-brand mb-3" href="index.html">
              <span class="fa fa-newspaper-o"></span> NewsBlog</a>
            <p class="copy-footer-28"> © 2020. All Rights Reserved. </p>
            <h5 class="mt-2">Design by <a href="https://w3layouts.com/">W3Layouts</a></h5>
          </div>
          <div class="col-lg-8 row">
            <div class="col-sm-4 col-6 footer-list-28">
              <h6 class="footer-title-28">Useful links</h6>
              <ul>
                <li><a href="#categories">food blogs</a></li>
                <li><a href="#advertise">Advertise with us</a></li>
                <li><a href="#authors">Our Authors</a></li>
                <li><a href="contact.html">Get in touch</a></li>
              </ul>
            </div>
            <div class="col-sm-4 col-6 footer-list-28">
              <h6 class="footer-title-28">Categories</h6>
              <ul>
                <li><a href="beauty.html">Beauty</a></li>
                <li><a href="fashion.html">Fashion and Style</a></li>
                <li><a href="#food"> Food and Wellness</a></li>
                <li><a href="#lifestyle">Lifestyle</a></li>
              </ul>
            </div>
            <div class="col-sm-4 col-6 footer-list-28 mt-sm-0 mt-4">
              <h6 class="footer-title-28">Social Media</h6>
              <ul class="social-icons">
                <li class="facebook">
                  <a href="#facebook"><span class="fa fa-facebook"></span> Facebook</a></li>
                <li class="twitter"> <a href="#twitter"><span class="fa fa-twitter"></span> Twitter</a></li>
                <li class="linkedin"> <a href="#linkedin"><span class="fa fa-linkedin"></span> Linkedin</a></li>
                <li class="dribbble"><a href="#dribbble"><span class="fa fa-dribbble"></span> Dribbble</a></li>
              </ul>

            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </footer>

  <!-- move top -->
  <button onclick="topFunction()" id="movetop" title="Go to top">
    <span class="fa fa-angle-up"></span>
  </button>
@include('section.js')

</body>

</html>