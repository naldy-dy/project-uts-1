<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Shafablog.com</title>
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


<div class="row">
   <div class="container pt-5">
        <div class="col-md-9 pt-5">
            <h1><b>{{$blog->judul}}</b></h1>
        </div>
        <ul class="navbar-nav my-2" style="display: inline-table;">
            <li class="nav-item" style="float: right;margin-left: 30px;padding-right: 20px;">Posted on <strong>July 11, 2020</strong></li>
            <li class="nav-item" style="float: right;margin-left: 30px;padding-right: 20px;">By <strong>Nama Post</strong></li>
            <li class="nav-item" style="float: right;margin-left: 30px;padding-right: 20px;">Publishe In <strong>Nama Post</strong></li>
        </ul>

   </div>
</div>
    <div class="row my-4">
        <div class="container">
            <div class="col-md-12">
                <img src="{{url('public')}}/assets/images/image1.jpg" style="width: 100%; border-radius: 20px;" alt="Card image cap">
            </div>
            <div class="col-md-12">
                <div class="card my-5" style="border-radius: 20px;">
                    <div class="card-body">

                        <p class="my-4">
                            {!! nl2br($blog->konten) !!}

                        </p>
                        <div class="row ml-2">
                            <div class="social-share-blog mt-5">
                            <ul class="column3 tags m-0 p-0">
                                <li style="float: left;" class="ml-2">
                                    <p class="m-0 mr-sm-4 mr-2">Tags :</p>
                                </li style="float: left" class="ml-2">
                                <li style="float: left;"><a href="#url" class="btn-small ">{{$blog->kategori}}</a></li>
                                

                            </ul>
                        </div>
                    </div>
                    </div>
                </div>
            </div>



             <div class="card my-5" style="border-radius: 20px;">
                <div class="card-body">   
                    <div class="leave-comment-form my-3 " id="comment">
                        <h3 class="aside-title my-3">Leave a reply</h3>
                        <form action="{{url('konten')}}" method="post">
                            @csrf
                            <div class="input-grids">
                                <div class="form-group">
                                    <input type="text" name="nama" class="form-control" placeholder="Your Name" required="">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email" required="">
                                </div>
                                <div class="form-group">
                                    <textarea name="komentar" class="form-control" placeholder="Your Comment" required=""></textarea>
                                </div>
                            </div>
                            <div class="submit text-right">
                                <button class="btn btn-style btn-primary">Post Comment
                            </button></div>
                        </form>
                    </div>
                </div>
            </div>




            <div class="card" style="border-radius: 20px; padding: 10px;">
                <div class="card-body">
                     <div class="row">
                <div class="col-lg-8">
                    <div class="comments">
                        <h3 class="aside-title pb-3">Recent comments(2)</h3>
                        <div class="comments-grids">
                            <div class="media-grid my-4">
                                <div class="media">
                                    <a class="mr-3 comment-img" href="#url"><img src="{{url('public')}}/assets/images/a1.jpg" class="img-responsive" width="100px" alt="placeholder image" style="border-radius: 50%;"></a>
                                    <div class="media-body comments-grid-right">
                                        <h5>Jack Harry</h5>
                                        <ul class="p-0 comment my-2">
                                            <li class=" my-2">July 15th, 2020 at 11:00 am</li>
                                            <li>
                                                <a href="#comment" class="text-primary">Reply</a>
                                            </li>
                                        </ul>
                                        <p>Mattis ut hendrerit non, facilisis eget mauris. Sed ultricies nec purus
                                            quis
                                            tempor. Phasellus ipsum eu nec purus quis tempor dolor set.</p>

                                    </div>
                                </div>
                            </div>
                            <div class="media-grid my-4">
                                <div class="media">
                                    <a class="mr-3 comment-img" href="#url"><img src="{{url('public')}}/assets/images/a2.jpg" class="img-responsive" width="100px" alt="placeholder image" style="border-radius: 50%;"></a>
                                    <div class="media-body comments-grid-right">
                                        <h5>Charlie</h5>
                                        <ul class="p-0 comment my-2">
                                            <li class="my-2">July 15th, 2020 at 05:45 pm </li>
                                            <li>
                                                <a href="#comment" class="text-primary">Reply</a>
                                            </li>
                                        </ul>
                                        <p>Mattis ut hendrerit non, facilisis eget mauris. Sed ultricies nec purus
                                            quis
                                            tempor. Phasellus eu nec purus quis tempor.
                                        </p>
                                        <div class="media mt-4 mb-0 border-0 px-0 pb-0">
                                            <a class="mr-3 comment-img" href="#url"><img src="{{url('public')}}/assets/images/a3.jpg" class="img-responsive" width="100px" alt="placeholder image" style="border-radius: 50%;"></a>
                                            <div class="media-body my-4 comments-grid-right">
                                                <h5>Jack Harry</h5>
                                                <ul class="p-0 comment my-2">
                                                    <li class=" my-2">July 15th, 2020 at 11:00 am</li>
                                                    <li>
                                                        <a href="#comment" class="text-primary">Reply</a>
                                                    </li>
                                                </ul>
                                                <p>Mattis ut hendrerit non, facilisis eget mauris. Sed ultricies nec
                                                    purus quis
                                                    tempor. dolor set.</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                            


                
        </div>
    </div>




<section class="app-footer my-5">
  <footer class="footer-28 py-5">
    <div class="footer-bg-layer" >
      <div class="container py-lg-3">
        <div class="row footer-top-28">
          <div class="col-lg-4 footer-list-28 copy-right mb-lg-0 mb-sm-5 mt-sm-0 mt-4"  style="border-radius: 50px;">
            <a class="navbar-brand mb-3" href="index.html">
              <span class="fa fa-newspaper-o"></span> NewsBlog</a>
            <p class="copy-footer-28"> © 2020. All Rights Reserved. </p>
            <h5 class="mt-2">Design by <a href="https://w3layouts.com/">Shafa Tasnim Narulita</a></h5>
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
    
</body>

</html>